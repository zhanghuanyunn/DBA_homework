<?php

namespace App\Http\Service;
use App\Http\Contract\ApiCountContract;
use App\Model\OpenApi\RequestRecord;
use App\Model\OpenApi\RequestRecordDaily;
use App\Model\Reading\Log;
use Carbon\Carbon;


/**
 * Created by IntelliJ IDEA.
 * User: wujindong
 * Date: 2017/3/31
 * Time: 下午3:14
 */
set_time_limit(10000);
class ApiCountService implements ApiCountContract
{
    /**
     * ApiCountService constructor.
     */
    private $ApiCount;
    private $ApiCountDaily;
    private $ReadingLog;

    public function __construct()
    {
        $this->ApiCount = new RequestRecord();
        $this->ApiCountDaily = new RequestRecordDaily();
        $this->ReadingLog = new Log();
    }
    //将每天的访问量存进daily表
    public function dailyCount(){
        //每天00:01分更新，所以today是前一天
            $today = date('Y-m-d', time() - (24 * 60 * 60)*(1) );
            $tomorrow = date('Y-m-d', time() - (24 * 60 * 60)*0 );
            $uv = $this->ApiCount->whereBetween('created_at', [$today, $tomorrow])->get()->toArray();
            foreach ($uv as $k) {
                $is = $this->ApiCountDaily->where([
                    'appid' => $k['appid'],
                    'route_name' => $k['route_name'],
                    'path' => $k['path'],
                ])->whereBetween('created_at', [$today, $tomorrow])->get()->toArray();
                if (empty($is)) {
                    if ($k['uid'] != 0) {
                        $this->ApiCountDaily->create([
                            "appid" => $k['appid'],
                            "route_name" => $k['route_name'],
                            "path" => $k['path'],
                            'created_at' => $today,
                            'pv' => 1,
                            'uv' => 1,
                        ]);
                    } else {
                        $this->ApiCountDaily->create([
                            "appid" => $k['appid'],
                            "route_name" => $k['route_name'],
                            "path" => $k['path'],
                            'created_at' => $today,
                            'pv' => 1,
                        ]);
                    }
                } else {
                    $this->ApiCountDaily->where([
                        "appid" => $k['appid'],
                        "route_name" => $k['route_name'],
                        "path" => $k['path'],
                    ])->whereBetween('created_at', [$today, $tomorrow])->increment('pv', 1);
                    if ($k['uid'] != 0) {
                        $this->ApiCountDaily->where([
                            "appid" => $k['appid'],
                            "route_name" => $k['route_name'],
                            "path" => $k['path'],
                        ])->whereBetween('created_at', [$today, $tomorrow])->increment('uv', 1);
                    }
                }
            }
    }
    public function dailyReadingCount()
    {
        //每天00:01分更新，所以today是前一天
        for ($i = 0; $i < 1; $i++) {
            $today = date('Y-m-d', time() - (24 * 60 * 60) * ($i + 1));
            $tomorrow = date('Y-m-d', time() - (24 * 60 * 60) * $i);
            $uv = $this->ReadingLog->whereBetween('created_at', [$today, $tomorrow])->get()->toArray();
/*

*/

            foreach ($uv as $k) {
                //echo $k['path'];
                $is = $this->ApiCountDaily->where([
                    'appid' => 0,
                    'route_name' => 'reading.'.$k['route_name'],
                    'path' => 'reading/'.$k['path'],
                ])->whereBetween('created_at', [$today, $tomorrow])->get()->toArray();
                if (empty($is)) {
                    $this->ApiCountDaily->create([
                        "appid" => 0,
                        "route_name" => 'reading.' . $k['route_name'],
                        "path" => 'reading/'.$k['path'],
                        'created_at' => $today,
                        'pv' => 1,
                        'uv' => 1,
                    ]);
                } else {
                    $this->ApiCountDaily->where([
                        "appid" => 0,
                        "route_name" => 'reading.'.$k['route_name'],
                        "path" => 'reading/'.$k['path'],
                    ])->whereBetween('created_at', [$today, $tomorrow])->increment('pv', 1);
                    $this->ApiCountDaily->where([
                        "appid" => 0,
                        "route_name" => 'reading.'.$k['route_name'],
                        "path" => 'reading/'.$k['path'],
                    ])->whereBetween('created_at', [$today, $tomorrow])->increment('uv', 1);
                }
            }
        }
    }
    //查找指定模块的访问量
    public function getData($name,$from,$to){
        $res = $this->ApiCountDaily->where('route_name','=',$name)->whereBetween('created_at',[$from,$to])->get();
        return [
            'time' => $from,
            'pv' => $res->sum('pv'),
            'uv' => $res->sum('uv')
        ];
    }
    //返回某年的访问量
    public function getYearData($yearForm,$yearTo,$name){
        $res = $this->ApiCountDaily->where([
            'route_name' => $name
        ])->whereBetween('created_at',[$yearForm,$yearTo])->get();
        return [
            'time' => $yearForm,
            'pv' => $res->sum('pv'),
            'uv' => $res->sum('uv')
        ];
    }
    /*//返回某月的访问量
    public function getMonthUv($name,$monthFrom,$monthTo){
        $monthFrom = date("Y",time()).$monthFrom;
        $monthTo  = date("Y",time()).$monthTo;
        $res = $this->ApiCountDaily->where([
            'route_name' => $name
        ])->whereBetween('created_at',[$monthFrom,$monthTo])->get()->toArray();
        $num = 0;
        foreach ($res as $k){
            $num = $num + $k['num'];
        }
        return [
            'pv' => $num,
            'uv' => 0];
    }
    //返回几个月的访问量的数组*/
    public function monthData($month =0, $name = null){
        $re = [];
        for ($i=1; $i<=$month; $i++){
            $monthFrom = Carbon::today()->subMonth($i)->toDateTimeString();
            $monthTo = Carbon::today()->subMonth($i-1)->toDateTimeString();
            $res = $this->ApiCountDaily->where('route_name','like','%'.$name.'%')->where('route_name','not like','%auth%')->whereBetween('created_at',[$monthFrom,$monthTo])->get();
            $re['pv'][] = [$month-$i,$res->sum('pv')];
            $re['uv'][] = [$month-$i,$res->sum('uv')];
        }
        return $re;
    }

