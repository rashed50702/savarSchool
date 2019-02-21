@extends('layouts.app')
@section('content')
@section('title','Create')
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
                        <a href="{{ route('class-routines.search-form') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Class Routines List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="{!! route('classes.store') !!}" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>Adding new section</p></div>
                                        <div class="panel-body">
                                            <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="className" class="control-label">Select Class <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="className" v-model="className" id="className" class="form-control">
                                                            <option value="">Select class name</option>
                                                            @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach
                                                        </select>
                                                        <p v-if="errors.className" class="error">@{{ errors.className[0] }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sectionName" class="control-label">Select Section <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="sectionName" id="sectionName" class="form-control">
                                                            <option value="">Select section name</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="subjectName" class="control-label">Select Subject <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="subjectName" id="subjectName" class="form-control">
                                                            <option value="">Select subject name</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="teacherName" class="control-label">Select Teacher <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="teacherName" id="teacherName" class="form-control">
                                                            <option value="">Select teacher name</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="startTime" class="control-label">Start Time <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="startTime" class="form-control" placeholder="Start Time">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="endTime" class="control-label">End Time <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="endTime" class="form-control" placeholder="End Time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="dayName" class="control-label">Select Day <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="dayName" id="dayName" class="form-control">
                                                            <option value="">Select day name</option>
                                                            <option value="Saturday">Saturday</option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-success save-btn"><i class="fa fa-check"></i> Save</button>
                                                <a href="{{ route('class-routines.search-form') }}" class="btn btn-danger"><i class="fa fa-exclamation-circle"></i> Cancel</a>
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

<script>
    var app = new Vue({
      el: '#pageContent',
      data: {
        className: '',
        name: '',
        status: '',
        errors: {},
        successMessage: ''
      },
      
      methods: {
        addSection(){
            axios.post('/academic/sections', {
                className: this.className,
                name: this.name,
                status: this.status,
              })
              .then((response) => {
                this.successMessage = "Data saved successfully!",
                this.className = "",
                this.name = "",
                this.status = "",
                this.errors = ""
              })
              .catch((error) => {
                this.errors = error.response.data.errors,
                this.successMessage = ""
              });
        }
      }
    })
</script>
@endsection