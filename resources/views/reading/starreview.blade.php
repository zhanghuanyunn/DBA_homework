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
                Reading Starreview
            </div>
            <div class="page-sub-header">
                Welcome Back, {{ Auth::user()->name }} , <i class="fa fa-map-marker text-danger"></i> Tianjin
            </div>
        </div>
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
            <th>UserName</th>
            <th>BookID</th>
            <th>BookName</th>
            <th>Date</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach($starreviews as $key => $starreview)
        <tr>
            <td># {{$key+1}}</td>
            <td>{{$starreview->user_id}}</td>
            <td>{{$starreview->user->twtuname}}</td>
            <td>{{$starreview->book_id}}</td>
            <td>{{$starreview->book->title}}</td>
            <td>{{$starreview->updated_at}}</td>
            <td><span class="label label-success" >{{$starreview->content}}</span></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{$starreviews->links()}}










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