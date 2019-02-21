@extends('layouts.app')
@section('content')
@section('title','Student Class Routine')
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
                        <div class="row">
                          <div class="col-md-12">
                            <div class="employee-atantion">
                                <div class="text-center">
                                    <h3>Class: One, Section: A</h3>
                                </div>
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody>
                                    <tr>
                                      <th style="width: 150px;">Day</th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td>Saturday</td>
                                      <td>
                                        <span class="badge badge-info">English(09:00am-09:30am)</span>
                                        <span class="badge badge-info">Bangla(09:30am-10:00am)</span>
                                    </td>
                                    </tr>
                                    <tr>
                                      <td>Sunday</td>
                                      <td>
                                          <span class="badge badge-info">English(09:00am-09:30am)</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Monday</td>
                                      <td>
                                          <span class="badge badge-info">English(09:00am-09:30am)</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Tuesday</td>
                                      <td>
                                          <span class="badge badge-info">English(09:00am-09:30am)</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Wednesday</td>
                                      <td>
                                          <span class="badge badge-info">English(09:00am-09:30am)</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Thursday</td>
                                      <td>
                                          <span class="badge badge-info">English(09:00am-09:30am)</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Friday</td>
                                      <td>
                                          <span class="badge badge-error">Off</span>
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
        </div>
    </div>
@endsection

@section('page_scripts')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection