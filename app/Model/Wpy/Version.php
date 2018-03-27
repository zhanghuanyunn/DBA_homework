<?php

namespace App\Model\Wpy;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $connection = 'mysql_mobile';
    protected $table = 'app_versions_new';
    protected $fillable = [];


}
