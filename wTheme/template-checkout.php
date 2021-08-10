<?php
/* 
Template Name: Checkout
*/
get_header(); ?>

<div class="container px-3 mainContainer">
            <h1><?php the_title(); ?></h1>
            <div class="py-2">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: endif; ?>
            </div>
</div>

<?php get_footer(); ?> 