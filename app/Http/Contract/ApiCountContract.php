<?php

namespace App\Http\Contract;
/**
 * Created by IntelliJ IDEA.
 * User: wujindong
 * Date: 2017/3/31
 * Time: 下午3:43
 */
interface ApiCountContract
{
    //统计uv以ip记录
    public function getData($name,$from,$to);
    //统计pv以访问量计算
    public function dailyCount();

    public function dailyReadingCount();
}