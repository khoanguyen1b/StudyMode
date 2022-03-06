<?php

namespace Modules\FoCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'sys_countries';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'code',
        'name',
        'is_active'
    ];
}
