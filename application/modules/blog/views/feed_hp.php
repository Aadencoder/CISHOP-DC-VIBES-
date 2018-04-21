<h1>The Blog</h1>
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
<div class="row">
  <div class="col-md-3" style="margin-bottom: 20px;">
    <img src="<?php echo $thumbnail_path; ?>" class="img-responsive img-thumbnail">
  </div>
  <div class="col-md-9">
    <h4><a href="<?php echo $blog_url; ?>"><?php echo $row->page_title; ?></a></h4>
    <small class="text-muted"><i class="glyphicon glyphicon-user"></i> <?php echo $row->author; ?>  <i class="glyphicon glyphicon-calendar"></i> <span class="mark"><?php echo $date_published; ?></span></small>
    <p><?php echo $article_preview; ?></p>
  </div>
</div>
<?php }
?>

