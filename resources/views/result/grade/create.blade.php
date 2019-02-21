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
                        <a href="{{ route('results.grades.index') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Grades List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>Adding New Grade</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                          
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gradeName" class="control-label">Grade Name <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="gradeName" class="form-control" id="gradeName" placeholder="Grade Name">
                                                        {{-- <p v-if="errors.gradeName" class="error">@{{ errors.gradeName[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gradePoint" class="control-label">Grade Point <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="gradePoint" class="form-control" id="gradePoint" placeholder="Grade Point">
                                                        {{-- <p v-if="errors.gradePoint" class="error">@{{ errors.gradePoint[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="highestMarks" class="control-label">Highest Marks(%) <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="highestMarks" class="form-control" id="highestMarks" placeholder="00">
                                                        {{-- <p v-if="errors.highestMarks" class="error">@{{ errors.highestMarks[0] }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lowestMarks" class="control-label">Lowest Marks(%) <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="lowestMarks" class="form-control" id="lowestMarks" placeholder="00">
                                                        {{-- <p v-if="errors.lowestMarks" class="error">@{{ errors.lowestMarks[0] }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description" class="control-label">Description <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="description" class="form-control" id="description" placeholder="Description">
                                                        {{-- <p v-if="errors.description" class="error">@{{ errors.description[0] }}</p> --}}
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