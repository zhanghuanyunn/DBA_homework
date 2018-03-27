<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/dailyReadingCount','Api\WpyController@dailyReadingCount');


Route::get('/wpy_download_counts','Api\WpyController@wpy_download_counts');
Route::get('/request_records_count','Api\WpyController@request_records_count');
Route::post('/request_records_count','Api\WpyController@request_records_count');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/request_records",'Api\WpyController@request_records');
Route::post("/request_records",'Api\WpyController@request_records');
Route::get('/home', function () {
    $weekdata = [
        [ 'time' => '1', 'uv'=> 100, 'pv'=> 90 ],
        [ 'time' => '2', 'uv'=> 90, 'pv'=> 45 ],
        [ 'time' => '3', 'uv'=> 78, 'pv'=> 68 ],
        [ 'time' => '4', 'uv'=> 95, 'pv'=> 68 ],
        [ 'time' => '5', 'uv'=> 68, 'pv'=> 76 ],
    ];

    $monthdata['pv'] = [[0,700],[1,1200],[2,1100],[3,900],[4,500]];
    $monthdata['uv'] = [[0,678],[1,146],[2,688],[3,566],[4,322]];
    $yeardata = [
        [
            "date" => "2012-01-01",
            "uv"=> 227,
            "pv"=> 408
        ],
        [
            "date" => "2012-02-01",
            "uv"=> 415,
            "pv"=> 408
        ],
        [
            "date" => "2012-03-01",
            "uv"=> 321,
            "pv"=> 408
        ],
        [
            "date" => "2012-04-01",
            "uv"=> 652,
            "pv"=> 408
        ],
        [
            "date" => "2012-05-01",
            "uv"=> 168,
            "pv"=> 408
        ],

    ];

    $data['weekdata'] = $weekdata;
    $data['monthdata'] = $monthdata;
    $data['yeardata'] = $yeardata;
    return $data;
});