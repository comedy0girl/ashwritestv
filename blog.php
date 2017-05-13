<?php /*Template Name: Blog Home*/ ?>

<?php get_header(); ?>

	<div class="news-container twelve columns">
		<div class="content-post" >
			<div id="masonry-grid">
			<div class="gutter-size"></div>


			<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
				$args = array(
				    'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
				    'paged'          => $current_page // current page
				);
				query_posts( $args );

				$wp_query->is_archive = true;
				$wp_query->is_home = false; ?>


			<?php while(have_posts()): the_post(); ?>
				<div class="six columns postBlock">
				    <h2><a href="<?= get_permalink(); ?>"><?php the_title() /* post title */ ?></a></h2>
				    <div class="postInfo">
						<div class="postDate">
							<span><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?></span> / <span><?php	$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo esc_html( $categories[0]->name );   
							} 
						?></span>
						</div>
					</div>
				    <?= get_the_post_thumbnail(); ?>
				    <p class="postExcerpt"><?php the_excerpt() ?></p>
				</div>
			<?php endwhile; ?>
			</div><!--- masonry -->
		</div><!-- content post -->

		<div class="row twelve columns post-nav">
				<?php wp_pagenavi(); ?>
			</div><!--post nav-->

	</div><!--news container end -->

<?php get_footer(); ?>

<script type="text/javascript">


jQuery(window).on('load', function(){
   var $container = $('#masonry-grid');
   $container.imagesLoaded( function () {

     $container.masonry({
       itemSelector: '.postBlock'
     });

   });
  });
</script>