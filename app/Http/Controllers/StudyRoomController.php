<?php

namespace App\Http\Controllers;

use App\Model\Reading\Banner;
use App\Model\Reading\Review;
use App\Model\Reading\Starreview;
use App\Model\Reading\Summary;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class StudyRoomController extends Controller
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

    public function summary(){
        return view('studyroom.summary');
    }
}
