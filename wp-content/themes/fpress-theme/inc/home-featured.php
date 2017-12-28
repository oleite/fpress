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
	$destaqueCat = "destaque";
	$destaque2Cat = "destaque2";
	$destaquePostNum = 1;
	$destaque2PostNum = 2;

	$my_query = new WP_Query( 'category_name='.$destaqueCat.'&posts_per_page='.$destaquePostNum );
	while ( $my_query->have_posts() && $destaquePostNum != 0) : $my_query->the_post();
	array_push($do_not_duplicate, $post->ID); ?>
		<a href="<?php echo get_permalink(); ?>">
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
		</a>
	<?php endwhile; ?>

<?php $my_query = new WP_Query( 'category_name='.$destaque2Cat.'&posts_per_page='.$destaque2PostNum );
if ($my_query->have_posts() && $destaque2PostNum != 0): ?>
	<div class="feat-second-container ">
		<?php	while ( $my_query->have_posts() ) : $my_query->the_post();
		if (in_array($post->ID,$do_not_duplicate) ) continue;
		array_push($do_not_duplicate, $post->ID); ?>
			<a href="<?php echo get_permalink(); ?>">
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
			</a>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
</div>
