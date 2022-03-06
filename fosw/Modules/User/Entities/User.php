<?php

namespace Modules\User\Entities;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Media\Entities\MediaFile;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;

    protected $table = 'users';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'ref_id',
        'code',
        'first_name',
        'last_name',
        'mobile',
        'email',
        'password',
        'address',
        'industry_id',
        'country_id',
        'province_id',
        'avatar',
        'is_admin',
        'verify_code',
        'verify_time',
        'verify_limited',
        'is_verify',
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [
        'password',
        'verify_code',
        'verify_time',
        'verify_limited',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function getApiPermissionsAttribute()
    {
        return $this->getAllPermissions()->pluck('name');
    }

    public function avatarFile()
    {
        return $this->belongsTo(MediaFile::class, 'avatar', 'id')
            ->select('id', 'file_path_thumbnail', 'file_path_normal');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'model_has_roles', 'model_id', 'role_id');
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)Str::uuid();
        });
    }

    public function responseLogin($is_login = true, $user_register = null)
    {
        $user = ($is_login) ? auth()->user() : $user_register;

        if ($user && $user->avatar) {
            $user->avatar = $user->avatarFile->file_path_thumbnail;
        }

        $user->append('api_permissions');
        $user->makeHidden('roles');
        $user->makeHidden('permissions');
        return [
            "token" => $user->createToken(config('app.name'))->accessToken,
            "data" => $user
        ];
    }



    public function getInfo()
    {
        $user = User::query()->select(
            'id',
            'full_name',
            'mobile',
            'email',
            'avatar',
            'is_admin',
            'is_verify'
        )->where('users.id', Auth::id())->first();

        $user->append('api_permissions');
        $user->makeHidden('roles');
        $user->makeHidden('permissions');

        if ($user->avatar) {
            $user->avatar = $user->avatarFile->file_path_thumbnail;
        }

        return $user;
    }

    public function changePassword($request)
    {
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }

    public static function create($request)
    {
        $data = new User();
        $data->code = Str::random(6);
        $data->first_name = $request['first_name'] ?? explode("@", $request['email'])[0];
        $data->last_name = $request['last_name'] ?? null;
        $data->mobile = $request['mobile'];
        $data->email = $request['email'];
        $data->password = Hash::make($request['password']);
        $data->is_admin = $request['is_admin'] ?? 0;
        $data->save();

        if (isset($request['roles'])) {
            $data->syncRoles($request['roles']);
        }
        return $data;
    }

    public function checkPhoneExist($mobile)
    {
        return User::query()->where('mobile', $mobile)->first();
    }

    public function checkEmailExist($email)
    {
        return User::query()->where('email', $email)->first();
    }

    public static function updateProfile($request)
    {
        $user = Auth::user();

        $user->full_name = $request['full_name'];
        $user->mobile = $request['mobile'];
        $user->email = $request['email'] ?? null;
        $user->save();

        if ($user->avatar && !empty($user->avatarFile)) {
            $user->avatar = $user->avatarFile->file_path_thumbnail;
        }

        return $user;
    }

    static function checkExisted($key, $value)
    {
        return User::query()->where($key, $value)->first();
    }


    public static function updateAvatar($avatar, $id)
    {
        if (empty($id)) {
            $user = Auth::user();
        } else {
            $user = User::find($id);
        }

        $user->avatar = $avatar;
        $user->save();

        if ($user->avatar && !empty($user->avatarFile)) {
            $user->avatar = $user->avatarFile->file_path_thumbnail;
        }

        return $user;
    }

    public static function updateUser($user, $request)
    {
        $user->full_name = $request['full_name'];
        $user->mobile = $request['mobile'];
        $user->email = $request['email'];
        $user->save();
        $user->syncRoles($request['roles']);

        return $user;
    }

    public static function getList(Request $request)
    {
        $page = $request->get('page');
        $size = $request->get('size');
        $role = $request->get('role');
        $search = $request->get('search');
        $cacheData = User::getListFormCache($request);

        if ($cacheData) {
            return $cacheData;
        }

        $users = User::query()->with('roles')->with('avatarFile')->select(
            'id',
            'full_name',
            'mobile',
            'email',
            'avatar',
            'is_verify'
        )->where(function ($query) {
            $query->whereNull('is_admin');
            $query->orWhere('is_admin', 0);
        })->when($role, function ($query, $role) {
            return $query->whereHas('roles', function ($query) use ($role) {
                return $query->where('id', $role);
            });
        });

        if ($search) {
            $users = $users->where(function ($query) use ($search) {
                $searchColumn = ['full_name', 'mobile', 'email'];

                foreach ($searchColumn as $index => $column) {
                    if ($index == 0) {
                        $query->where($column, 'like', '%' . $search . '%');
                    } else {
                        $query->orWhere($column, 'like', '%' . $search . '%');
                    }
                }
            });
        }

        $count = $users->count();

        if (is_numeric($page) && is_numeric($size)) {
            $users = $users->offset($page * $size)->limit($size);
        }

        $users = $users->orderBy('created_at', 'desc')->get();

        $data = [
            'data' => $users->toArray(),
            'count' => $count
        ];

        return $data;
    }
}
