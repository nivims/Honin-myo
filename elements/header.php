<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php Loader::element('header_required'); ?>
        <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('/css/bootstrap-responsive.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('/css/main.css'); ?>" />
            <script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
          <body>
    <div id="wrap">
    <!-- Begin page content -->
      <div class="container">        
      <!-- Static navbar -->
      <div class="navbar navbar-static-top">
        <div class="container navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
      <?php
    $bt_nav = BlockType::getByHandle('autonav');
    $bt_nav->controller->displayPages = 'top';
    $bt_nav->controller->orderBy = 'display_asc';
    $bt_nav->controller->displaySubPages = 'none';
    $bt_nav->render('honinmyo_header_menu');
    ?>   

    
  </div><!--/.nav-collapse -->
        </div>
      </div>
<!--/end header.php start default.php -->