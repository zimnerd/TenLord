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
                {{ config('app.name', 'TenLord v1.0') }}
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
                    <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
    <img src="/images/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
    {{ Auth::user()->name }} <span class="caret"></span>
</a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li><a href="{{ url('/profile') }}" >My Profile</a></li>
                            <li><a href="{{ url('/account') }}" >My Account</a></li>
                            <li><a href="#" >My Posts</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="{{url('/login')}}" method="POST" id="loginForm" novalidate>
                        <div class="form-group" id="email-div">
                            {{ csrf_field() }}
                            <label class="control-label" for="email">Email</label>
                            <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required value="" name="email" class="form-control">
                            {{-- <div id="form-errors-email" class="has-error"></div> --}}
                            <span class="help-block">
                                <strong id="form-errors-email"></strong>
                            </span>
                            <span class="help-block small">Your email</span>
                        </div>
                        <div class="form-group" id="password-div">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                            <span class="help-block">
                                <strong id="form-errors-password"></strong>
                            </span>
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div class="form-group" id="login-errors">
                            <span class="help-block">
                                <strong id="form-login-errors"></strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#resetModal">Reset Password</a>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-login right">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="{{url('/register')}}" method="POST" id="registerForm">

                        <div class="form-group" id="register-name">
                            <label for="name" class="control-label">Name</label>
                            <input id="name" type="text" class="form-control" placeholder="choose name" required title="Please enter you name" name="name">
                            <span class="help-block">
                                    <strong id="register-errors-name"></strong>
                                </span>
                            <span class="help-block small">Your name</span>
                        </div>

                        <div class="form-group" id="register-email">
                            {{ csrf_field() }}
                            <label class="control-label" for="email">Email</label>
                            <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required value="" name="email" class="form-control">
                            <span class="help-block">
                                <strong id="register-errors-email"></strong>
                            </span>
                            <span class="help-block small">Your email</span>
                        </div>

                        <div class="form-group" id="register-password">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                            <span class="help-block">
                                <strong id="register-errors-password"></strong>
                            </span>
                            <span class="help-block small">Your strong password</span>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="******" name="password_confirmation">

                            <span class="help-block">
                                <strong id="form-errors-password-confirm"></strong>
                            </span>

                        </div>

                        <div class="form-group" id="login-errors">
                            <span class="help-block">
                                <strong id="form-login-errors"></strong>
                            </span>
                        </div>
                        <div>
                            <button class="btn btn-login right">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" hidden="true">
    <div class="login-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="{{ url('/password/email') }}" method="POST" id="resetForm" novalidate>
                        <div class="form-group" id="emailResetPass-div">
                            {{ csrf_field() }}
                            <label class="control-label" for="email">Email</label>
                            <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required value="" name="email" class="form-control">
                            {{-- <div id="form-errors-email" class="has-error"></div> --}}
                            <span class="help-block">
                                    <strong id="form-errors-email-reset-pass"></strong>
                                </span>
                            <span class="help-block small">Your email</span>
                            <span id="successBlock" class="help-block hidden">
                                    <div class="alert alert-success alert-dismissible">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <small id="success"><i class="icon fa fa-check"></i> </small>
                                    </div>
                                </span>
                        </div>

                        <div>
                            <button class="btn btn-primary pull-right">Reset</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function(){

        var resetForm = $("#resetForm");
        resetForm.submit(function(e){
            e.preventDefault();
            var formData = resetForm.serialize();
            $( '#form-errors-email-reset-pass' ).html( "" );
            $("#emailResetPass-div").removeClass("has-error");

            $.ajax({
                url:'/password/email',
                type:'POST',
                data:formData,
                success:function(data){
                    $( '#success' ).html( data.status );
                    $("#successBlock").removeClass('hidden');
                },
                error: function (data) {
                    var obj = jQuery.parseJSON( data.responseText );
                    if(obj.email){
                        $("#emailResetPass-div").addClass("has-error");
                        $( '#form-errors-email-reset-pass' ).html( obj.email );
                    }
                    if(obj.error){
                        $("#emailResetPass-div").addClass("has-error");
                        $( '#form-errors-email-reset-pass' ).html( obj.error );
                    }
                }
            });
        });

        var loginForm = $("#loginForm");
        loginForm.submit(function(e){
            e.preventDefault();
            var formData = loginForm.serialize();
            $( '#form-errors-email' ).html( "" );
            $( '#form-errors-password' ).html( "" );
            $( '#form-login-errors' ).html( "" );
            $("#email-div").removeClass("has-error");
            $("#password-div").removeClass("has-error");
            $("#login-errors").removeClass("has-error");

            $.ajax({
                url:'/login',
                type:'POST',
                data:formData,
                success:function(data){
                    $('#loginModal').modal( 'hide' );
                    location.reload(true);
                },
                error: function (data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                    if(obj.email){
                        $("#email-div").addClass("has-error");
                        $( '#form-errors-email' ).html( obj.email );
                    }
                    if(obj.password){
                        $("#password-div").addClass("has-error");
                        $( '#form-errors-password' ).html( obj.password );
                    }
                    if(obj.error){
                        $("#login-errors").addClass("has-error");
                        $( '#form-login-errors' ).html( obj.error );
                    }
                }
            });
        });

        var registerForm = $("#registerForm");
        registerForm.submit(function(e){
            e.preventDefault();
            var formData = registerForm.serialize();
            $( '#register-errors-name' ).html( "" );
            $( '#register-errors-email' ).html( "" );
            $( '#register-errors-password' ).html( "" );
            $("#register-name").removeClass("has-error");
            $("#register-email").removeClass("has-error");
            $("#register-password").removeClass("has-error");

            $.ajax({
                url:'/register',
                type:'POST',
                data:formData,
                success:function(data){
                    $('#registerModal').modal( 'hide' );
                    location.reload(true);
                },
                error: function (data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                    if(obj.name){
                        $("#register-name").addClass("has-error");
                        $( '#register-errors-name' ).html( obj.name );
                    }
                    if(obj.email){
                        $("#register-email").addClass("has-error");
                        $( '#register-errors-email' ).html( obj.email );
                    }
                    if(obj.password){
                        $("#register-password").addClass("has-error");
                        $( '#register-errors-password' ).html( obj.password );
                    }
                    if(obj.error){
                         $("#login-errors").addClass("has-error");
                         $( '#form-login-errors' ).html( obj.error );
                    }
                }
            });
        });
    });
</script>