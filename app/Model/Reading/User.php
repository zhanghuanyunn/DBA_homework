<?php

namespace App\Model\Reading;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mysql_reading';
    protected $table = 'users';
    public function starreview()
    {
        return $this->hasMany('App\Model\Reading\Starreview');
    }
    public function review()
    {
        return $this->hasMany('App\Model\Reading\Review');
    }

}
