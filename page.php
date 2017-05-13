<?php /*Template Name: one page*/ ?>

<?php get_header(); ?>
	<div class="row twelve columns single-page" >
        <div class="content-page">
            	  <h2><?php the_title(); ?></h2>  
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>

        <div class="row socialShare">
            <?php echo wpfai_social(); ?>
        </div>

	</div><!-- content post -->
<?php get_footer(); ?>