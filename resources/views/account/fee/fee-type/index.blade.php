@extends('layouts.app')
@section('content')
@section('title','Fee Types')
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
                <a href="{{ route('accounts.fees.fee-types.create') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Fee Type</span></a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="fee-type">
                            <div class="title text-center">
                                <h4>Class:One</h4>
                            </div>
                            <div class="content">
                                <table class="table table-striped table-bordered" style="color: black">
                                    <thead>
                                    <tr>
                                        <th width="100px;">S/L</th>
                                        <th>Fee Type</th>
                                        <th>Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td>1</td>
                                            <td>Tution Fees</td>
                                            <td>3000</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil" title="Edit"></i> Edit</a>  
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>2</td>
                                            <td>Late Fees</td>
                                            <td>100</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil" title="Edit"></i> Edit</a>  
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>3</td>
                                            <td>Admission Fees</td>
                                            <td>10,000</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil" title="Edit"></i> Edit</a>  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-6">
                        <div class="fee-type">
                            <div class="title text-center">
                                <h4>Class:Two</h4>
                            </div>
                            <div class="content">
                                <table class="table table-striped table-bordered" style="color: black">
                                    <thead>
                                    <tr>
                                        <th width="100px;">S/L</th>
                                        <th>Fee Type</th>
                                        <th>Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td>1</td>
                                            <td>Tution Fees</td>
                                            <td>4000</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil" title="Edit"></i> Edit</a>  
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>2</td>
                                            <td>Admission Fees</td>
                                            <td>15,000</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil" title="Edit"></i> Edit</a>  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-6">
                        <div class="fee-type">
                            <div class="title text-center">
                                <h4>Class:Three</h4>
                            </div>
                            <div class="content">
                                <table class="table table-striped table-bordered" style="color: black">
                                    <thead>
                                    <tr>
                                        <th width="100px;">S/L</th>
                                        <th>Fee Type</th>
                                        <th>Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td>1</td>
                                            <td>Tution Fees</td>
                                            <td>6000</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil" title="Edit"></i> Edit</a>  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection