<?php get_header(); ?>
<div id="wooHero">
<div class="d-flex p-0 m-0">
    <div class="heroSidebar h-100 col-3 bg-light">
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'cat-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav flex-column',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
    </div>
            <div class="col-9">
                <h1>Welcome to Shop</h1>
            </div>
    </div>
</div>
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