<?php

namespace App\Model\Wpy;

use Illuminate\Database\Eloquent\Model;

class DownloadLog extends Model
{
    protected $connection = 'mysql_mobile';
    protected $table = 'download_log';
    protected $fillable = [];


}
