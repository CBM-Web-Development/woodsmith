<?php get_header();?>
<div class="container-fluid">
	<?php if(have_posts()){
		while(have_posts()){
			the_post(); ?>
			
			<div class="row">
				<?php 
				$header_class = 'page-header-container';
				if(has_post_thumbnail()){
					$thumbnail_url = get_the_post_thumbnail_url(); 
					$header_class .=  '--has-image';
				}else{
					$header_class .='--no-image';
				}
				?>
				<div class="<?php echo $header_class?>"  <?php if(has_post_thumbnail()){ ?> style="background-image:url(<?php echo $thumbnail_url; ?>);" <?php } ?>">
				<?php if(!has_post_thumbnail() && function_exists('yoast_breadcrumb')){
					echo '<div class=" col-md-12 col-lg-10 mx-lg-auto">';
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					echo '</div>';
				}?>					<?php if(has_post_thumbnail()){?>
				<div class="mask"></div>
				<?php } ?>
					<h1 class="page-header-title<?php if(!has_post_thumbnail()){ echo " col-md-12 col-lg-10 mx-lg-auto"; }else{ echo "--has-image";}?>"><?php the_title(); ?></h1>
					

				</div>
			</div>
			<div class="row">
				<div class="col-md-10 mx-auto">
					<?php the_content(); ?>
				</div>
			</div>
			
			<?php
		}
	} ?>
</div>
<?php get_footer();?>