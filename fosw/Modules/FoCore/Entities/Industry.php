<?php

namespace Modules\FoCore\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry extends Model
{
    protected $table = 'sys_industries';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name'
    ];

    public static function getList($request): array
    {
        $response = array();
        $data = Industry::query()
            ->select('sys_industries.id', 'sys_industries.name', 'sys_industries.created_at');

        $response['count'] = $data->count();

        if (isset($request['skip']) && isset($request['limit'])) {
            $data = $data->skip($request['skip'])->limit($request['limit']);
        }

        $data = $data->orderByDesc('sys_industries.created_at')->get();
        $response['data'] = $response['count'] > 0 ? $data : [];
        return $response;
    }
}
