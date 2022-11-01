<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Example | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/bootstrap/css/bootstrap.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/dist/css/AdminLTE.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/iCheck/square/blue.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page login-page-branded">
        <div class="login-box">

            <div class="login-logo">
                <a  href="{{url('/')}}"><img class="img-responsive" style="display: inherit!important" src="{{asset('AdminLTE-2.3.3/custom/images/4.png')}}" alt=""></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Example Login</p>
                @if (isset($errors) && !empty($errors->all()))
                <span class="help-block">
                    @foreach($errors->all() as $error) <p>{{ $error }}</p> @endforeach
                </span>
                @endif
                <form class="form-horizontal form-inputs" role="form" method="POST" action="{{ url('/login') }}" data-parsley-validate="true">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control input-text" name="email" id="username" placeholder="Youremail" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="input-text form-control" type="password" name="password" placeholder="Password"
                               id="password" required/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                <i class="fa fa-check" aria-hidden="true"></i> Login
                            </button>
                        </div>

                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('AdminLTE-2.3.3/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- iCheck -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/iCheck/icheck.min.js')}}"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>

    </body>
</html>
