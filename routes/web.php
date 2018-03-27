<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//Route::get('/test',function (){
//    return view('test.test');
//});
Route::get('/testOAuth',function (){
    $query = http_build_query([
        'client_id' => 3,
        'redirect_uri' => 'http://homestead.app/callback',
        'response_type' => 'code',
        'scope' => ''
    ]);
    return redirect('http://homestead.app/oauth/authorize?' . $query);
});
Route::get('/personalOAuth',function (){
    $user = Auth::user();
    $token = $user->createToken('Token Name')->accessToken;
    session(['token'=>$token]);
    return session('token');
});

Route::get('/callback', function (Request $request) {
    $http = new GuzzleHttp\Client;
    $response = $http->post('http://homestead.app/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '3',
            'client_secret' => 't09yFC45YoLmo9BHNuoaT3PWE4QTo32wgPnggbVV',
            'redirect_uri' => 'http://homestead.app/callback',
            'code' => $request->code,
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});

Route::group(['middleware'=>'authority'],function (){
    Route::group(['prefix' => 'wpy'], function(){
        Route::get('/version','WpyController@version');
        Route::get('/download_data','WpyController@download_data');
        Route::get('/download_log','WpyController@download_log');
        Route::get('/install_info','WpyController@install_info');
    });

    Route::group(['prefix' => 'reading'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','ReadingController@summary');
        Route::get('/banner','ReadingController@banner');
        Route::post('/uploadbanner','ReadingController@uploadBanner');
        Route::get('/starreview','ReadingController@starreview');
        Route::get('/review','ReadingController@review');
        Route::get('/review/command','ReadingController@reviewcommand');
    });


    Route::group(['prefix' => 'lostandfound'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','LostAndFoundController@summary');
    });

    Route::group(['prefix' => 'gpa'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','GpaController@summary');
    });

    Route::group(['prefix' => 'studyroom'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','StudyRoomController@summary');
    });

    Route::group(['prefix' => 'classschedule'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','ClassScheduleController@summary');
    });

    Route::group(['prefix' => 'news'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','NewsController@summary');
    });

    Route::group(['prefix' => 'bicycle'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','BicycleController@summary');
    });


    Route::group(['prefix' => 'fellow'/*,'namespace' => 'Reading'*/], function(){
        Route::get('/summary','FellowController@summary');
    });
});

Route::get('test', 'TestController@test');