@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                微北洋版本下载信息
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
                    <th>程序名appname_os</th>
                    <th>版本version</th>
                    <th>最后时间last_time</th>
                    <th>下载数data</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $key => $data)
                    <tr>
                        <td>#{{$key+1}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->appname_os}}</td>
                        <td>{{$data->version}}</td>
                        <td>{{$data->last_time}}</td>
                        <td>{{$data->data}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    {{$datas->appends([])->links()}}
    </div>


@endsection

@section('scripts')

@endsection
