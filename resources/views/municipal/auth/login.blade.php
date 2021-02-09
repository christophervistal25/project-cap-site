<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }} | Login</title>
    
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .bg {
            background: url('http://qrcode.surigaodelsur.ph/css/image/Surigao_del_Sur_Provincial_Capitol.jpg') center center no-repeat;
            background-size: cover;
            padding-bottom: 140px;
            position: relative;
        }
    </style>
</head>
<body class="login bg">
<div class="mcwidget-embed" data-widget-id="fb224814" data-widget-payload="OPTIONAL_PAYLOAD"></div>
    <div class="mcwidget-checkbox" data-widget-id="420"></div>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
            </div>
            <img src="http://surigaodelsur.ph/images/logo.png" class=" w-50 img-fluid" />
            <h2 id="login_title">Welcome to<br> Surigao del Sur<br>ATP (Action Trace & Protect)</h2>
            <p id="login_paragraph">Enter your Username and Password to Login</p>
           </div>
           <div class="mb-2">
                @include('templates.error')
            </div>
            <form action="{{ route('municipal.auth.loginMunicipal') }}" method="POST">
                {{ csrf_field() }}
                <i style="color:red;">* Username must be 5 characters.</i>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" >
                </div>
                <i style="color:red;">* Password must be 5 characters.</i>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" >
                </div>
                <button type="submit" id="btn" class="btn btn-success block full-width m-b">Login</button>
                <hr class="bg-light">
                <div class="container">
                    <a href="{{  route('download-android-apk') }}">
                        <img class="img-fluid box-shadow" src="{{ asset('/storage/images/android_app_download.png') }}"
                    </a>
                </div>
            </form>
        </div>
</body>
</html>


{{-- @include('templates.header')
<div class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    @include('templates.error')
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                            
                                    <form class="user"  method="POST" action="{{  route('municipal.auth.loginMunicipal') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" value="{{ old('email') }}" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@include('templates.footer')
{{-- @extends('admin.layouts.app')
@section('title', 'Admin Login')
@section('content')
<body class="">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SDSSU Quarterly Online Reporting System</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                                    </div>
                                    <form class="user" >
                                        <div class="form-group">
                                          
                                        </div>
                                  
                                        <div class="text-center mb-4">
                                            <img width="150" src="https://res.cloudinary.com/dpcxcsdiw/image/upload/v1580730503/university_app/sdssu.png" alt="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user font-weight-bold" name="email" id="emailAddress" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user font-weight-bold" name="password" id="userPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group float-right">
                                            <a href="/president/login">President Login</a>
                                            <br>
                                            <a href="/campus/login">Campus Login</a>
                                        </div>
                                        <div class="clearfix"></div>
                                       <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-user">
                                                Login
                                            </button>
                                       </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
