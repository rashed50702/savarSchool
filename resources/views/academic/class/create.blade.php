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
                        <a href="{{ route('classes.index') }}"><span style=" margin-top: -33px;" class="btn btn-primary btn-flat btn-sm pull-right"><i class="fa fa-list-ul" aria-hidden="true"></i> @lang('left_menu.class_menu') @lang('form.list')</span></a>
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST" id="adding-class" action="{!! route('classes.store') !!}" @submit.prevent="addClass()">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><p>Adding new class</p></div>
                                        <div class="panel-body">
                                            <p v-if="successMessage"><strong class="alert-success">@{{ successMessage }}</strong></p>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <div width="100px">
                                                        <label class="switch">
                                                          <input type="checkbox" v-model="checked" @change="onChange">
                                                          <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="class_name" class="control-label">@lang('left_menu.class_menu') @lang('form.name') <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="name" v-model="name" class="form-control" :class="{ 'is-danger':errors.name }" id="name" placeholder="@lang('left_menu.class_menu') @lang('form.name')">
                                                        <p v-if="errors.name" class="error">@{{ errors.name[0] }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="code" class="control-label">@lang('left_menu.class_menu') @lang('form.code') <span class="star"><i class="fa fa-star"></i></span></label>
                                                        <input type="text" name="code" v-model="code" class="form-control" :class="{ 'is-danger':errors.code }" id="code" placeholder="@lang('left_menu.class_menu') @lang('form.code')">
                                                        <p v-if="errors.code" class="error">@{{ errors.code[0] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="status" class="control-label">@lang('form.status') <span class="star"><i class="fa fa-star"></i></span></label>
                                                        
                                                        <label class="radio-inline ml-5">
                                                          <input type="radio" name="status" v-model="status" value="1" checked=""><strong>@lang('form.active')</strong>
                                                        </label>
                                                        <label class="radio-inline">
                                                          <input type="radio" name="status" v-model="status" value="0"><strong>@lang('form.inactive')</strong>
                                                        </label>
                                                    </div>
                                                    <p v-if="errors.status" class="error">@{{ errors.status[0] }}</p>
                                                </div>
                                                <div class="col-md-6"></div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success save-btn"><i class="fa fa-check"></i> @lang('form.save')</button>
                                                <a href="{{ route('classes.index') }}" class="btn btn-danger"><i class="fa fa-exclamation-circle"></i> @lang('form.cancel')</a>
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
        name: '',
        code: '',
        status: '',
        errors: {},
        successMessage: '',
        checked: false,
      },
      
      methods: {
        addClass(){
            axios.post('/academic/classes', {
                name: this.name,
                code: this.code,
                status: this.status,
              })
              .then((response) => {
                this.successMessage = "Data saved successfully!",
                this.name = "",
                this.code = "",
                this.status = "",
                this.errors = ""
              })
              .catch((error) => {
                this.errors = error.response.data.errors,
                this.successMessage = ""
              });
        },
        onChange(){
            this.$emit('input', this.checked)
        },
      }
    })
</script>
@endsection