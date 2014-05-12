<header class="container banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="navbar-brand">
      <a href="http://temple-news.com/"><i class="ttn-logo icon-ttn-logo-146"></i></a>
      <a class="site-name" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
  </div>

  <nav class="collapse navbar-collapse" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
  </nav>
</header>
