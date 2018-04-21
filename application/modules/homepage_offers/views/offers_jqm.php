  <div class="ui-body">
    <ul data-role="listview">
<?php
foreach ($query->result() as $row) {
  $item_title = $row->item_title;
  $item_price = $row->item_price;
  $was_price = $row->was_price;
  $small_pic = $row->small_pic;
  $small_pic_path = base_url()."small_pics/".$small_pic;
  $item_page = base_url().$item_segments.$row->item_url;
  $item_price = number_format($row->item_price, 2);
  $item_price = str_replace('.00', '', $item_price);
  ?>

        <li>
          <a href="<?php echo $item_page; ?>" rel='external' class="cars" id="bmw">
            <img src="<?php echo "$small_pic_path"; ?>" alt="<?= $item_title; ?>">
            <h2><?php echo  $item_title; ?></h2>
            <p>Our Price :  $<?php echo $item_price; ?></p>
          </a>
        </li>
  
<?php }  ?>
    </ul>
  </div>