<?php get_header(); ?>

<div class="container px-3 mainContainer">
    <div class="row">
        <div class="col-lg-9 col-sm-auto">
            <img src="<?php the_post_thumbnail_url('post_thumb'); ?>" class='img-fluid mb-4'>
            <h1><?php the_title(); ?></h1>
            <div class="py-2">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: endif; ?>
            </div>
        </div>
        <div class="col-lg-3 col-sm-auto">
            <div class="sticky-top" style="top: 30px;">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 