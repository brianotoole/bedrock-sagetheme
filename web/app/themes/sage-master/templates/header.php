<header class="banner" role="banner">
  <div class="container clearfix">
    <a id="logo" class="brand" href="<?= esc_url(home_url('/')); ?>">
    <span><?php bloginfo('name'); ?></span></a>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
