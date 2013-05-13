<!DOCTYPE html>
<html>
<head>
    <? Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="//commondatastorage.googleapis.com/cirruslab/libs/bootstrap/3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/css/bs3.css">
</head>
<body>
<div class="container">

    <div class="navbar">
        <?php $header_nav = new GlobalArea('Header Nav'); $header_nav->display(); ?>
        <script>
        $('.nav').addClass('navbar-nav');
        $('.nav-selected').addClass('active');
        $('.navbar-nav').prepend('<a class="navbar-brand" href="<?php echo DIR_REL; ?>/"><?php echo SITE; ?></a>');
        </script>
    </div>

</div>

<div class="container">


