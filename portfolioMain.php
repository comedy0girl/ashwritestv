<?php /*Template Name: Portfolio Home Page*/ ?>

<?php get_header(); ?>

	<div class="news-container twelve columns">
		<div class="portMainContainer">
			<?php	$args = array(
		    		'sort_order' => 'asc',
					'sort_column' => 'post_title',
					'hierarchical' => 1,
					'child_of' => 828,
					'post_type' => 'page',
					'post_status' => 'publish'
				    
				); 
				$pages = get_pages($args); ?>
				<?php foreach($pages as $page) { ?>

				<div class="six columns portfolioSquare">
					<a href="<?= get_permalink($page->ID); ?>">
						<div class="mainTitles">
							<h2><?= get_the_title( $page->ID); ?></h2>
							<?= get_the_post_thumbnail( $page->ID ); ?>
					   	</div>
					</a> 
				</div><!-- portfolio square ends -->
			<?php } ?>
		</div><!--port main container ends -->
	</div><!--news container end -->
<?php get_footer(); ?>


<script type="text/javascript">

	jQuery(window).on('load', function(){
   var $container = $('#masonry-grid');
   $container.imagesLoaded( function () {

     $container.masonry({
       itemSelector: '.portfolioSquare'
     });

   });
  });
</script>