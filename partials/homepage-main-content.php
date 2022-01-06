<?php 
if(have_rows('main_content')):
	while(have_rows('main_content')): the_row();
	if(get_row_layout() == 'normal_content'): ?>
	<div class="row" style="background-color:<?php echo get_sub_field('background_color'); ?>">
		<div class="col-md-12">
			<?php the_sub_field('content');?>
		</div>
	</div>
	<?php 
	elseif(get_row_layout() == 'columns') : ?>
	<div class="row" style="background-color:<?php echo get_sub_field('background_color'); ?>">
		<?php 
		$num_columns = get_sub_field('columns'); 
		$column_class = 12/$num_columns;
		?>
		
		<div class="col-md-<?php echo $column_class; ?> ">
			<?php echo get_sub_field('column_1');?>
		</div>
		
		
		<div class="col-md-<?php echo $column_class; ?> ">
			<?php echo get_sub_field('column_2');?>
		</div>
		
		<?php if(get_sub_field('column_3')): ?>
		<div class="col-md-<?php echo $column_class; ?> ">
			<?php echo get_sub_field('column_3');?>
		</div>
		<?php endif; ?>
		
		<?php if(get_sub_field('column_4')): ?>
		<div class="col-md-<?php echo $column_class; ?> ">
			<?php echo get_sub_field('column_4');?>
		</div>
		<?php endif; ?>
	</div>
	<?php 
	endif;
	endwhile;
endif;