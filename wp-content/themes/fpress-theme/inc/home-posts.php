<div class="post-feed-container">

   <?php	$my_query = new WP_Query( 'posts_per_page=10' );
   while ( $my_query->have_posts() ) : $my_query->the_post();
   if (in_array($post->ID,$do_not_duplicate) ) continue; ?>

      <div class="post">

         <?php if (has_post_thumbnail()): ?>
            <div class="post-featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
         <?php endif; ?>

         <div class="post-content">
            <p class="categorias">
               <?php if ( is_sticky() ): ?>
                  <i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp;
               <?php endif; ?>
               <?php the_category('&nbsp; | &nbsp;'); ?>
            </p>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <p class="data desktop-only"><?php the_time( get_option( 'date_format' )); ?></p>
         </div>
         <p class="data mobile-only" style="order: 3"><?php the_time( get_option( 'date_format' )); ?></p>
         
      </div>

      <hr />
   <?php endwhile; ?>

</div>
