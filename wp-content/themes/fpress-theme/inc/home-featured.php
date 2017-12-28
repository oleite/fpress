<?php //The Loop |  https://codex.wordpress.org/The_Loop
/*if(have_posts()):
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
endif; */?>

<div class="feat-container">


	<?php
	$do_not_duplicate = array();

	$my_query = new WP_Query( 'category_name=destaque&posts_per_page=1' );
	while ( $my_query->have_posts() ) : $my_query->the_post();
	array_push($do_not_duplicate, $post->ID); ?>

		<div class="feat-first" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

			<div class="feat-category">
				<p class="categorias">
					<?php if ( is_sticky() ): ?>
						<i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp;
					<?php endif; ?>
					<?php the_category('&nbsp; | &nbsp;'); ?>
				</p>
			</div>

			<div class="feat-content">
				<h1><?php the_title(); ?></h1>
				<p><?php the_excerpt(); ?></p>
				<br>
				<p class="data"><?php the_time( get_option( 'date_format' )); ?></p>
			</div>

		</div>
	<?php endwhile; ?>

	<div class="feat-second-container ">
		<?php	$my_query = new WP_Query( 'category_name=destaque2&posts_per_page=2' );
		while ( $my_query->have_posts() ) : $my_query->the_post();
		//if (in_array($post->ID,$do_not_duplicate) ) continue;
		array_push($do_not_duplicate, $post->ID); ?>

			<div class="feat-second" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

				<div class="feat-category">
					<p class="categorias">
						<?php if ( is_sticky() ): ?>
							<i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp;
						<?php endif; ?>
						<?php the_category('&nbsp; | &nbsp;'); ?>
					</p>

				</div>

				<div class="feat-content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<p class="data"><?php the_time( get_option( 'date_format' )); ?></p>
				</div>

			</div>
		<?php endwhile; ?>
	</div>


</div>
