<?php 
//echo Modules::run('templates/_draw_breadcrumbs', $breadcrumbs_data);

if(isset($flash)){
  echo $flash; 
}
?>
<script type="text/javascript">
  var myApp = angular.module('myApp', []);

  myApp.controller('myController', ['$scope', function($scope){
    $scope.defaultPic = '<?php echo $gallery_pics['0']; ?>';

    $scope.change = function(newPic) {
      $scope.defaultPic = newPic;
    }
  }])
</script>
<style type="text/css">
	.ui-bar {
		border: 1px silver solid;
	}
</style>
<h3><?php echo $item_title; ?></h3>
<div class="row" ng-controller="myController">
	<div class="ui-grid-d">
		<?php 
		$count = 0;
		 foreach ($gallery_pics as $thumbnail) { 
			$count++;
			if ($count > 5) {
				$count = 1;
			}
			switch ($count) {
				case '1':
					$block_value = 'a';
					break;
				case '2':
					$block_value = 'b';
					break;
				case '3':
					$block_value = 'c';
					break;
				case '4':
					$block_value = 'd';
					break;
				case '5':
					$block_value = 'e';
					break;
			}
		?>
	    <div class="ui-block-<?php echo $block_value; ?>">
		    <div class="ui-bar" style="height:30px">
		    	<img ng-click="change('<?php echo $thumbnail; ?>')" src="<?php echo $thumbnail; ?>"; width="100%">	
		    </div>
	    </div>
	    <?php } ?>
	    <div style="margin-top: 20px;">
	    	<img src="{{ defaultPic }}"  width="100%">
	    </div>
     	 <h3 style="color: #333;"> Our Price : <?php echo  $currency_symbol.$item_price ; ?></h3>
    	<div style="clear: both;">
    		<?php  echo nl2br($item_description); ?>
    	</div>
	</div>
</div>