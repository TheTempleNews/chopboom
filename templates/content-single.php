<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="aesop-entry-content entry-content">
      <!-- ASE Chapter Component JS -->
      <div class="aesop-entry-header"></div>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