    //返回某年的
    public function yearData($name = null){
        $re = [];
        $dt = Carbon::now();
        for ($i=1;$i<=12;$i++){
            $yearFrom = Carbon::today()->firstOfYear()->addMonth($i-1)->format('Y-m-d');
            $yearTo = Carbon::today()->firstOfYear()->addMonth($i)->format('Y-m-d');
            $res = $this->ApiCountDaily->where('route_name','like','%'.$name.'%')->where('route_name','not like','%auth%')->whereBetween('created_at',[$yearFrom,$yearTo])->get();
            $re[] = [
                'date' => $yearFrom,
                'pv' => $res->sum('pv'),
                'uv' => $res->sum('uv'),
            ];
        }
        return $re;
    }
    //返回一周的
    public function weekData($week = 0,$name = null){
        $re = [];
        for ($i=1;$i<=(int)$week;$i++){
            $weekFrom = Carbon::parse('-'.$i.' week')->toDateTimeString();
            $weekTo = Carbon::parse('-'.($i-1).' week')->toDateTimeString();
            $res = $this->ApiCountDaily->where('route_name','like','%'.$name.'%')->where('route_name','not like','%auth%')->whereBetween('created_at',[$weekFrom,$weekTo])->get();
            $re[] = [
                'time' => $i,
                'pv' => $res->sum('pv'),
                'uv' => $res->sum('uv'),

            ];
        }
        return $re;
    }
}