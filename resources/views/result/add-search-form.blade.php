@extends('layouts.app')
@section('content')
@section('title','Result Submit')
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
                                        <div class="panel-heading"><p>Search Students</p></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label for="examName" class="control-label">Select Exam <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="examName" id="examName" class="form-control">
                                                            <option value="">Select exam name</option>
                                                            <option value="Mid Term">Mid Term</option>
                                                            <option value="Final Term">Final Term</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
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
                                                <div class="col-md-2">
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
                                                    <div class="form-group">
                                                        <label for="subjectName" class="control-label">Select Subject <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="subjectName" id="subjectName" class="form-control">
                                                            <option value="">Select subject name</option>
                                                            <option value="Bangla">Bangla</option>
                                                            <option value="English">English</option>
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
                        <hr>
                        <div class="searched-result">
                            
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <div class="exam-marks">
                                        <h3>Exam: Mid Term</h3>
                                        <h4>Class: Two</h4>
                                        <h4>Section: A</h4>
                                        <h4>Subject: English</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                              <div class="col-md-12">
                                                <div class="table-responsive">
                                                <table class="table">
                                                  <tbody><tr>
                                                    <!-- <th>Roll No</th> -->
                                                    <th>Student ID</th>
                                                    <th>Student Name</th>
                                                    
                                                    <th>Total Mark</th>
                                                  </tr>
                                                  <input type="hidden" name="exam" value="2">
                                                  <input type="hidden" name="class" value="2">
                                                  <input type="hidden" name="section" value="2">
                                                  <input type="hidden" name="subject" value="Subject">
                                                <tr>
                                                    <!-- <td> -->
                                                      <!--  -->
                                                      <input type="hidden" name="roll[]" value="">
                                                      <input type="hidden" name="admission[]" value="20180702">
                                                    <!-- </td> -->
                                                    <td>
                                                      20180702                        </td>
                                                    <td>Tamima Mishu</td>
                                                    
                                                    <td>
                                                        <input type="text" name="mark[]" value="0">
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <!-- <td> -->
                                                      <!--  -->
                                                      <input type="hidden" name="roll[]" value="">
                                                      <input type="hidden" name="admission[]" value="20180702">
                                                    <!-- </td> -->
                                                    <td>
                                                      20180703                        </td>
                                                    <td>Nadir Ahmed</td>
                                                    
                                                    <td>
                                                        <input type="text" name="mark[]" value="0">
                                                    </td>
                                                  </tr>
                                                    </tbody>

                                                </table>
                                              </div>
                                              <button type="button" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                             
                                              </div>
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