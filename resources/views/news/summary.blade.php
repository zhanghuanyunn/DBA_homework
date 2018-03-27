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
                News
            </div>
            <div class="page-sub-header">
                Welcome Back, {{ Auth::user()->name }} , <i class="fa fa-map-marker text-danger"></i> Tianjin
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row m-top-md m-top-lg">

            <div class="col-lg-6 col-sm-6">
                <div class="statistic-box bg-grey m-bottom-md">
                    <div class="statistic-title">
                        今日访问
                    </div>

                    <div id="request_records_pv_count" class="statistic-value">
                        (((O)))
                    </div>

                    <div class="m-top-md">News Today Visit</div>

                    <div class="statistic-icon-background">
                        <i class="ion-stats-bars"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="statistic-box bg-dark m-bottom-md">
                    <div class="statistic-title">
                        今日用户
                    </div>

                    <div id="request_records_uv_count" class="statistic-value">
                        0
                    </div>

                    <div class="m-top-md">News Today User</div>

                    <div class="statistic-icon-background">
                        <i class="ion-stats-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="smart-widget widget-dark-blue">
                    <div class="smart-widget-header">
                        5 周内访问量
                        <span class="smart-widget-option">
										<span class="refresh-icon-animated">
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
                    <div class="smart-widget-inner">
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
                        <div class="smart-widget-body no-padding">
                            <div class="padding-md">
                                <div id="weekVisitChart" class="morris-chart" style="height:250px;"></div>
                            </div>

                            <div class="bg-grey">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <h3 id="weekUvCounts" class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">浏览量pv</small>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h3 id="weekPvCounts" class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">浏览量pv</small>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h3 class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">command</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ./smart-widget-inner -->
                </div><!-- ./smart-widget -->
            </div><!-- ./col -->
            <div class="col-lg-6">
                <div class="smart-widget widget-dark-blue">
                    <div class="smart-widget-header">
                        3 月内访问量
                        <span class="smart-widget-option">
										<span class="refresh-icon-animated">
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
                    <div class="smart-widget-inner">
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
                        <div class="smart-widget-body no-padding">
                            <div class="padding-md">
                                <div id="placeholder" style="height:250px;"></div>
                            </div>

                            <div class="bg-grey">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <h3 id="monthUvCounts" class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">浏览量uv</small>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h3 id="monthPvCounts" class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">浏览量pv</small>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h3 class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">command</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ./smart-widget-inner -->
                </div><!-- ./smart-widget -->
            </div><!-- ./col -->
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="smart-widget widget-dark-blue">
                    <div class="smart-widget-header">
                        一年内访问量
                        <span class="smart-widget-option">
										<span class="refresh-icon-animated">
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
                    <div class="smart-widget-inner">
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
                        <div class="smart-widget-body no-padding">
                            <div class="padding-md">
                                <div id="chartdiv" style="width: 100%; height: 500px;"></div>
                            </div>

                            <div class="bg-grey">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <h3 id="yearUvCounts" class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">浏览量uv</small>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h3 id="yearPvCounts" class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">浏览量pv</small>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h3 class="m-top-sm">(((O)))</h3>
                                        <small class="m-bottom-sm block">command</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ./smart-widget-inner -->
                </div><!-- ./smart-widget -->
            </div><!-- ./col -->
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

        {{--    <!-- Simplify -->
            <script src="/js/simplify/simplify_dashboard.js"></script>--}}


        <!-- Amcharts -->
            <script src="/amcharts/amcharts.js"></script>
            <script src="/amcharts/serial.js"></script>
            <script src="/amcharts/export.min.js"></script>
            <script src="/amcharts/light.js"></script>
            <!-- Chart code -->
            <script src="/js/public.js"></script>

            <script>
                $(document).ready(function(){
                    //getAccessToken();
                    getUserData();
                    getChartsData('/api/request_records','news');
                    //getData('/api/user').then(response => {console.log(response.data)});
                    postData('/api/request_records_count','news').then(response => {
                        $("#request_records_pv_count").text(response.data.request_records_pv_count);
                        $("#request_records_uv_count").text(response.data.request_records_uv_count);
                    });
                });
            </script>
@endsection
