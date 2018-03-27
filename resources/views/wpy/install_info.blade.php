@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                微北洋安装日志
            </div>
            <div class="page-sub-header">
                Welcome Back, {{ Auth::user()->name }} , <i class="fa fa-map-marker text-danger"></i> Tianjin
            </div>
        </div>

        <div>
            <table class="table table-striped" id="dataTable">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>ID</th>
                    <th>版本version</th>
                    <th>系统system</th>
                    <th>厂商brand</th>
                    <th>型号model</th>
                    <th>屏幕大小size</th>
                    <th>imei</th>
                    <th>时间time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $key => $data)
                    <tr>
                        <td>#{{$key+1}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->version}}</td>
                        <td>{{$data->system}}</td>
                        <td>{{$data->brand}}</td>
                        <td>{{$data->model}}</td>
                        <td>{{$data->size}}</td>
                        <td>{{$data->imei}}</td>
                        <td>{{$data->time}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    {{$datas->links()}}
    </div>


@endsection

@section('scripts')

@endsection
