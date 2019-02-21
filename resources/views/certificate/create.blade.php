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
                        <a href="{{ route('certificates.index') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Certificates</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>New certificae</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="serialNo" class="control-label">Serial No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="serialNo" class="form-control" id="serialNo" placeholder="xxxxxxxxxx">
                                                        {{-- <p v-if="errors.serialNo" class="error">@{{ errors.serialNo[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="studySession" class="control-label">Session <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="studySession" class="form-control" id="studySession" placeholder="xxxx-xxxx">
                                                        {{-- <p v-if="errors.studySession" class="error">@{{ errors.studySession[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="passingYear" class="control-label">Passing Year <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="passingYear" class="form-control" id="passingYear" placeholder="xxxx">
                                                        {{-- <p v-if="errors.passingYear" class="error">@{{ errors.passingYear[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="publishingDate" class="control-label">Publishing Date <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="publishingDate" class="form-control" id="publishingDate" placeholder="00-00-0000">
                                                        {{-- <p v-if="errors.publishingDate" class="error">@{{ errors.publishingDate[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 certificate">
                                                    <p>This is certifiy that <input type="text" name="studentName"> Son/Daughter of <input type="text" name="fatherName"> and <input type="text" name="motherName"> of bearing Roll No<input type="text" name="rollNo"> duty passed the <input type="text" name="examinationName"> in <input type="text" name="groupName"> group and secured G.P.A <input type="text" name="gpa"> on scale of <input type="text" name="scale"> </p>
                                                    <p>His/Her date of birth as recorded in his/her registration card is <input type="text"> </p>
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