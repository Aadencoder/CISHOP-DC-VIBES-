<?php 
echo Modules::run('templates/_draw_breadcrumbs', $breadcrumbs_data);

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
<div class="row" ng-controller="myController">
  <div class="col-md-4" style="background: #fff; margin-top: 20px;">
    <a href="#" data-featherlight="{{ defaultPic }}">
    <img src="{{ defaultPic }}"  width="400px" height="380px">
    </a>
    <br>

     <?php foreach ($gallery_pics as $thumbnail) { ?>
    <div class="col-md-4" style="background: #fff; margin-top: 20px;">
         <img ng-click="change('<?php echo $thumbnail; ?>')" src="<?php echo $thumbnail; ?>"; width="100px" height="100px">
    </div>
      <?php } ?>

  </div>
  <div class="col-md-5" style="padding: 20px">
  	<h1><?php 

    echo$item_title; ?></h1>
    <h2 style="color: Red;"> Our Price <?php echo  $currency_symbol.$item_price ; ?></h2>
  	<div style="clear: both;">
  		<?php  echo nl2br($item_description); ?>
  	</div>
  </div>
  <div class="col-md-3" style="background: #f1f2f7; margin-top: 20px;">
  	<?php 
     echo  Modules::run('cart/_draw_add_to_cart', $update_id);
  	?>
  </div>
</div>
