<?php

namespace App\Model\Bicycle;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $connection = 'mysql_openapi';
    protected $table = 'request_records';
    protected $fillable = [];
}
