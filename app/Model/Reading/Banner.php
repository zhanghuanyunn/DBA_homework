<?php

namespace App\Model\Reading;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $connection = 'mysql_reading';
    protected $table = 'banners';
    protected $fillable = ["title","img_url","url"];

}
