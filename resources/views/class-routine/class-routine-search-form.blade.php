@extends('layouts.app')
@section('content')
@section('title','Class Routine Search Form')
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
                                        <div class="panel-heading"><p>Class Routine</p></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label for="className" class="control-label">Select Class <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="className" v-model="className" id="className" class="form-control">
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
                                                        <select name="sectionName" v-model="sectionName" id="sectionName" class="form-control">
                                                            <option value="">Select section name</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
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
                                            <table class="table table-striped table-bordered" style="color: black">
                                                                <thead>
                                                                  <tr>
                                                                      <th colspan="3" class="text-center" style="font-size: 20px">Class Routine - Class One</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody><tr>
                                                                    <th>Day</th>
                                                                    <th>Class Shedule</th>
                                                                </tr>
                                                                </tbody><tbody>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Saturday</td>
                                                                            <td>
                                                                                                                                              <div style="margin-bottom: 5px;" class="btn-group 49">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> Math<br>Mr. Jasim<br>12:23 PM-&gt;12:23 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="49">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/49" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="49">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                             <div style="margin-bottom: 5px;" class="btn-group 50">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> Math<br>Mr. John<br>12:26 PM-&gt;12:26 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="50">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/50" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="50">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                             <div style="margin-bottom: 5px;" class="btn-group 51">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> AA<br>Mr. John<br>01:23 PM-&gt;01:23 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="51">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/51" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="51">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                             <div style="margin-bottom: 5px;" class="btn-group 52">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> Math<br>Mr. Sami<br>01:23 PM-&gt;01:23 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="52">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/52" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="52">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                             <div style="margin-bottom: 5px;" class="btn-group 53">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> Math<br>Mr. Jasim<br>01:23 PM-&gt;01:23 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="53">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/53" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="53">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                             <div style="margin-bottom: 5px;" class="btn-group 62">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> Math<br>Mr. Jasim<br>11:30 PM-&gt;11:30 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="62">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/62" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="62">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                             <div style="margin-bottom: 5px;" class="btn-group 70">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> AA<br>Mr. Jasim<br>09:31 PM-&gt;09:31 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="70">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/70" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="70">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                                                                                                                                                          <div style="margin-bottom: 5px;" class="btn-group 75">
                                                                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false"> Test<br>Mr. Jasim<br>10:44 AM-&gt;10:20 PM <span class="caret"></span>
                                                                                  </button>
                                                                                  <ul role="menu" class="dropdown-menu">
                                                                                     <li><a href="" class="editModalBtn" data-toggle="modal" data-id="75">Edit</a>
                                                                                     </li>
                                                                                     <li>
                                                                                      <a href="https://rashedhasan.info/ems/public/class_routine/75" class="delete deleteBtn" data-token="u7qizBceZRScugqkpC4BnW5Uvk64t8zjENaiCvqu" data-id="75">Delete</a>
                                                                                     </li>
                                                                                    </ul>
                                                                               </div>
                                                                                                            
                                                                            </td>
                                                                       
                                                                    </tr>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Sunday</td>
                                                                            <td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                            </td>
                                                                    </tr>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Monday</td>
                                                                            <td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                            </td>
                                                                       
                                                                    </tr>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Thuesday</td>
                                                                            <td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                            </td>
                                                                    </tr>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Wednesday</td>
                                                                            <td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                            </td>
                                                                    </tr>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Thursday</td>
                                                                            <td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                            </td>
                                                                    </tr>
                                                                        
                                                                    <tr>
                                                                        <td style="font-size: 15px">Friday</td>
                                                                            <td>                                                         </td>
                                                                       
                                                                    </tr>
                                                                     
                                                                </tbody>
                                                            </table>
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