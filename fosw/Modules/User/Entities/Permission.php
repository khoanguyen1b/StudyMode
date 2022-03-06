<?php

namespace Modules\User\Entities;

use Spatie\Permission\Models\Permission as OriginalPermission;

class Permission extends OriginalPermission
{
    protected $table = 'permissions';
    protected $fillable = ['id', 'name', 'parent_id', 'guard_name'];

    public function children()
    {
        return $this->hasMany(Permission::class, 'parent_id')
            ->select('id', 'name', 'parent_id')
            ->with('children');
    }

    public function parent()
    {
        return $this->belongsTo(Permission::class, 'parent_id');
    }

    public static function getList($request)
    {
        $permissions = Permission::query()->with('children')
            ->select('id', 'name')
            ->whereNull('parent_id')
            ->get();

        return $permissions;
    }
}
