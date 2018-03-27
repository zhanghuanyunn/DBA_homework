@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                微北洋版本
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
                    <th>版本号version_code</th>
                    <th>版本名称version_name</th>
                    <th>版本信息release_note</th>
                    <th>下载地址update_url</th>
                    <th>更新时间update_time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($versions as $key => $version)
                    <tr>
                        <td>#{{$key+1}}</td>
                        <td>{{$version->id}}</td>
                        <td>{{$version->appname_os}}</td>
                        <td>{{$version->version_code}}</td>
                        <td>{{$version->version_name}}</td>
                        <td>{{$version->release_note}}</td>
                        <td>{{$version->update_url}}</td>
                        <td>{{$version->update_time}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    {{$versions->appends([])->links()}}
    </div>


@endsection

@section('scripts')

@endsection
