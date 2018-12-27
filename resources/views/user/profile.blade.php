@extends('layouts.app')
@section('content')
@section('title','Profile')
    <div class="container page-content">
        <div class="row">
            <div class="col-sm-12">
                <h2>Update your profile!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      
                        <h4><i class="fa fa-file-text-o" aria-hidden="true"></i> <b>@yield('title')</b></h4>
                        <a href="#"><span style=" margin-top: -33px;" class="btn btn-success btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Update Profile</span></a>
                    </div>
                    <div class="panel-body">
                        {{ Form::model($user, array('route' => array('profile.update', $user->id),'enctype'=>'multipart/form-data', 'method' => 'PUT','files' => 'true','id' => 'classForm','class'=>'form-horizontal form-label-left')) }}
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="your_name">Your Name <span class="validateRq">*</span> :</label>
                                           {!! Form::text('your_name', $user->name, $attributes = array('class'=>'form-control required','id'=>'your_name','placeholder'=>'Please Enter Your Full Name')) !!}
                                           @if($errors->has('your_name'))
                                                <span class="validation_msg">
                                                    <strong>{{ $errors->first('your_name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="your_email">Your Email <span class="validateRq">*</span> :</label>
                                           {!! Form::text('your_email',$user->email, $attributes = array('class'=>'form-control required','id'=>'your_email','placeholder'=>'Please Enter Your Email')) !!}
                                           @if($errors->has('your_email'))
                                                <span class="validation_msg">
                                                    <strong>{{ $errors->first('your_email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                       
                                           {!! Form::password('password', $attributes = array('class'=>'form-control required','id'=>'password','placeholder'=>'Please Enter Password')) !!}
                                           @if($errors->has('password'))
                                        <span class="validation_msg">
                                           <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="password">Confirm Password :</label>
                                       
                                           {!! Form::password('password', $attributes = array('class'=>'form-control required','id'=>'password','placeholder'=>'Please Enter Password Again')) !!}
                                           @if($errors->has('password'))
                                        <span class="validation_msg">
                                           <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>If you don't want to change password, please leave them empty!</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="photo">Photo :</label>
                                            {!! Form::file('photo',$attributes = array('class'=>'form-control photo','id'=>'photo','onchange'=>'image(this)')) !!}
                                           @if($errors->has('photo'))
                                        <span class="validation_msg">
                                           <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div class="panel-body center-block">
                                            <img id="showPhoto" class="img-thumbnail" src=" @if(@$user->photo && @$user->photo !='' && file_exists('uploads/parentsPhoto/' . @$user->photo) AND ! empty(@$user->photo)) {{ url('uploads/parentsPhoto/'.$user->photo) }} @endif" style="height:100px;width:100px;border-width:0px;margin-top: -19px;margin-left: -19px;">
                                      </div>
                                </div>
                            </div>
                          
                          <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                    <button type="button" class="btn btn-success btn_style pull-left">@if(isset($user)){{'Update'}}@else{{'Save'}}@endif</button>
                                     <button type="reset" class="btn btn-grey pull-left">Cancel</button>
                            </div>
                          </div>
                          </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection