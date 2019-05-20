<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NTG RES-POS | Login</title>
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">




</head>


<body class="hold-transition login-page">
<div class="container">
    <div class="login-box bg-primary">
        @if(Session('error')) <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span> {{Session('error')}}</div> @endif
        <div class="login-logo">
        <span class="logo-lg"><img src="../../ntg/morehead-state-eagle-png-logo-8.png" class="img-circle" style="width: 50px"><p>Login</p></span>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg"><i>Sign in to start your session</i></p>

            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required >
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <span class="logo-lg"><img src="../../ntg/morehead-state-eagle-png-logo-8.png" class="img-circle" style="width: 50px"> <b>Welcome My Login Page</b></span>
            </div>


        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</div>


<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        $("#name").focus();
    });
</script>


</body>
</html>