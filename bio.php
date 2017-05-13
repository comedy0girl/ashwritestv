<?php /*Template Name: Biography*/ ?>

<?php get_header(); ?>
	<div class="row twelve columns bio-page" >
        <div class="content-page">

            <div class="row quotes">
                <?php dynamic_sidebar('quote1_sidebar'); ?>
            </div>

            	
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

              <div class="row quotes">
                <?php dynamic_sidebar('quote2_sidebar'); ?>
            </div>

        </div>

        <div class="row socialShare">
            <?php echo wpfai_social(); ?>
        </div>

	</div><!-- content post -->
<?php get_footer(); ?>