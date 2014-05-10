<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <div class="wrap" role="document">
    <main class="main overlay <?php echo roots_main_class(); ?>" role="main">
      <header class="title">
        <h1 class="site-name"><?php bloginfo('name'); ?></h1>
        <h2 class="site-description"><?php bloginfo('description'); ?></h2>
      </header>
      <h3 class="begin"><a href="<?php echo home_url('/the-ambush/'); ?>">Begin &raquo;</a></h3>
    </main><!-- /.main -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer', 'front-page'); ?>

</body>
</html>
