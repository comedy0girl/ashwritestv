<?php get_header(); ?>

	<div class="news-container twelve columns">

		<div class="row twelve columns content-post" >
			<?php query_posts( array( 'paged' => get_query_var('paged') ) ); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-wrapper">
				<div class="thePost">
				<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

				<div class="postInfo">
					<div class="postDate">
						<span><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?></span>
					</div>
					<span><?php	$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );   
						} 
					?></span>
				</div>
					
				<?php
				if (! $featured = get_the_post_thumbnail()) {
					$featured = get_the_content();
				}
				
				// extract post thumbnail URL
				preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
				$thumb = $matches[2]; ?>

				<?php if (!empty($thumb)) : ?>

				<a href="<?php echo get_permalink(); ?>">
					<img class="img-wrapper" src="<?php echo $thumb; ?>" alt="">
				</a>
	
				<!-- <?php $words = str_word_count(get_the_excerpt(), 1);
			  		echo implode(' ', array_slice($words, 5)); ?>...<a href="<?php the_permalink(); ?>">Read More</a> -->
				
			  		<?php echo wpse_custom_wp_trim_excerpt($get_the_excerpt, 20); ?>

			<?php else : ?>

				<?php the_content(); ?>

			<?php endif; ?>	
					

			
			</div><!--the post -->
			</div><!-- post wrapper ends -->
			
			<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			<!--  --><!--post nav-->
			
		</div><!-- content post -->


	</div><!--news container end -->
<?php get_footer(); ?>