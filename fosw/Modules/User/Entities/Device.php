<?php

namespace Modules\User\Entities;

use Modules\Core\Entities\BasicModel;
use Modules\Core\Entities\User;

class Device extends BasicModel
{
    protected $table = 'devices';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'user_id',
        'token',
        'platform',
        'type_app'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function create($request, string $user_id): ?object
    {
        $object = new Device();
        $object->user_id = $user_id;
        $object->token = $request['device_token'];
        $object->platform = strtoupper($request->header('platform'));
        $object->save();
        return $object;
    }

    public function destroyDeviceId($request, string $user_id): bool
    {
        $device = Device::query()->where('user_id', $user_id)->where('token', $request['device_token'])->delete();
        return true;
    }
}
