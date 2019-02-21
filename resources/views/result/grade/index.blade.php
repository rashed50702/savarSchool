@extends('layouts.app')
@section('content')
@section('title','Grades')
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
                <a href="{{ route('results.grades.create') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Grade</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th width="100px;">S/L</th>
                        <th>Grade</th>
                        <th>Point</th>
                        <th>High%</th>
                        <th>Low%</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>A+</td>
                            <td>5</td>
                            <td>100</td>
                            <td>80</td>
                            <td>Excillent</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit" title="edit"></i></a>  
                                <a href="#" class="delete btn btn-danger btn-xs deleteBtn btnColor" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>A</td>
                            <td>4</td>
                            <td>79</td>
                            <td>70</td>
                            <td>Very Good</td>
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