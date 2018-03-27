<?php
/**
 * Created by PhpStorm.
 * User: Tako
 * Date: 2017/3/28
 * Time: 16:27
 */

namespace App\Http\Controllers;

use App\Model\Wpy\DownloadLog;
use App\Model\Wpy\InstallInfo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;
use App\Model\Wpy\Version;
use App\Model\Wpy\DownloadData;

class WpyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function version()
    {
        $versions = Version::orderBy('update_time','desc')->paginate(12);
        return view('wpy.version')->with([
            'versions' => $versions
        ]);
    }

    public function download_data()
    {
        $download_datas = DownloadData::paginate(12);
        return view('wpy.download_data')->with([
            'datas' => $download_datas
        ]);
    }

    public function download_log()
    {
        $download_logs = DownloadLog::orderBy('time','desc')->paginate(12);
        return view('wpy.download_log')->with([
            'datas' => $download_logs
        ]);
    }
    public function install_info()
    {
        $install_infos = InstallInfo::orderBy('time','desc')->paginate(12);
        return view('wpy.install_info')->with([
            'datas' => $install_infos
        ]);
    }
}