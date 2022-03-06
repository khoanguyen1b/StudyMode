<?php

namespace Modules\FoCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'sys_provinces';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'country_id',
        'name',
        'is_active'
    ];
}
