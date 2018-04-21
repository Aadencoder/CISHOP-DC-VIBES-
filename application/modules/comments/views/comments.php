<div class="row-fluid sortable">
	<div class="box span12">
		
		<div class="box-content">
			<h3>Comments :</h3>
			<table class="table table-striped table-bordered">
				<?php 
				$this->load->module('timedate');
				
				foreach ($query->result() as $row) {
					?>
					<tr>
					  <td>
					  <small style="font-size: 10px; font-style: italic; color: #333;"><i class="icon-calendar"></i> 
					  	<?php 
					   $date_created = $this->timedate->get_nice_date($row->date_created, 'full');
					   echo $date_created; ?>
					  </small><br>
					  <mark style="background-color: #eee; padding: 3px; border-radius: 3px; margin-left: 1%;">
					  <i class="icon icon-pencil"> - <?php echo nl2br($row->comment); ?></i></mark>
						
					  </td>
					</tr>
					<?php
				}
				?>
			</table>


		</div>
	</div>
</div>