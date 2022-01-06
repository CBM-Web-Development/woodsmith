<?php get_header();?>
<div class="container-fluid">
	<div class="row">
		<?php 
		if(get_the_post_thumbnail()){
			$thumbnail_url = get_the_post_thumbnail_url(); 
		}else{
			$thumbnail_url = get_header_image();
		}
		?>
		<div class="page-header-container"  style="background-image:url(<?php echo $thumbnail_url; ?>);">
			<div class="page-header-content h-100 d-flex justify-content-center">
				<h1 class="page-header-title align-self-center"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="row">
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<div class="col-md-10 mx-auto">
			<?php the_content();?>		
		</div>
		<?php endwhile; else: ?>
		
		<?php endif; ?>
	</div>	
</div>
<?php get_footer();?>