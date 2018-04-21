<p style="margin-top: 30px;">


<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Bottom Navigation Link</button>

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
        <p>Page Url :
        <?php 
        $additional_dd_code = 'id="selectError3"';
        echo form_dropdown('page_id',$options, '', $additional_dd_code);
        ?>
      </p>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="submit" value="Submit">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
</div>
</div>
</div>
</p>