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
                        <a href="{{ route('institues.index') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Institutes</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>New Institute</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name" class="control-label">Institute Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Institute Name">
                                                        {{-- <p v-if="errors.name" class="error">@{{ errors.name[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address" class="control-label">Address <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                                        {{-- <p v-if="errors.address" class="error">@{{ errors.address[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="principalName" class="control-label">Principal Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="principalName" class="form-control" id="principalName" placeholder="Principal Name">
                                                        {{-- <p v-if="errors.name" class="error">@{{ errors.name[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNo" class="control-label">Phone No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="phoneNo" class="form-control" id="phoneNo" placeholder="phoneNo">
                                                        {{-- <p v-if="errors.phoneNo" class="error">@{{ errors.phoneNo[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email" class="control-label">Email(Username) <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email(Username)">
                                                        {{-- <p v-if="errors.name" class="error">@{{ errors.name[0] }}</p> --}}
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