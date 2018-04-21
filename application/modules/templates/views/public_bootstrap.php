<!DOCTYPE html>

<html lang="en" <?php if(isset($use_angularjs)) { echo 'ng-app="myApp"'; }?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="icon" href="<?php echo base_url(); ?>adminfiles/img/guitar.png">


    <title>CISHOP | GUITAR ONLINE STORE</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if (isset($use_featherlight)) { ?>
    <link href="<?php echo base_url(); ?>css/featherlight.min.css" type="text/css" rel="stylesheet" />
    <?php } ?>

    <?php if(isset($use_angularjs)) { ?>
      <script src="<?php echo base_url(); ?>js/angular.min.js"></script>
    <?php } ?>
  </head>

  <body>
    <div class="container-fluid dc-top">
      <div class="container" style="max-height: 89px;">
      <div class="row">
        <?php echo Modules::run('templates/_draw_page_top'); ?>
      </div>
      </div>
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
         <?php 
         echo Modules::run('store_categories/_draw_top_nav');
         ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

   
    <div class="container roundbtm" style="background-color: #fff; min-height: 650px; ">

    <?php 
    //loading the carousel
    echo Modules::run('sliders/_attempt_draw_slider');   ?>

    <?php

  if($customer_id>0){
    include('customer_panel_top.php');
  }

  if (isset($page_content)) {
    echo nl2br($page_content);

    if (!isset($page_url)){
      $page_url = "homepage";
    }
    if ($page_url==""){
      require_once('homepage_content.php');
    } elseif ($page_url == "contactus"){
      //load up the contact form
      echo Modules::run('contactus/_draw_form');
    }
  }
  elseif (isset($view_file)) {
    $this->load->view($view_module.'/'.$view_file);
  }
  ?>    

    <div class="container">
      <hr>

      <footer>
        <?php echo Modules::run('btm_nav/_draw_btm_nav'); ?>
        <p class="text-center">&copy; 2016 Company, Inc.</p>
      </footer>
    </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <?php if (isset($use_featherlight)) { ?>
    <script src="<?php echo base_url(); ?>js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <?php } ?>

  </body>
</html>
