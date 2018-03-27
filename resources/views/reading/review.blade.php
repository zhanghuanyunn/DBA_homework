@extends('layouts.app')

@section('styles')
    <!-- Morris -->
    <link href="/css/morris.css" rel="stylesheet"/>

    <!-- Datepicker -->
    <link href="/css/datepicker.css" rel="stylesheet"/>

    <!-- Animate -->
    <link href="/css/animate.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Amcharts -->
    <link rel="stylesheet" href="/amcharts/export.css" type="text/css" media="all" />
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                Reading Review
            </div>
            <div class="page-sub-header">
                Welcome Back,hhhh , <i class="fa fa-map-marker text-danger"></i> Tianjin
            </div>
        </div>

        <div class="col-sm-6">
            <div class="smart-widget widget-purple smart-widget-collapsed">
                <div class="smart-widget-header">
                    <i  class="ion-search"></i> Search
                    <span class="smart-widget-option">
								<span class="refresh-icon-animated" style="display: none;">
									<i class="fa fa-circle-o-notch fa-spin"></i>
								</span>
	                            <a href="#" class="widget-toggle-hidden-option">
	                                <i class="fa fa-cog"></i>
	                            </a>
	                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
	                                <i class="fa fa-chevron-up"></i>
	                            </a>
	                            <a href="#" class="widget-refresh-option">
	                                <i class="fa fa-refresh"></i>
	                            </a>
	                            <a href="#" class="widget-remove-option">
	                                <i class="fa fa-times"></i>
	                            </a>
	                        </span>
                </div>
                <div class="smart-widget-inner" style="display: none;">
                    <div class="smart-widget-hidden-section">
                        <ul class="widget-color-list clearfix">
                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                            <li style="background-color:#fff;" data-color="reset"></li>
                        </ul>
                    </div>
                    <div class="smart-widget-body">
                        <form class="form-horizontal" role="form" action="{{ url('/reading/review') }}" method="GET" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputUserid" class="col-sm-2 control-label">USERID</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputUserId" name="inputUserId"placeholder="USERID">
                                </div><!-- /.col -->
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label for="inputBookID" class="col-lg-2 control-label">BOOKID</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputBookID" name="inputBookID" placeholder="BOOKID">
                                </div><!-- /.col -->
                            </div><!-- /form-group -->


                            <div class="form-group">
                                <label for="inputStartDate" class="col-lg-2 control-label">STARTDATE</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="inputStartDate" name="inputStartDate" placeholder="STARTDATE">
                                </div><!-- /.col -->
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label for="inputEndDate" class="col-lg-2 control-label">ENDDATE</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="inputEndDate" name="inputEndDate" placeholder="ENDDATE">
                                </div><!-- /.col -->
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success btn-sm">Search Now</button>
                                </div><!-- /.col -->
                            </div><!-- /form-group -->
                        </form>
                    </div>
                </div><!-- ./smart-widget-inner -->
            </div>
        </div>
        {{--<div class="col-sm-3">
            <form class="form-horizontal">
                <label for="bookid" class="form-horizontal">userid</label>
                <input type="text" class="button form-control" id="userid" placeholder="userid">
                <input type="text" class="button form-control" id="bookid" placeholder="bookid">
                <input type="date" class="button form-control" id="start_date" placeholder="start_date">
                <input type="date" class="button form-control" id="end_date" placeholder="end_date">
            </form>
        </div>--}}
        {{--<div class="col-sm-6 text-right text-left-sm p-top-sm">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Select Project <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Project1</a></li>
                    <li><a href="#">Project2</a></li>
                    <li><a href="#">Project3</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Setting</a></li>
                </ul>
            </div>

            <a class="btn btn-default"><i class="fa fa-cog"></i></a>
        </div>--}}
    </div>


    <table class="table table-striped" id="dataTable">
        <thead>
        <tr>
            <th>No</th>
            <th>UserID</th>
            {{--<th>UserName</th>--}}
            <th>BookID</th>
            <th>BookName</th>
            <th>Date</th>
            <th>Status</th>
            <th>Command</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $key => $review)
        <tr>
            <td>#{{$key+1}}</td>
            <td>{{$review->user_id}}</td>
            {{--<td>{{$review->user}}</td>--}}
            <td>{{$review->book_id}}</td>
            <td>{{$review->book->title}}</td>
            <td>{{$review->updated_at}}</td>
            <td>
                @if($review->status == 0) <button type="button" class="btn btn-info">正常</button> @endif
                @if($review->status == 1) <button type="button" class="btn btn-primary">折叠</button> @endif
                @if($review->status == 2) <button type="button" class="btn btn-danger">刪除</button> @endif
            </td>
            <td>
                <div class="btn-group marginTB-xs">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        Command <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('reading/review/command?command_type=reset&id='.$review->id) }}">恢復</a></li>
                        <li><a href="{{ url('reading/review/command?command_type=fold&id='.$review->id) }}">折叠</a></li>
                        <li><a href="{{ url('reading/review/command?command_type=delete&id='.$review->id) }}">刪除</a></li>
                        <li class="divider"></li>
                        <li><a href="#">O v O</a></li>
                    </ul>
                </div>
            </td>
            <td><span class="label label-success">{{$review->content}}</span></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{$reviews->appends([
                        '_token' => $_token,
                        'inputUserId' => $user_id,
                        'inputBookID' => $book_id,
                        'inputStartDate' => $start_date,
                        'inputEndDate' => $end_date,
                        ])->links()}}










@endsection

@section('scripts')
    <!-- Flot -->
    <script src='/js/jquery.flot.min.js'></script>

    <!-- Morris -->
    <script src='/js/rapheal.min.js'></script>
    <script src='/js/morris.min.js'></script>

    <!-- Datepicker -->
    <script src='/js/uncompressed/datepicker.js'></script>

    <!-- Sparkline -->
    <script src='/js/sparkline.min.js'></script>

    <!-- Skycons -->
    <script src='/js/uncompressed/skycons.js'></script>

    <!-- Easy Pie Chart -->
    <script src='/js/jquery.easypiechart.min.js'></script>

    <!-- Sortable -->
    <script src='/js/uncompressed/jquery.sortable.js'></script>

    <!-- Owl Carousel -->
    <script src='/js/owl.carousel.min.js'></script>



    <!-- Amcharts -->
    <script src="/amcharts/amcharts.js"></script>
    <script src="/amcharts/serial.js"></script>
    <script src="/amcharts/export.min.js"></script>
    <script src="/amcharts/light.js"></script>