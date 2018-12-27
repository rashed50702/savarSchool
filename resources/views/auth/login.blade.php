<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Waxwing Software Limited">
    <title>Login | School </title>
    <!-- Bootstrap -->
    <link href="{!! asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!! asset('assets/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset('assets/plugins/nprogress/nprogress.css') !!}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{!! asset('assets/plugins/animate.css/animate.min.css') !!}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{!! asset('assets/build/css/custom.min.css') !!}" rel="stylesheet">
    <!-- Style -->
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">
    <style>
        .animate  {
            background: #fff;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 1px 1px 8px;
            margin: 20% auto;
        }
    </style>
  </head>

    <body class="login">
        <div class="logs">
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        {!! Form::open(['url' => 'login','id' => 'loginform']) !!}
                          <h1>Login </h1>
                            @if($errors->any())
                              <div class="alert alert-danger alert-dismissible" role="alert">
                                @foreach($errors->all() as $error)
                                  <strong>{!! $error !!}</strong><br>
                                @endforeach
                              </div>
                            @endif

                            @if(session()->has('error'))
                              <div class="alert alert-danger">
                                <p>{!! session()->get('error') !!}</p>
                              </div>
                            @endif

                            @if(session()->has('success'))
                              <div class="alert alert-success">
                                <p>{!! session()->get('success') !!}</p>
                              </div>
                            @endif
                            <div>
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
                            </div>
                            <div>
                                <input style="float:right;" type="submit" class="btn btn-success" value="Login">
                                <a class="reset_pass" href="#"> Forgot password ?</a>
                            </div>

                        {!! Form::close() !!}
                    </section>
                </div>
            </div>
        </div>
  </body>
</html>