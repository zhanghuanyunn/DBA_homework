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

class ReadingController extends Controller
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
        return view('reading.summary');
    }

    public function banner() {
//        $banners = Banner::paginate(8);
//        $banner = $banners->each(function ($item, $key) {
//            $item->img_url = Storage::url($item->img_url);
//        });
          $banners = Banner::get();
        return view('reading.banner')->with(['banners'=> $banners,'base_url'=>url('/')]);
    }

    public function uploadBanner(Request $request)
    {
        $title = $request->input('title');
        $url = $request->input('url');
        $path = $request->file('banner')->store('/public/reading/banners');
        Banner::create(['title' => $title, 'url' => $url,'img_url'=> $path]);
        /*return Storage::url($path);*/
        return redirect()->back();
    }

    public function starreview()
    {
        $starreviews = Starreview::orderBy('updated_at','desc')->paginate(8);
        return view('reading.starreview')->with(['starreviews'=>$starreviews]);
    }

    public function review(Request $request)
    {
        $user_id = $request->input("inputUserId");
        $book_id = $request->input("inputBookID");
        $start_date = $request->input("inputStartDate");
        $end_date = $request->input("inputEndDate");
        $_token = $request->input("_token");
        $reviews = Review::whereBetween("updated_at",[$start_date,$end_date])->orderBy('updated_at','desc')->paginate(8);
        if (!$user_id || !$book_id || !$start_date || !$end_date){
            $reviews = Review::orderBy('updated_at','desc')->paginate(8);
        }
        //dump($reviews);
        return view('reading.review')->with([
            "user_id" => $user_id,
            "book_id" => $book_id,
            "start_date" => $start_date,
            "end_date" => $end_date,
            "reviews" => $reviews,
            "_token" => $_token,
        ]);
    }
    public function reviewcommand(Request $request)
    {
        $id = $request->input('id');
        $command_type =  $request->input('command_type');
        if ($command_type == 'reset'){
            $data = 0;
        }
        if ($command_type == 'fold'){
            $data = 1;
        }
        if ($command_type == 'delete'){
            $data = 2;
        }

        $review = Review::where('id','=',$id)->first();

        if (!$review){
            //return back();
        }else{
            Review::where('id','=',$id)->update([
                'status' => $data,
            ]);
        }
        return redirect('/reading/review');
    }
}
