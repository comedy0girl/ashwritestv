<?php /*Template Name: Portfolio Gallery*/ ?>

<?php get_header(); ?>
    <div class="news-container twelve columns">
        <div class="content-portfolio-single">
        	<h2><?php the_title(); ?></h2>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div><!-- content post -->

        <div class="row socialShare">
            <?php echo wpfai_social(); ?>
        </div>

    </div><!--news container end -->
<?php get_footer(); ?>