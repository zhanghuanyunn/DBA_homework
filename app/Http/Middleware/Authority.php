<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authority
{
    public function handle($request,Closure $next)
    {

        $url = $request->path();
        $status = substr($url,0,strpos($url, '/'));
        if(Auth::user()['status']=="all"||Auth::user()['status']==$status) {
            return $next($request);
        }
        else
        {
            $request->session()->flash('error','1');
            $request->session()->flash('status',$status);
            return redirect('/');
        }

    }
}