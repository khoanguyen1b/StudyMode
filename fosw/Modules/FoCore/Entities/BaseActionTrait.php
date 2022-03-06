<?php
namespace Modules\FoCore\Entities;


use Illuminate\Support\Facades\DB;

trait BaseActionTrait
{
    public function getObjectByAttributeUnique(string $attribute,string $value)
    {
        $execute = DB::table($this->table)->where($attribute,$value)->first();
        $result  = ($execute) ? $execute->toArray() : [] ;
        return $result;
    }

    public function getArrayValueByColumn(string $attribute,string $value)
    {
        $execute = DB::table($this->table)->where($attribute,$value)->get();
        $result  = ($execute) ? $execute->toArray() : [] ;
        return $result;
    }

    public function getArrayValueByAttributeUnique(string $attribute,array $array_value)
    {
        $execute = DB::table($this->table)->whereIn($attribute,$array_value)->get();
        $resultExecute  = ($execute->count()>0) ? $execute->toArray() : [] ;
        if(count($resultExecute)>0){
            $result = [];
            foreach ($resultExecute as $key => $value)
            {
                $result[$value->{$attribute}] = $value->value;
            }
            return $result;
        }
        return $resultExecute;
    }
}
