 
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 10px; border: 8px solid #f3f3f3;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php 
        $count = 0;
        foreach ($query_slides->result() as $row_slides) { 

          if ($count == 0 ){
            $class = 'class="active"';
          } else {
            $class = '';
          }
          ?>
         <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php echo $class; ?>></li>
        <?php
        $count++;
         } ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      <?php 
      $count = 0;
      foreach ($query_slides->result() as $row_slides) { 

        $target_url = $row_slides->target_url;
        $alt_text = $row_slides->alt_text;
        $pic_path = base_url()."slider_pics/".$row_slides->picture;

        ?>
        <?php if ($count == 0 ) {  $class = 'active'; ?>
        <div class="item <?php echo $class; ?>">
        <a href="<?php echo $target_url; ?>">
          <img src="<?php echo $pic_path; ?>" alt="<?php echo $alt_text; ?>">
        </a>
        </div>
        <?php  } else { $class = ''; ?>
        <div class="item <?php echo $class; ?>">
            <img src="<?php echo $pic_path; ?>" alt="<?php echo $alt_text; ?>">
        </div>  
        <?php  } 

       $count++; 
      }
     ?>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>