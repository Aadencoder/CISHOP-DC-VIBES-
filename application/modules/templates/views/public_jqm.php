<html <?php if(isset($use_angularjs)) { echo 'ng-app="myApp"'; }?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CISHOP | Store Archieve Acoustic & Electric Guitars</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/cishop.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	 <?php if (isset($use_featherlight)) { ?>
    <link href="<?php echo base_url(); ?>css/featherlight.min.css" type="text/css" rel="stylesheet" />
    <?php } ?>

    <?php if(isset($use_angularjs)) { ?>
      <script src="<?php echo base_url(); ?>js/angular.min.js"></script>
    <?php } ?>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
			<h1>CISHOP</h1>
		</div>
			<?php echo Modules::run('templates/_draw_top_nav_jqm', $customer_id); ?>
		<div data-role="content" data-theme="a">
		<?php 
    	//loading the carousel
	    //echo Modules::run('sliders/_attempt_draw_slider');  

		if($customer_id>0){
			include('customer_panel_top_jqm.php');
		}

		if (isset($page_content)) {

			echo '<div class="ui-body ui-body-a ui-corner-all">';
				echo nl2br($page_content);
			echo '</div>';

		if (!isset($page_url)){
		  $page_url = "homepage";
		}
		if ($page_url==""){
		  require_once('homepage_content_jqm.php');
		} elseif ($page_url == "contactus"){
		  //load up the contact form
		  echo Modules::run('contactus/_draw_form');
		}
		}
		elseif (isset($view_file)) {
		$this->load->view($view_module.'/'.$view_file);
		}
		?> 
		</div>
	</div>
</body>
</html>