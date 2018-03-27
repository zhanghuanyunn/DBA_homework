<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->get("error"))
        {
            $error=$request->session()->get("error");
            $status=$request->session()->get("status");
        }
        else
        {
            $error='0';
            $status=null;
        }

        return view('home')->with([
            'error'=>$error,
            'status'=>$status
        ]);
    }
    public function indexPost()
    {
        $data = [
            [ 'time' => '2008', 'uv'=> 100, 'pv'=> 90 ],
        ];
        return $data;
    }
}
