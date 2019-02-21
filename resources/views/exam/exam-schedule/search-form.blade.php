@extends('layouts.app')
@section('content')
@section('title','Exam Routine')
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
                                        <div class="panel-heading"><p>Search Exam Routine</p></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label for="examName" class="control-label">Select Exam <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="examName" id="examName" class="form-control">
                                                            <option value="">Select class name</option>
                                                            <option value="One">One</option>
                                                            <option value="Two">Two</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="className" class="control-label">Select Class <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="className" id="className" class="form-control">
                                                            <option value="">Select class name</option>
                                                            <option value="One">One</option>
                                                            <option value="Two">Two</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="sectionName" class="control-label">Select Section <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="sectionName" id="sectionName" class="form-control">
                                                            <option value="">Select section name</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="search">&nbsp;</label>
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-success search-btn"><i class="fa fa-search"></i> Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                          <div class="table-class-routine">
                                            <div class="table-class-title text-center">
                                              <h3>Exam Routine</h3>
                                              <h2>Mid Term</h2>
                                              <h3>(Class: Class One)</h3>
                                              <h3>(Section: A)</h3>
                                              <a class="btn btn-danger" id="printPageButton" onclick="window.print();"><i class="fa fa-print"></i>print Exam routine</a><br><br>
                                            </div>
                                            <div class="table-responsive">
                                              <table class="table text-center">
                                                <tbody><tr>
                                                  <th>SL</th>
                                                  <th>Date</th>
                                                  <th>Subject</th>
                                                  <th>Room</th>
                                                  <th>Start Time</th>
                                                  <th>End Time</th>
                                                </tr>
                                                              <tr>
                                                  <td>1</td>
                                                  <td>2018-06-12</td>
                                                  <td>English 1st Paper</td>
                                                  <td>201</td>
                                                  <td>10:30</td>
                                                  <td>12:30</td>
                                                </tr>
                                                              <tr>
                                                  <td>2</td>
                                                  <td>2018-10-13</td>
                                                  <td>English 2nd Paper</td>
                                                  <td>201</td>
                                                  <td>10:30</td>
                                                  <td>12:30</td>
                                                </tr>
                                                              
                                              </tbody></table>
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