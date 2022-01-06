<?php 
/* Template Name: Homepage Template */
get_header(); 
?>

<div class='row gx-0'>
	
	<?php if(have_posts()){
		while(have_posts()){ 
			the_post(); ?>
			
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		<?php }// end while
	} else{ ?>
		
	<?php }	?>
	
</div>

<?php get_footer();