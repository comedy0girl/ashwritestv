<?php /*Template Name: Home Page*/ ?>

<?php get_header(); ?>

<div class="homePageContainer twelve columns">
	
	<div class="welcomeSquare">
		<div class="homeGreeting">
			<?php dynamic_sidebar('hello_sidebar'); ?>
		</div>
	</div>

	<div class="mainContent">
		<div class="row naviPreview">
			<?php	$args = array(
		    		'sort_order' => 'asc',
					'sort_column' => 'post_title',
					'hierarchical' => 1,
					'exclude' => 833,
					'child_of' => 0,
					'parent' => 0,
					'post_type' => 'page',
					'post_status' => 'publish'
				); 
				$pages = get_pages($args); ?>
				<?php foreach($pages as $page) { ?>

				<div class="pageSquare">
					<a href="<?= get_permalink($page->ID); ?>">
						<div class="circle"><?= get_the_post_thumbnail( $page->ID ); ?></div>
						<div class="mainTitles">

							<h4><?= get_the_title( $page->ID); ?></h4>
						</div>
					 </a> 
					 <p><?php echo $page->post_excerpt; ?></p>
				</div><!-- page square ends -->
			<?php } ?>
		</div><!-- naviPreview ends -->
	</div><!-- main content ends -->

	<div class="row portPreview">
		<?php	$args = array(
    		'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'hierarchical' => 1,
			'child_of' => 828,
			'numberposts' => 3,
			'post_type' => 'page',
			'post_status' => 'publish'
		    
		); 
		$pages = get_pages($args); ?>
		<?php foreach($pages as $page) { ?>
		
		
		<div class="portBoxes">
			<div class="innerBox">
				<a href="<?= get_permalink($page->ID); ?>">
					<div class="mainTitles">
						<?= get_the_post_thumbnail( $page->ID, 'port-preview-size' ); ?>
						<h2><?= get_the_title( $page->ID); ?></h2>
				   	</div>
				</a> 
			</div>
		</div>

		<?php } ?>

		<div class="portLink"><a href="#">View More</a></div>
	</div><!-- portPreview -->


	<div class="mainContent">
			<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
				$args = array(
				    'posts_per_page' => 4, // the value from Settings > Reading by default
				    'paged'          => $current_page // current page
				);
				query_posts( $args );

				$wp_query->is_archive = true;
				$wp_query->is_home = false; ?>

		<div class="row blogPreview">
			<div class="mainTitles">
				<h2>Inspired By TV</h2>
			</div>
			<?php while(have_posts()): the_post(); ?>
			<div class="row postPreview">
				<div class="postPreviewThumb">
			    	<?php echo get_the_post_thumbnail( $page->ID ); ?>
			    </div>
			    <div class="postText">
			    	<h2 class="postMainPage"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
			    	<div class="postDate">
						<span><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?></span> / <span><?php	$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );   
						} 
						?></span>
					</div>
					<div class="postExcerpt"><?php the_excerpt() ?></div>
			    </div><!-- post text -->
			</div><!-- post Preview ends -->

			<?php endwhile; ?>
		</div><!-- blog preview ends -->


		<div class="portLink"><a href="#">Go to blog</a></div>
	</div><!-- main content -->
</div><!--homepage container end -->

<?php get_footer('main'); ?>

