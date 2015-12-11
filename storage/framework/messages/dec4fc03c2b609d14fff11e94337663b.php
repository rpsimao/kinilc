<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>

<ul>
    <?php foreach(Config::get('laravel-gettext.supported-locales') as $locale): ?>
        <li><a href="/lang/<?php echo e($locale); ?>"><?php echo e($locale); ?></a></li>
    <?php endforeach; ?>
</ul>
<div class="container">



    <div class="content">
        <div class="title">Laravel 5 or not</div>
        <?php echo e(_('Hello From English')); ?>

    </div>
</div>
</body>
</html>