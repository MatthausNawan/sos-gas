<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet"/>
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700&display=swap&subset=latin-ext"
        rel="stylesheet"/>
    @yield('styles')

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
            aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">SOS - Gás<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Voltar ao Site</a>
            </li>
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link disabled" href="#">Disabled</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item dropdown">--}}
            {{--                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
            {{--                <div class="dropdown-menu" aria-labelledby="dropdown08">--}}
            {{--                    <a class="dropdown-item" href="#">Action</a>--}}
            {{--                    <a class="dropdown-item" href="#">Another action</a>--}}
            {{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
            {{--                </div>--}}
            {{--            </li>--}}
        </ul>
    </div>
</nav>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Feito por quem ama tecnologia.</span>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@yield('scripts')
</body>

</html>
