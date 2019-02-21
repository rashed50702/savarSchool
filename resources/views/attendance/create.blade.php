@extends('layouts.app')
@section('content')
@section('title','Attendances')
<div class="page-title">
    <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
        <ul class="breadcrumb  admin-header">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">@yield('title')</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-2">
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" name="date" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="time">Time</label>
            <input type="text" name="time" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group" style="margin-top: 23px;">
            <button class="btn btn-success"> <i class="fa fa-clock-o"></i> Start </button>
            <button class="btn btn-success" disabled=""> <i class="fa fa-clock-o"></i> End </button>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-table" aria-hidden="true"></i> <b>@yield('title')</b></h4>
                <a href="#"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Get Attendance History</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th width="50px;">S/L</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td>1</td>
                        <td>15-12-2018</td>
                        <td>09:00AM</td>
                        <td>05:00PM</td>
                        <td class="text-center">
                            <div class="ntflow">
                                <a href="#" class="btn btn-primary btn-sm">Present</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection