@extends('layouts.app')
@section('content')
@section('title','Aprove Result')
<div class="page-title">
    <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
        <ul class="breadcrumb  admin-header">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">@yield('title')</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-table" aria-hidden="true"></i> <b>@yield('title')</b></h4>
                <a href="{{ route('results.add-search-form') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Go To Create Result</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th width="100px;">S/L</th>
                        <th>Exam</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Subject</th>
                        <th>Entry By</th>
                        <th>Entry Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>Final</td>
                            <td>One</td>
                            <td>A</td>
                            <td>English</td>
                            <td>Abdur Rahim</td>
                            <td>01-01-2019</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye" title="view"></i> Show</a>  
                                <a href="#" class="btn btn-success btn-xs" title="aprove"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection