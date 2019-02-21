@extends('layouts.app')
@section('content')
@section('title','Attendance Report')
    <div class="container page-content" id="pageContent">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">HOME</a></li>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                        <li>
                         <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                            {{strtoupper(Request::segment($i))}}
                         </a>
                        </li>
                    @endfor
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      
                        <h4><i class="fa fa-file-text-o" aria-hidden="true"></i> <b>@yield('title')</b></h4>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-class" action="{!! route('classes.store') !!}" @submit.prevent="addClass()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>Attendance Report</p></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label for="teacherName" class="control-label">Select Teacher Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="teacherName" v-model="teacherName" id="teacherName" class="form-control">
                                                            <option value="">Select teacher name</option>
                                                            <option value="Habibur Rahman">Habibur Rahman</option>
                                                            <option value="Anwarul Islam">Anwarul Islam</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="designationName" class="control-label">Select Designation <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="designationName" v-model="designationName" id="designationName" class="form-control">
                                                            <option value="">Select designation name</option>
                                                            <option value="Teacher">Teacher</option>
                                                            <option value="Assistant Teacher">Assistant Teacher</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="date" class="control-label">Date <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="date" class="form-control" id="date" placeholder="Enter Date">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="search">&nbsp;</label>
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-success search-btn"><i class="fa fa-eye"></i> View Report</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection