<?php
/**
 * Created by IntelliJ IDEA.
 * User: wujindong
 * Date: 2017/4/6
 * Time: 上午10:56
 */

namespace App\Http\Controllers;


use App\Http\Service\ApiCountService;

class TestController
{
    public function test(){
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        ini_set('memory_limit', '1G');
        $a = new ApiCountService();
        $a->dailyCount();
////        dd($a->getUv('classroom.getClassroom','2017-04-06 00:00:00','2017-04-07 00:00:00'));
//        dd($a->yearUv('fellow.getProvinceName',2));
    }
}