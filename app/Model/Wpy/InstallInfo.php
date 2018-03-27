<?php

namespace App\Model\Wpy;

use Illuminate\Database\Eloquent\Model;

class InstallInfo extends Model
{
    protected $connection = 'mysql_mobile';
    protected $table = 'install_info';
    protected $fillable = [];


}
