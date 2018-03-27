<?php

namespace App\Model\Reading;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $connection = 'mysql_reading';
    protected $table = 'logs';
    protected $fillable = [];

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
