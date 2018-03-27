@extends('layouts.app')

@section('styles')
    <!-- Morris -->
    <link href="css/morris.css" rel="stylesheet"/>

    <!-- Datepicker -->
    <link href="css/datepicker.css" rel="stylesheet"/>

    <!-- Animate -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Amcharts -->
    <link rel="stylesheet" href="/amcharts/export.css" type="text/css" media="all" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                WPY 后台管理
            </div>
            <div class="page-sub-header">
                Welcome Back, {{ Auth::user()->name }} , <i class="fa fa-map-marker text-danger"></i> Tianjin
            </div>
            @if($error=='1')
                无权访问{{$status}}模块
            @endif

        </div>
        <div class="col-sm-6 text-right text-left-sm p-top-sm">
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
        </div>
    </div>


    <div class="row m-top-md">
        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-dark m-bottom-md">
                <div class="statistic-title">
                    总下载量
                </div>

                <div id="download_log_count" class="statistic-value">
                    (((O)))
                </div>

                <div class="m-top-md">wpy total downloads</div>

                <div class="statistic-icon-background">
                    <i class="ion-eye"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-grey m-bottom-md">
                <div class="statistic-title">
                    版本数
                </div>

                <div id="download_data_count" class="statistic-value">
                    (((O)))
                </div>

                <div class="m-top-md">wpy download data</div>

                <div class="statistic-icon-background">
                    <i class="ion-ios7-cart-outline"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-dark-grey m-bottom-md">
                <div class="statistic-title">
                    总装机量
                </div>

                <div id="install_info_count" class="statistic-value">
                    (((O)))
                </div>

                <div class="m-top-md">wpy install info</div>

                <div class="statistic-icon-background">
                    <i class="ion-person-add"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-dark m-bottom-md">
                <div class="statistic-title">
                    今日访问
                </div>

                <div id="request_records_pv_count" class="statistic-value">
                    (((O)))
                </div>

                <div class="m-top-md">wpy today visit</div>

                <div class="statistic-icon-background">
                    <i class="ion-stats-bars"></i>
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
                                    <small class="m-bottom-sm block">浏览量uv</small>
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
            getAccessToken();
            //getUserData();
            getChartsData('/api/request_records','');
            //getData('api/user').then(response => {console.log(response.data)});
            getData('api/wpy_download_counts').then(response=>{
                $("#download_log_count").text(response.data.download_log_count);
                $("#download_data_count").text(response.data.download_data_count);
                $("#install_info_count").text(response.data.install_info_count);
            });
            postData('api/request_records_count','').then(response => {
                $("#request_records_pv_count").text(response.data.request_records_pv_count);
            });
        });
    </script>
@endsection
