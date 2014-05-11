<header class="container banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo home_url(); ?>/">
      <i class="ttn-logo icon-ttn-logo-146" href="http://temple-news.com/"></i>
      <span class="site-name"><?php bloginfo('name'); ?></span>
    </a>
  </div>

  <nav class="collapse navbar-collapse" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
  </nav>
</header>
