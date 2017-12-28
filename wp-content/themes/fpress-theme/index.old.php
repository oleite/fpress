<?php get_header(); ?>


	
	<?php //The Loop |  https://codex.wordpress.org/The_Loop 
	if(have_posts()):
		while(have_posts()): the_post(); ?>

		<div class="col-sm-5">
			<div style="background-color: #333; width: 330px; height: 200px"></div>
		</div>
		<div class="col-sm-7">
			<p class="category"><?php the_category('   |   '); ?></p>
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
			<p class="date"><?php the_time( get_option( 'date_format' )); ?></p>
		</div>
		<hr>
	<?php 
		endwhile;
	endif; ?>


<?php get_footer(); ?>