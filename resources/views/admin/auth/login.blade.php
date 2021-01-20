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
            <h2 id="login_title">Welcome to<br> Surigao del Sur<br>{{ config('app.name') }}</h2>
            <p id="login_paragraph">Enter your Username and Password to Login</p>
           </div>
           <div class="mb-2">
                @include('templates.error')
           </div>
            <form action="{{ route('admin.auth.loginAdmin') }}" method="POST">
                {{ csrf_field() }}
                <i style="color:red;">* Username must be 5 characters.</i>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}">
                </div>
                <i style="color:red;">* Password must be 5 characters.</i>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" id="btn" class="btn btn-success block full-width m-b">Login</button>
            </form>
        </div>
</body>
</html>

