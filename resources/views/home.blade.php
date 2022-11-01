<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <title>Example Backend</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset('AdminLTE-2.3.3/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/datepicker/datepicker3.css')}}">
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
              type="text/css"/>
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('AdminLTE-2.3.3/custom/js/sweetalert/dist/sweetalert.css')}}" rel="stylesheet"
              type="text/css"/>
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.3/plugins/iCheck/all.css')}}">
        <!-- Theme style -->
        <link href="{{asset('AdminLTE-2.3.3/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('AdminLTE-2.3.3/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('AdminLTE-2.3.3/custom/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css"
              href="{{asset('AdminLTE-2.3.3/custom/js/selectize/dist/css/selectize.default.css') }}"/>
        <link rel="stylesheet" type="text/css"
              href="{{asset('AdminLTE-2.3.3/custom/js/selectize/dist/css/selectize.bootstrap3.css') }}"/>
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/iCheck/flat/blue.css')}}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/morris/morris.css')}}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('AdminLTE-2.3.3/plugins/datatables/dataTables.bootstrap.css')}}">

        <link href="{{asset('AdminLTE-2.3.3/custom/css/dropzone.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('AdminLTE-2.3.3/custom/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link href="{{asset('admin/css/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" type="text/css" />


        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{asset('AdminLTE-2.3.3/dist/css/skins/skin-purple.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-purple fixed">
        @include('backend.__partials._head')

        @include('backend.__partials._sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @if(Session::has('flash_message'))
            <div class="alert alert-{{Session::get('flash_message.class')}} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h3 style="text-align: center">{{ Session::get('flash_message.body') }}</h3>
            </div>
            @endif

            <section class="content-header">
                @yield('content-header')
            </section>
            <!-- Content Wrapper. Contains page content -->
            <section class="content">
                @yield('content')
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-left hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2022 <a href="#">Example.com</a>.</strong> All rights reserved.
        </footer>

        <script src="{{asset('AdminLTE-2.3.3/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{asset('AdminLTE-2.3.3/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/fastclick/fastclick.min.js')}}"></script>

        <script>
        var AdminLTEOptions = {
            //Enable sidebar expand on hover effect for sidebar mini
            //This option is forced to true if both the fixed layout and sidebar mini
            //are used together
            sidebarExpandOnHover: false,
            //BoxRefresh Plugin
            enableBoxRefresh: false,
            //Bootstrap.js tooltip
            enableBSToppltip: true
        };
        </script>
        <!-- AdminLTE App -->
        <script src="{{asset('AdminLTE-2.3.3/dist/js/app.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/sweetalert/dist/sweetalert.min.js') }}"
        type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/dropzone.js') }}" type="text/javascript"></script>
        <script type="text/javascript"
        src="{{ asset('AdminLTE-2.3.3/custom/js/selectize/dist/js/standalone/selectize.min.js') }}"></script>

        <script src="{{asset('AdminLTE-2.3.3/custom/js/backend.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/customScript.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/custom.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/jquery-ui.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/parsley.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/custom/js/parsley_ar.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('AdminLTE-2.3.3/plugins/iCheck/icheck.min.js') }}"></script>
        <script src="{{asset('AdminLTE-2.3.3/plugins/chartjs/Chart.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

        <script src="{{asset('AdminLTE-2.3.3/plugins/morris/morris.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- jvectormap -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('AdminLTE-2.3.3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/knob/jquery.knob.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- datepicker -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
        <!-- DataTables -->
        <script src="{{asset('AdminLTE-2.3.3/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('AdminLTE-2.3.3/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('AdminLTE-2.3.3/plugins/chartjs/Chart.min.js')}}"></script>

        @yield('ckeditor')
        @yield('scripts')

        @yield('last-scripts')

    </body>

</html>