<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'TenLord v1.0')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <link href="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>" rel="javascript">
    <link href="<?php echo e(URL::asset('assets/js/bootstrap.min.js')); ?>" rel="javascript">

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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'TenLord 1.0')); ?>

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
                        <?php if(Auth::guest()): ?>
                            <li ><a href="<?php echo e(url('/login')); ?>"><span class="glyphicon glyphicon-lock"></span>  Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>"><span class="glyphicon glyphicon-user"></span>  Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <?php
                                    $img = Image::make(file_get_contents('http://tenlord.zimnerds.com/images/avatars/'.Auth::user()->avatar ));

                                    $img->encode('png');
                                    $type = 'png';
                                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                                    ?>

                                    <img src="<?php echo $base64; ?>" class="profpic">
                                   

                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
</a>

                                <ul class="dropdown-menu" role="menu">
                                
                                    <li><a href="<?php echo e(url('/profile#messages')); ?>"><i class="glyphicon glyphicon-envelope"></i> Notifications <span class="badge danger"><?php echo e(Auth::user()->unreadNotifications->count()); ?></span></a></li>
                                    <li><a href="<?php echo e(url('/profile')); ?>"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                                    <li><a href="<?php echo e(url('/properties')); ?>"><i class="glyphicon glyphicon-home"></i> Properties</a></li>
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-arrow-left"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>




        <div class="container ">
            <?php if(Session::has('message')): ?>
                <div class="flash alert-info">
                    <p><?php echo e(Session::get('message')); ?></p>
                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class='flash alert-danger'>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3><?php echo $__env->yieldContent('title'); ?></h3></div>

                        <div class="panel-body">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo $__env->yieldContent('Sidebar'); ?></div>

                    <div class="panel-body">
                        <?php echo $__env->yieldContent('sidebar'); ?>
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
