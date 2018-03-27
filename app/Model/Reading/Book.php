<?php

namespace App\Model\Reading;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $connection = 'mysql_reading';
    protected $table = 'books';
    public function review()
    {
        return $this->hasMany('App\Model\Reading\Review','book_id','library_index');
    }
    public function starreview()
    {
        return $this->hasMany('App\Model\Reading\Starreview','book_id','library_index');
    }

}
