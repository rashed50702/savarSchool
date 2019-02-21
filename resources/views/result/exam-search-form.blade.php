@extends('layouts.app')
@section('content')
@section('title','Class Wise Result')
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
                                        <div class="panel-heading"><p>Search class wise results</p></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label for="examName" class="control-label">Select Exam <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="examName" id="examName" class="form-control">
                                                            <option value="">Select exam name</option>
                                                            <option value="Final">Final</option>
                                                            <option value="Mid Term">Mid Term</option>
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
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <div class="exam-marks">
                                    <h3>Exam: Mid Term</h3>
                                    <h4>Class: Two</h4>
                                    <h4>Section: A</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                  <th>Student Id</th>
                                                  <!-- <th>Roll No</th> -->
                                                  <th>Name</th>
                                                  <th>Grade</th>
                                                  <!-- <th>Point</th> -->
                                                  <th>Total Mark</th>
                                                  <th>Remarks</th>
                                                  <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                                <tr>
                                                  <td>20180701</td>
                                                  <!-- <td></td> -->
                                                  <td>Md.Jasim</td>
                                                  <td>
                                A+                  </td>
                                                  
                                                  <td>
                                                    519                  </td>
                                                  <td>
                                                    Excellent                  </td>
                                                  <td>
                                                    <a href="#" class="btn btn-info">View</a>
                                                  </td>
                                                </tr>
                                                                <tr>
                                                  <td>20180703</td>
                                                  <!-- <td></td> -->
                                                  <td>Md.Forhad Reza</td>
                                                  
                                <td>
                                                  </td>
                                                  
                                                  <td>
                                                                      </td>
                                                  <td>
                                                                      </td>
                                                  <td>
                                                    <a href="#" class="btn btn-info">View</a>
                                                  </td>
                                                </tr>
                                                                </tbody>
                                                
                                              </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection