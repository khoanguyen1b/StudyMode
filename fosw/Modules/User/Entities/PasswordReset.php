<?php

namespace Modules\User\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PasswordReset extends Model
{
    protected $table = 'password_resets';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'email',
        'token',
        'created_at',
        'updated_at'
    ];

    public static function create($email, $token = null)
    {
        $record = new PasswordReset();
        $record->email = $email;
        $record->token = $token ?? Str::random(60);
        $record->save();

        return $record;
    }

    public static function canResetPassword($email)
    {
        $record = PasswordReset::query()
            ->where('email', $email)
            ->orderBy('created_at', 'desc')
            ->first();

        if (empty($record)) {
            return true;
        }

        $covertTime = strtotime($record->created_at);
        $covertTimeNow = strtotime(Carbon::now());

        if ($covertTimeNow - $covertTime >= config('user.reset_password_time')) {
            return true;
        }

        return false;
    }
}
