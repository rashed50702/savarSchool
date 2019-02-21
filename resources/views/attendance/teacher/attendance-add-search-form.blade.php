@extends('layouts.app')
@section('content')
@section('title','Teacher Attendance Add Search Form')
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
                                        <div class="panel-heading"><p>Daily Attendance</p></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-2">
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
                            <div class="col-md-12">
                                      <div class="promotion-table">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="daily-attendence-report">
                                              <h4>Date:{{ date('d-M-Y') }}</h4>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <!-- <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Copy</button>
                                            <button type="button" class="btn btn-secondary">Excel</button>
                                            <button type="button" class="btn btn-secondary">PDF</button>
                                            <button type="button" class="btn btn-secondary">Show/Hide Column</button>
                                            <button type="button" class="btn btn-secondary">Print</button>
                                          </div> -->
                                          </div>
                                          <div class="col-md-4 text-right">
                                            <div class="form-group">
                                              <!-- <input type="text" placeholder="Search" class="form-control"> -->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="table-responsive">
                                            <table class="table">
                                              <tbody>
                                                <tr>
                                                <th>SI</th>
                                                <th>NAME</th>
                                                <th>DESIGNATION</th>
                                                <th>PRESENT</th>
                                                <th>ABSENT</th>
                                                <th>LATE</th>
                                              </tr>
                                              <input type="hidden" name="class" value="1">
                                              <input type="hidden" name="section" value="1">
                                                <tr>
                                                <td>1</td>
                                                <td>Md.Jasim</td>
                                                <td>Asst. Teacher</td>
                                                <td>
                                                  <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="attendance[]" id="exampleRadios1" value="p" checked="">
                                                  <label class="form-check-label" for="exampleRadios1">
                                                    Present
                                                  </label>
                                                </div>
                                                </td>
                                                <td>
                                                  <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="attendance[]" id="exampleRadios1" value="a">
                                                  <label class="form-check-label" for="exampleRadios1">
                                                    absent
                                                  </label>
                                                </div>
                                                </td>
                                                <td>
                                                 <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="attendance[]" id="exampleRadios1" value="l">
                                                  <label class="form-check-label" for="exampleRadios1">
                                                    late
                                                  </label>
                                                </div>
                                                </td>
                                                
                                                
                                              </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Md.Forhad Reza</td>
                                                <td>Teacher</td>
                                                <td>
                                                  <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="attendance[]" id="exampleRadios1" value="p" checked="">
                                                  <label class="form-check-label" for="exampleRadios1">
                                                    Present
                                                  </label>
                                                </div>
                                                </td>
                                                <td>
                                                  <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="attendance[]" id="exampleRadios1" value="a">
                                                  <label class="form-check-label" for="exampleRadios1">
                                                    absent
                                                  </label>
                                                </div>
                                                </td>
                                                <td>
                                                 <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="attendance[]" id="exampleRadios1" value="l">
                                                  <label class="form-check-label" for="exampleRadios1">
                                                    late
                                                  </label>
                                                </div>
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
        </div>
    </div>
@endsection

@section('page_scripts')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection