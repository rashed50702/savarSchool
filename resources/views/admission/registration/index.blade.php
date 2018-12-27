@extends('layouts.app')
@section('content')
@section('title','Available Subjects')
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
                <a href="{{ route('subjects.create') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Subject</span></a>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered" style="color: black">
                    <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Subject</th>
                        <th>Subject Code</th>
                        <th>Class Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($subjects) > 0 )
                    @foreach($subjects as $key=>$value)
                        <tr class="{{$value->id}}">
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->code }}</td>
                            <td>{{ $value->academicClass->name }}</td>
                            <td class="text-center {{ $value->status == 1 ? 'active' : 'inactive' }}">{{ $value->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit" title="edit"></i></a>  
                                <a href="{!! route('subjects.destroy',$value->id )!!}" class="delete btn btn-danger btn-xs deleteBtn btnColor"  data-token="{!! csrf_token() !!}" data-id="{!! $value->id !!}" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection