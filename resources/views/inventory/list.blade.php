
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')



    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            查看库存
                        </div>
                        <div class="page-sub-header">
                            Welcome Back, <i class="fa fa-map-marker text-danger"></i> Tianjin
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills">
                    <li class="active"><a href="#clothes" data-toggle="tab" aria-expanded="true">衣服</a>
                    </li>
                    <li class=""><a href="#food" data-toggle="tab" aria-expanded="false">食品</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="clothes">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-clothes">
                                <thead>
                                <tr>
                                    <th>产品编号</th>
                                    <th>产品名</th>
                                    <th>品牌</th>
                                    <th>颜色</th>
                                    <th>尺寸</th>
                                    <th>适合人群</th>
                                    <th>单价</th>
                                    <th>库存</th>
                                    <th>进货日期</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clothes as $key=>$value)
                                    <tr class="gradeC">
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->brand}}</td>
                                        <td>{{$value->color}}</td>
                                        <td>{{$value->size}}</td>
                                        <td>{{$value->suited_crowd}}</td>
                                        <td>{{$value->price}}</td>
                                    @if($value->amount > 10)
                                            <td>{{$value->amount}}件</td>
                                        @elseif($value->amount<=10&&$value->amount>5)
                                            <td style="color: #da9247">{{$value->amount}}件</td>
                                        @else
                                            <td style="color: red">{{$value->amount}}件</td>
                                        @endif
                                        <td>{{$value->updated_at}}</td>
                                        <td>
                                            <div style="width:22%;padding:0;margin:0;float:left;box-sizing:border-box;">
                                                <form action="{{url('/admin/purchase/in')}}" method="get">
                                                    <input type="text" name="cid" value="{{$value->id}}" hidden>
                                                    <button type="submit" class="btn btn-primary btn-xs">
                                                        采购
                                                    </button>
                                                </form>
                                            </div>
                                            <div style="width:22%;padding:0;margin:0;float:left;box-sizing:border-box;">
                                                <form action="{{url('/admin/inventory/soldout')}}" method="get">
                                                    <input type="text" name="cid" value="{{$value->id}}" hidden>
                                                    <button type="submit" class="btn btn-warning btn-xs">
                                                        下架
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food">
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-food">
                                            <thead>
                                            <tr>
                                                <th>产品编号</th>
                                                <th>产品名</th>
                                                <th>品牌</th>
                                                <th>原产地</th>
                                                <th>单价</th>
                                                <th>库存</th>
                                                <th>保质期截止日期</th>
                                                <th>进货日期</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($food as $key=>$value)
                                                <tr class="gradeC">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->brand}}</td>
                                                    <td>{{$value->origin}}</td>
                                                    <td>{{$value->price}}￥</td>
                                                    @if($value->amount > 10)
                                                    <td>{{$value->amount}}件</td>
                                                    @elseif($value->amount<=10&&$value->amount>5)
                                                    <td style="color: #da9247">{{$value->amount}}件</td>
                                                    @else
                                                    <td style="color: red">{{$value->amount}}件</td>
                                                    @endif
                                                    <td>{{$value->shelf_time}}</td>
                                                    <td>{{$value->updated_at}}</td>
                                                    <td>
                                                        <div style="width:21%;padding:0;margin:0;float:left;box-sizing:border-box;">
                                                        <form action="{{url('/admin/purchase/in')}}" method="get">
                                                            <input type="text" name="fid" value="{{$value->id}}" hidden>
                                                            <button type="submit" class="btn btn-primary btn-xs">
                                                                采购
                                                            </button>
                                                        </form>
                                                        </div>
                                                        <div style="width:21%;padding:0;margin:0;float:left;box-sizing:border-box;">
                                                        <form action="{{url('/admin/inventory/soldout')}}" method="get">
                                                            <input type="text" name="fid" value="{{$value->id}}" hidden>
                                                            <button type="submit" class="btn btn-warning btn-xs">
                                                                下架
                                                            </button>
                                                        </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!-- /.table-responsive -->
                                    </div>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
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
    <script  type="text/javascript" charset="utf8"  src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-food').DataTable({
                "info":false,
                destroy:true,
                searching:false,
                lengthChange: false,
            });
            $('#dataTables-clothes').DataTable({
                "info":false,
                destroy:true,
                searching:false,
                lengthChange: false
            });
        });
    </script>
    @endsection
