<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> The Temple News</p>
      <p class="first-published">First Published on May 11, 2014</p>
      <p class="last-updated">Last updated on <?php the_modified_time('F d, Y'); ?> at <?php the_modified_time('H:i'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
