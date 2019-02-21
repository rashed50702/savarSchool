@extends('layouts.app')
@section('content')
@section('title','Testimonials')
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
                <a href="{{ route('testimonials.create') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Testimonial</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th width="50px;">S/L</th>
                        <th>Name</th>
                        <th>Class/Exam Name</th>
                        <th>Roll No</th>
                        <th>Session</th>
                        <th>Passing Year</th>
                        <th class="text-center">Download</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td>1</td>
                        <td>Aminul Islam</td>
                        <td>JSC</td>
                        <td>123456789</td>
                        <td>2017-2018</td>
                        <td>2019</td>
                        <td class="text-center">
                            <div class="ntview">
                                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i>Download</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye" title="details view"></i></a>
                            <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit" title="edit"></i></a>
                            <a href="#" class="delete btn btn-danger btn-xs deleteBtn btnColor"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection