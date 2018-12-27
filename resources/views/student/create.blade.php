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
                        <a href="#"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Students List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>New student registration</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                            <div class="row">
                                                <div class="col-md-12"><h4><strong>Student Information</strong></h4></div>
                                            </div>
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
                                                        <label for="email" class="control-label">Email <span class="star"><i class="fa fa-star"></i></span></label>
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
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12"><h4><strong>Basic Information</strong></h4></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="academic_year" class="control-label">Academic Year <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="academic_year" class="form-control" id="academic_year" placeholder="Academic Year">
                                                        {{-- <p v-if="errors.academic_year" class="error">@{{ errors.academic_year[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="className" class="control-label">Select Class <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="className" v-model="className" id="className" class="form-control">
                                                            <option value="">Select class name</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                        {{-- <p v-if="errors.className" class="error">@{{ errors.className[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sectionName" class="control-label">Select Class Section <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="sectionName" v-model="sectionName" id="sectionName" class="form-control">
                                                            <option value="">Select class section</option>
                                                            {{-- @foreach($academicClasses as $academicClass)
                                                            <option value="{!! $academicClass->id !!}">{!! $academicClass->name !!}</option>
                                                            @endforeach --}}
                                                        </select>
                                                        {{-- <p v-if="errors.sectionName" class="error">@{{ errors.sectionName[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="admission_no" class="control-label">Admission No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="admission_no" class="form-control" id="admission_no" placeholder="Admission No">
                                                        {{-- <p v-if="errors.admission_no" class="error">@{{ errors.admission_no[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nationality" class="control-label">Nationality <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality">
                                                        {{-- <p v-if="errors.nationality" class="error">@{{ errors.nationality[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mother_tongue" class="control-label">Mother Tongue <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="mother_tongue" class="form-control" id="mother_tongue" placeholder="Mother Tongue">
                                                        {{-- <p v-if="errors.mother_tongue" class="error">@{{ errors.mother_tongue[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12"><h4><strong>Gurdian Information</strong></h4></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="father_name" class="control-label">Father Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father Name">
                                                        {{-- <p v-if="errors.father_name" class="error">@{{ errors.father_name[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="father_phone_no" class="control-label">Father Phone No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="father_phone_no" class="form-control" id="father_phone_no" placeholder="Father Phone No">
                                                        {{-- <p v-if="errors.father_phone_no" class="error">@{{ errors.father_phone_no[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="father_email" class="control-label">Father Email </label>
                                                        <input type="text" name="father_email" class="form-control" id="father_email" placeholder="Father Email">
                                                        {{-- <p v-if="errors.father_email" class="error">@{{ errors.father_email[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="father_occupation" class="control-label">Father Occupation <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="father_occupation" class="form-control" id="father_occupation" placeholder="Father Occupation">
                                                        {{-- <p v-if="errors.father_occupation" class="error">@{{ errors.father_occupation[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mother_name" class="control-label">Mother Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Mother Name">
                                                        {{-- <p v-if="errors.mother_name" class="error">@{{ errors.mother_name[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mother_phone_no" class="control-label">Mother Phone No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="mother_phone_no" class="form-control" id="mother_phone_no" placeholder="Mother Phone No">
                                                        {{-- <p v-if="errors.mother_phone_no" class="error">@{{ errors.mother_phone_no[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mother_email" class="control-label">Mother Email </label>
                                                        <input type="text" name="mother_email" class="form-control" id="mother_email" placeholder="Mother Email">
                                                        {{-- <p v-if="errors.mother_email" class="error">@{{ errors.mother_email[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mother_occupation" class="control-label">Mother Occupation <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="mother_occupation" class="form-control" id="mother_occupation" placeholder="Mother Occupation">
                                                        {{-- <p v-if="errors.mother_occupation" class="error">@{{ errors.mother_occupation[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gurdianRelation" class="control-label">Gurdian Relation <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="gurdianRelation" v-model="gurdianRelation" id="gurdianRelation" class="form-control">
                                                            <option value="">Select Gurdian Relation</option>
                                                            <option value="Father">Father</option>
                                                            <option value="Mother">Mother</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                        {{-- <p v-if="errors.gurdianRelation" class="error">@{{ errors.gurdianRelation[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gurdianName" class="control-label">Gurdian Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="gurdianName" class="form-control" id="gurdianName" placeholder="Gurdian Name">
                                                        {{-- <p v-if="errors.gurdianName" class="error">@{{ errors.gurdianName[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gurdianPhoneNo" class="control-label">Gurdian Phone No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="gurdianPhoneNo" class="form-control" id="gurdianPhoneNo" placeholder="Gurdian Phone No">
                                                        {{-- <p v-if="errors.gurdianPhoneNo" class="error">@{{ errors.gurdianPhoneNo[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gurdianEmail" class="control-label">Gurdian Email <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="gurdianEmail" class="form-control" id="gurdianEmail" placeholder="Gurdian Email">
                                                        {{-- <p v-if="errors.gurdianEmail" class="error">@{{ errors.gurdianEmail[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gurdianAddress" class="control-label">Gurdian Address <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="gurdianAddress" class="form-control" id="gurdianAddress" placeholder="Gurdian Address">
                                                        {{-- <p v-if="errors.gurdianAddress" class="error">@{{ errors.gurdianAddress[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                </div>
                                            </div>
                                            <hr>
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