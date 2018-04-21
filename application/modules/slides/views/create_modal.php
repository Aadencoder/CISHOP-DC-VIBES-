<p style="margin-top: 30px;">

<a href="<?php echo base_url(); ?>sliders/create/<?php echo $parent_id; ?>"><button type="submit" class="btn btn-primary">Back </button></a>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Slide</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Slide</h4>
      </div>
      <div class="modal-body">
     <form class="form-horizontal" action="<?php echo $form_location; ?>" method="post">
        <p>
        <div class="form-group">
          <label class="control-label">Target URL :</label>
          <div class="controls">
            <input type="text" class="span10" name="target_url" placeholder="Enter the target url for the image">
          </div>
        </div>
        </p>
        <p>
        <div class="form-group">
          <label class="control-label">Alt Text :</label>
          <div class="controls">
            <input type="text" class="span10" name="alt_text" placeholder="Enter the alt text for the image"></input>
          </div>
        </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="submit" value="Submit">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <?php 
      echo form_hidden('parent_id', $parent_id);
      ?>
    </form>
    </div>
</div>
</div>
</p>