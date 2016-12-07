<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TenLord v1.0') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <link href="{{ URL::asset('js/bootstrap.min.js')}}" rel="javascript">
    <link href="{{ URL::asset('assets/js/bootstrap.min.js')}}" rel="javascript">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>


    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'TenLord 1.0') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li ><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-lock"></span>  Login</a></li>
                            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>  Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <?php
                                    $img = Image::make(file_get_contents('http://tenlord.zimnerds.com/images/avatars/'.Auth::user()->avatar ));

                                    $img->encode('png');
                                    $type = 'png';
                                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                                    ?>

                                    <img src="{!! $base64 !!}" class="profpic">
                                   

                                    {{ Auth::user()->name }} <span class="caret"></span>
</a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/profile') }}"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                                    <li><a href="{{ url('/properties') }}"><i class="glyphicon glyphicon-home"></i> Properties</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-arrow-left"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>




        <div class="container ">
            @if (Session::has('message'))
                <div class="flash alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class='flash alert-danger'>
                    @foreach ( $errors->all() as $error )
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>@yield('title')</h3></div>

                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">@yield('Sidebar')</div>

                    <div class="panel-body">
                        @yield('sidebar')
                        &copy; 2016. Copyright reserved.
                    </div>

                </div>
                </sidebar>
            </div>
        </div>



    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
