<div data-role="navbar">
	<ul>
		<?php 
		foreach ($top_nav_btns as $value) {
			if ($value['btn_target_url'] == $current_url) {
				$top_nav_css = 'class="ui-btn-active"';
			} else {
				$top_nav_css = '';
			}

			if ($value['text'] == 'Login') {
				$top_nav_css .= ' rel="external"';
			}
		?>
		<li>
			<a href="<?php echo $value['btn_target_url']; ?>" data-icon="<?php echo $value['icon']; ?>" <?php echo $top_nav_css; ?>>
		    <?php echo $value['text']; ?>
		    </a>
		</li>
		<?php } ?>
	</ul> 
</div><!-- /navbar -->