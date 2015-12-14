<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title><?php echo e(_('Login - Clinik')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet">

    <script src="/js/respond.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon/favicon.png">

    <style type="text/css">
        .clinik-logo{
            font-family: 'Lato', sans-serif;
            padding-left: 20px;

        }
        .clinik-logo img {
            padding-right: 8px;
        }

    </style>
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">

        </div>

        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

            <ul class="nav navbar-nav">
                <div class="clinik-logo">
                    <h1><img src="/images/Logo35x35.png" alt="">Groupe Clinik S.A.</h1>
                </div>
            </ul>


            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-flag"></i> <?php echo e(_('Languages')); ?><b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                            <?php foreach(Config::get('laravel-gettext.supported-locales') as $locale): ?>
                                <li><a href="/lang/<?php echo e($locale); ?>"><?php echo e($locale); ?></a></li>
                            <?php endforeach; ?>

                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>



<!-- Form area -->
<div class="admin-form">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <!-- Widget starts -->
                <div class="widget worange">
                    <!-- Widget head -->
                    <div class="widget-head">
                        <i class="fa fa-lock"></i> <?php echo e(_('Login')); ?>

                    </div>

                    <div class="widget-content">
                        <div class="padd">
                            <!-- Login form -->
                            <form class="form-horizontal">
                                <!-- Email -->
                                <div class="form-group">
                                    <label class="control-label col-lg-3" for="inputName"><?php echo e(_('Name')); ?></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputName" placeholder="<?php echo e(_('Name')); ?>">
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <label class="control-label col-lg-3" for="inputPassword"><?php echo e(_('Password')); ?></label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="<?php echo e(_('Password')); ?>">
                                    </div>
                                </div>
                                <!-- Remember me checkbox and sign in button -->
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> <?php echo e(_('Remember me')); ?>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-info btn-sm"><?php echo e(_('Sign in')); ?></button>

                                </div>
                                <br />
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>



<!-- JS -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>