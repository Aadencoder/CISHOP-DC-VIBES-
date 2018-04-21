<h3 class="ui-bar ui-bar-a">The Blog</h3>
<div data-role="collapsibleset" data-theme="a" data-content-theme="a" data-mini="true">
<?php 
  $this->load->module('timedate');
  foreach ($query->result() as $row) {
    $article_preview = word_limiter($row->page_content, 25);
    $picture = $row->picture;
    $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
    $thumbnail_name = str_replace('.', '_thumb.', $picture);
    $thumbnail_path = base_url().'blog_pics/'.$thumbnail_name;
    $blog_url = base_url().'blog/article/'.$row->page_url;
  ?>

<div data-role="collapsible">
  <h3><?php echo $row->page_title; ?></h3>
      <small><?php echo $row->author; ?> <?php echo $date_published; ?></small>
      <p><?php echo $article_preview; ?></p>
      <p class="text-right"><a href="<?php echo $blog_url; ?>">read more</a></p>
</div>

<?php }
?>
</div>