<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOS - GAS | Administração</title>

    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="">

    <div id="wrapper">

        @include('admin.layouts.partials._sidebar')

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                @include('admin.layouts.partials._topbar')
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>@yield('main-title')</h2>
                    @yield('breadcumbs')
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        @yield('action-area')
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.js') }}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js') }}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js') }}"></script>
    @yield('js')

</body>

</html>
