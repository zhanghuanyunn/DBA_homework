<?php
/**
 * Created by PhpStorm.
 * User: Tako
 * Date: 2017/3/28
 * Time: 16:27
 */

namespace App\Http\Controllers\Api;

use App\Model\OpenApi\RequestRecord;
use App\Model\OpenApi\RequestRecordDaily;
use App\Model\Wpy\DownloadLog;
use Illuminate\Routing\Controller;
use App\Model\Wpy\InstallInfo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;
use App\Model\Wpy\Version;
use App\Model\Wpy\DownloadData;
use Carbon\Carbon;
use App\Http\Service\ApiCountService;

class WpyController extends Controller
{
    private $apiCountService;

    /**
     * WpyController constructor.
     * @param $apiCountService
     */
    public function __construct(ApiCountService $apiCountService)
    {
        $this->apiCountService = $apiCountService;
    }


    public function wpy_download_counts()
    {
        $download_log_count = 76439;
        $download_data_count = 63521;
        $install_info_count = 49827;
        return json_encode([
            'download_log_count' =>$download_log_count,
            'download_data_count' =>$download_data_count,
            'install_info_count' =>$install_info_count,
        ]);
    }
    public function request_records_count(Request $request)
    {
        $name = $request->input('name');
        /*return RequestRecord::year(Carbon::today()->year)->create([
            'appid' => 1,
            'uid' => 0,
            'route_name' => 'auth.shooter.shoot',
            'path' => 'api/v1/auth/shooter/shoot',
            'qs' => 'token=eyJpdiI6ImpMQTFHVmZtMVFVektxMGcyUTZDRmc9PSIsInZhbHVlIjoiNng3d3Qyck15RWNVZFwvXC9ibTBhb1l2eWROTE9cL0ZJZGxKZjJcL2I1ZGN1T0xlREh5ZThzNU1xSHVNYzNUOXAwMnQ3clhFSU9FWmdjQkk2NGxxdm5tZE9oUW1sd2VWMzNBaHVjbHhFTmliQURZPSIsIm1hYyI6IjYwZWRkYWI4NDczOWJkMGVhY2QwMWYyYTI0OGFhMTcxODBiMTQyZWYxZWE0YjhlZDVhZjFhZTgzNzYyMjIxMjAifQ%3D%3D&captcha=mp7wn&tjupasswd=huangyong.1207&tjuuname=3012209040',
            'ua' => null,
            'ip' => 2147483647,
            'elapsed_time' => '2015-09-18 01:21:56',

        ]);*/
        //$request_records_count = RequestRecord::year()->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])->count();
        $res = RequestRecordDaily::where('route_name','like','%'.$name.'%')->whereBetween('created_at', [Carbon::today()->addDay(-1), Carbon::tomorrow()])->get();
        return json_encode([
            'request_records_pv_count' =>$res->sum('pv'),
            'request_records_uv_count' =>$res->sum('uv')
        ]);
    }
    public function weekdata()
    {
        $weekdata = RequestRecord::year()->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])->get();
    }

    public function request_records(Request $request)
    {
        $name = $request->input('name');
        $data['weekdata'] = $this->apiCountService->weekData(5,$name);
        $data['monthdata'] = $this->apiCountService->monthData(5,$name);
        $data['yeardata'] = $this->apiCountService->yearData($name);
        //dump($data);
        return json_encode($data);
    }
    public function dailyReadingCount()
    {
        $this->apiCountService->dailyReadingCount();
    }
}