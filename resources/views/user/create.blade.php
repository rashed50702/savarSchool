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
                        <a href="{{ route('users.list') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Users List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>Adding New User</p></div>
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
                                                        <label for="title" class="control-label">Title <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                                        {{-- <p v-if="errors.title" class="error">@{{ errors.title[0] }}</p> --}}
                                                    </div>
                                                    {{-- <p v-if="errors.gender" class="error">@{{ errors.gender[0] }}</p> --}}
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
                                                        <label for="institute" class="control-label">Institute Name (if any)</span></label>
                                                        <input type="text" name="institute" class="form-control" id="institute" placeholder="Institute Name">
                                                        {{-- <p v-if="errors.institute" class="error">@{{ errors.institute[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="photo" class="control-label">Photo</label>
                                                        <input type="file" name="photo" class="form-control" id="photo" placeholder="photo">
                                                        {{-- <p v-if="errors.photo" class="error">@{{ errors.photo[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="role" class="control-label">Role: <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <label class="checkbox-inline ml-5"><input type="checkbox" value="">Admin</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Principal</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Guest</label>
                                                        {{-- <p v-if="errors.designation" class="error">@{{ errors.designation[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-success save-btn"><i class="fa fa-check"></i> Submit</button>
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