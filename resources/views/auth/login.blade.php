<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOS GAS | LOGIN</title>

    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Bem vindo</h2>
                <img src="{{  asset('images/sos-logo.png')}}" alt="" width="250px">
            </div>
            <div class="col-md-6">
                <div class="ibox-title">
                    <h3>Faça login para continuar</h3>
                </div>
                <div class="ibox-content">
                    <form class="m-t" role="form" action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required="" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="senha" required="" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <!-- <a href="#">
                            <small>Forgot password?</small>
                        </a> -->

                        <!-- <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
                    </form>
                    <!-- <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p> -->
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright The Soft
            </div>
            <div class="col-md-6 text-right">
                <small>© 2019-2020</small>
            </div>
        </div>
    </div>

</body>

</html>
