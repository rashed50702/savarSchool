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
                        <a href="{{ route('exam-schedules.search-form') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Exam Schedules List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>New exam term</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="examName" class="control-label">Exam Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="examName" id="examName" class="form-control">
                                                            <option value="">Select exam name</option>
                                                            <option value="Final Term">Final Term</option>
                                                            <option value="Mid Term">Mid Term</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="className" class="control-label">Class Name <span class="star"><i class="fa fa-star"></i></span></label>

                                                        <select name="className" id="className" class="form-control">
                                                            <option value="">Select class name</option>
                                                            <option value="One">One</option>
                                                            <option value="Two">Two</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sectionName" class="control-label">Section Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <select name="sectionName" id="sectionName" class="form-control">
                                                            <option value="">Select section name</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="subjectName" class="control-label">Subject Name <span class="star"><i class="fa fa-star"></i></span></label>

                                                        <select name="subjectName" id="subjectName" class="form-control">
                                                            <option value="">Select subject name</option>
                                                            <option value="Bangla">Bangla</option>
                                                            <option value="English">English</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="roomNo" class="control-label">Room No <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="roomNo" class="form-control" id="roomNo" placeholder="xxx">
                                                        {{-- <p v-if="errors.roomNo" class="error">@{{ errors.roomNo[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date" class="control-label">Date <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="date" class="form-control" id="date" placeholder="dd-mm-yyyy">
                                                        {{-- <p v-if="errors.date" class="error">@{{ errors.date[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="startTime" class="control-label">Start Time <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="startTime" class="form-control" id="startTime" placeholder="_:_ _">
                                                        {{-- <p v-if="errors.startTime" class="error">@{{ errors.startTime[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="endTime" class="control-label">End Time <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="endTime" class="form-control" id="endTime" placeholder="_:_ _">
                                                        {{-- <p v-if="errors.endTime" class="error">@{{ errors.endTime[0] }}</p> --}}
                                                    </div>
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