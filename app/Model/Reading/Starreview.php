<?php

namespace App\Model\Reading;

use Illuminate\Database\Eloquent\Model;

class Starreview extends Model
{
    protected $connection = 'mysql_reading';
    protected $table = 'starreviews';
    protected $fillable = ["user_id","book_id","content"];
    public function user()
    {
        return $this->belongsTo('App\Model\Reading\User','user_id','id');
    }
    public function book()
    {
        return $this->belongsTo('App\Model\Reading\Book','book_id','library_index');
    }

}
