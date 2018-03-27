@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                微北洋下载日志
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
                    <th>时间time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $key => $data)
                    <tr>
                        <td>#{{$key+1}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->appname_os}}</td>
                        <td>{{$data->version}}</td>
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
