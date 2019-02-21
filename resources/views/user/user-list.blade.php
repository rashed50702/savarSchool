@extends('layouts.app')
@section('content')
@section('title','Users List')
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
                <a href="{{ route('users.create') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New User</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Full Name</th>
                        <th class="text-center">Photo</th>
                        <th>Title</th>
                        <th>Email/Username</th>
                        <th>Institute</th>h>
                        <th>Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>Hamidur Rahman</td>
                            <td class="text-center"> <img src="http://unicdhaka.org/files/2014/01/NW-PP-Size.jpg" alt="Photo" class="img-circle" width="60px" height="60px;"> </td>
                            <td>ENO</td>
                            <td>hamid@gmail.com</td>
                            <td>None</td>
                            <td>Guest</td>
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