<?php get_header(); ?>

<div class="container px-3 mainContainer">
    <div class="row">
        <div class="col-lg-9 col-sm-auto">
            <div class="py-2">
                <?php woocommerce_content(); ?>
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