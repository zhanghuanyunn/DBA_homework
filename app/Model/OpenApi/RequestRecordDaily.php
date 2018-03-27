<?php

namespace App\Model\OpenApi;

use Illuminate\Database\Eloquent\Model;

class RequestRecordDaily extends Model
{
    protected $connection = 'mysql_openapi';
    protected $table = 'open_request_records_daily';
    protected $fillable = ['id','appid','route_name','path','pv','uv','created_at','updated_at'];

    protected $year = null;

    public function setUpdatedAt($value)
    {

    }

    public static function year($year = null){
        $instance = new static;
        $instance->setYear($year);
        return $instance->newQuery();
    }

    public function setYear($year = null){
        $this->year = $year;
        if($year != null){
            $this->table = $this->getTable().'_'.$year;
        }
    }

    public function newInstance($attributes = array(), $exists = false){
        $model = parent::newInstance($attributes, $exists);
        $model->setYear($this->year);
        return $model;
    }


}
