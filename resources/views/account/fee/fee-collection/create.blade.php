@extends('layouts.app')
@section('content')
@section('title','Fee Collect')
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
                        <a href="{{ route('accounts.fees.collections.index') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> Fee Collections List</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-section" action="#" @submit.prevent="addSection()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>New fee collection</p></div>
                                        <div class="panel-body">
                                            {{-- <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p> --}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="academicYear" class="control-label">Academic Year <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="academicYear" class="form-control" id="academicYear" placeholder="0000-0000">
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
                                                        <label for="studentName" class="control-label">Student Name <span class="star"><i class="fa fa-star"></i></span></label>

                                                        <select name="studentName" id="studentName" class="form-control">
                                                            <option value="">Select student name</option>
                                                            <option value="Anisur Rahman">Anisur Rahman</option>
                                                            <option value="Khalilur Rahman">Khalilur Rahman</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="feeType" class="control-label">Fee Type <span class="star"><i class="fa fa-star"></i></span></label>

                                                        <select name="feeType" id="feeType" class="form-control">
                                                            <option value="">Select fee type name</option>
                                                            <option value="Admission Fee">Admission Fee</option>
                                                            <option value="Tution Fee">Tution Fee</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="amount" class="control-label">Amount <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="amount" class="form-control" id="amount" placeholder="dd-mm-yyyy">
                                                        {{-- <p v-if="errors.amount" class="error">@{{ errors.amount[0] }}</p> --}}
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