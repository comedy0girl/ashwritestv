<?php /*Template Name: Single Blog Post*/ ?>

<?php get_header(); ?>
    <div class="news-container twelve columns">
        <div class="nine columns blogContainer">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="single-post-wrapper">
                    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                    <div class="postDate">
                        <span><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?></span>
                    </div>


                    <?php global $post; ?>
                    <?php
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                    ?>
                    <div class="row twelve columns bannerImage" style="background: url(<?php echo $src[0]; ?> ); background-position:top center; height: 400px; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover; -o-background-size: cover; background-size: cover;">     
                    </div>
                        
                    <?php the_content(); ?>

                    <div class="row socialShare">
                        <?php echo wpfai_social(); ?>
                    </div>
                </div><!-- post wrapper ends -->
            
            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            
        </div><!-- blogs -->
        <div class="three columns sideBlog">
            <?php dynamic_sidebar('blog_sidebar'); ?>
        </div>
    </div><!--news container end -->
<?php get_footer(); ?>