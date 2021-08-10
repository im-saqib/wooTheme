<?php get_header(); ?>

<div class="container px-3 mainContainer">
    <div class="row">
        <div class="col-lg-9 col-sm-auto">
            <div class="py-2">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="blogPost">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('post_thumb'); ?>" class='img-fluid mb-4'>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endwhile; else: endif; ?>
                <div class="pagination">
                <?php
                    global $wp_query;
                    
                    $big = 999999999; // need an unlikely integer
                    
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) );
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-auto">
            <div class="sticky-top" style="top: 30px;">
            <?php dynamic_sidebar('blog-sidebar'); ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 