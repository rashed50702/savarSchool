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
                        <a href="{{ route('teachers.index') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Teachers List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>Adding New Teacher</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name" class="control-label">Full Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
                                                        {{-- <p v-if="errors.name" class="error">@{{ errors.name[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gender" class="control-label">Gender <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <div>
                                                            <label class="radio-inline ml-5">
                                                              <input type="radio" name="gender" v-model="gender" value="1" checked=""><strong>Male</strong>
                                                            </label>
                                                            <label class="radio-inline">
                                                              <input type="radio" name="gender" v-model="gender" value="0"><strong>Female</strong>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    {{-- <p v-if="errors.gender" class="error">@{{ errors.gender[0] }}</p> --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="dob" class="control-label">Date Of Birth <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="dob" class="form-control" id="dob" placeholder="Date Of Birth">
                                                        {{-- <p v-if="errors.dob" class="error">@{{ errors.dob[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="religion" class="control-label">Religion <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="religion" class="form-control" id="religion" placeholder="Religion">
                                                        {{-- <p v-if="errors.religion" class="error">@{{ errors.religion[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_no" class="control-label">Phone No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="xxxxxxxxxx">
                                                        {{-- <p v-if="errors.phone_no" class="error">@{{ errors.phone_no[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email" class="control-label">Email(Username) <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="example@example.com">
                                                        {{-- <p v-if="errors.email" class="error">@{{ errors.email[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="present_address" class="control-label">Present Address <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="present_address" class="form-control" id="present_address" placeholder="Present Address">
                                                        {{-- <p v-if="errors.present_address" class="error">@{{ errors.present_address[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="permanent_address" class="control-label">Permanent Address <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="permanent_address" class="form-control" id="permanent_address" placeholder="Permanent Address">
                                                        {{-- <p v-if="errors.permanent_address" class="error">@{{ errors.permanent_address[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="blood_group" class="control-label">Blood Group <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="Blood Group">
                                                        {{-- <p v-if="errors.blood_group" class="error">@{{ errors.blood_group[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="photo" class="control-label">Photo <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="file" name="photo" class="form-control" id="photo" placeholder="photo">
                                                        {{-- <p v-if="errors.photo" class="error">@{{ errors.photo[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="designation" class="control-label">Designation <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="designation" class="form-control" id="designation" placeholder="Academic Year">
                                                        {{-- <p v-if="errors.designation" class="error">@{{ errors.designation[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-success save-btn"><i class="fa fa-check"></i> Submit</button>
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