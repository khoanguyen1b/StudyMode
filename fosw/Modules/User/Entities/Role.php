<?php

namespace Modules\User\Entities;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    protected $table = 'roles';
    protected $fillable = ['id', 'name'];

    protected $appends = [
        'total_users',
        'total_permissions'
    ];

    public function getTotalUsersAttribute()
    {
        return $this->belongsToMany(User::class, 'model_has_roles', 'role_id', 'model_id')
            ->where(function ($query) {
                $query->whereNull('is_admin');
                $query->orWhere('is_admin', 0);
            })
            ->count();
    }

    public function getTotalPermissionsAttribute()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions')->count();
    }

    public static function getList($request)
    {
        $permissions = Role::query()->select('id', 'name')->get();

        return $permissions;
    }

    public static function createRole(Request $request)
    {
        $role = new Role();
        $role->name = $request->get('name');
        $role->guard_name = 'web';
        $role->save();

        $permissions = Permission::query()
            ->whereIn('id', $request->get('permissions'))
            ->pluck('name')
            ->toArray();

        $role->syncPermissions($permissions);

        return $role;
    }

    public static function updateRole($id, $data)
    {
        $role = Role::find($id);

        if (empty($role)) {
            return null;
        }

        $role->name = $data['name'];
        $role->save();

        $permissions = Permission::query()
            ->whereIn('id', $data['permissions'])
            ->pluck('name')
            ->toArray();

        $role->syncPermissions($permissions);

        return $role;
    }
}
