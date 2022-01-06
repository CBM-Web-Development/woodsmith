<?php 
		
	add_action('wp_head','woodsmith_ajaxurl');
	function woodsmith_ajaxurl() {
		?>
		<script type="text/javascript">
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		</script>
		<?php 
	}