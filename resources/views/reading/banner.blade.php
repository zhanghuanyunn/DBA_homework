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
                Reading Summary
            </div>
            <div class="page-sub-header">
                Welcome Back, {{ Auth::user()->name }} , <i class="fa fa-map-marker text-danger"></i> Tianjin
            </div>
            <div class="">
                <a href="#formInModal" class="btn btn-primary" data-toggle="modal">Upload Banner</a>
            </div><!-- /.col -->
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


    <div class="gallery-filter m-top-md">
        <ul class="clearfix">
            <li class="active"><a href="#">All</a></li>
            {{--<li><a href="#">Albums</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="#">Trips</a></li>
            <li><a href="#">Business</a></li>--}}
        </ul>
    </div>

    <div class="gallery-list js-masonry m-top-md">
        @foreach($banners as $banner)
        <div class="gallery-item">
            <div class="gallery-wrapper">
                {{--<a class="gallery-remove"><i class="fa fa-times"></i></a>--}}
                <img src="{{$base_url.$banner->img_url}}" alt="">
                <div class="gallery-title">
                    {{$banner->title}}
                </div>
                <div class="gallery-overlay">
                    <a href="{{$base_url.$banner->img_url}}" class="gallery-action enlarged-photo"><i class="fa fa-search-plus fa-lg"></i></a>
                    <a href="#" class="gallery-action animation-dalay"><i class="fa fa-link fa-lg"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div><!-- ./gallery-list -->


    {{--{{ $banners->links() }}--}}



    <!-- Small modal -->
    <div class="modal fade" id="formInModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{ url('/reading/uploadbanner') }}" method="POST" class="dropzone" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">TITLE</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="TITLE">
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" class="form-control" id="url" name="url" placeholder="URL">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="banner" name="banner">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary">
                                Upload Banner
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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