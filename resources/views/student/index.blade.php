@extends('layouts.app')
@section('content')
@section('title','Students List')
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
                <a href="{{ route('registration.create') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Register New Student</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Full Name</th>
                        <th>Student Photo</th>
                        <th>QR Code</th>
                        <th>Admission No</th>
                        <th>Student Class</th>
                        <th>Academic Year</th>
                        <th>Phone Number</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ashikuzzaman</td>
                            <td>
                                <img width="80px" class="img-responsive" src="{{ asset('assets/img/img.jpg') }}" alt="student-photo">
                            </td>
                            <td>
                                <img width="80px" class="img-responsive" src="{{ asset('assets/img/qr.png') }}" alt="qr-code">
                            </td>
                            <td>50005</td>
                            <td>Six</td>
                            <td>2019</td>
                            <td>123456789</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit" title="edit"></i></a>  
                                <a href="#" class="delete btn btn-danger btn-xs deleteBtn btnColor" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection