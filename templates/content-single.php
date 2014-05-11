<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="aesop-entry-content entry-content">
      <!-- ASE Chapter Component JS -->
      <div class="aesop-entry-header"></div>
      <?php the_content(); ?>
    </div>
    <footer class="footer-single">
      <div class="footer-nav">
        <div class="footer-nav-next">
          <?php next_post_link(); ?>
        </div>
      </div>
      <div class="footer-summary">
        <h4>Summary of Reporting</h4>
        <p>"Chop, Boom, You're Gone" is the culmination of five months of reporting on the university's decision last December to eliminate seven non-revenue sports. This is an aggregation of previously published content. When possible, links to original stories are provided in text. All words, images and video are the work of The Temple News, unless otherwise noted.</p>
      </div>
      <div class="footer-credits">
        <div class="footer-credits-words">
          <h4>Words By</h4>
          <p><?php the_field('by_words'); ?></p>
        </div>
        <div class="footer-credits-video">
          <h4>Video By</h4>
          <p><?php the_field('by_videos'); ?></p>
        </div>
        <div class="footer-credits-image">
          <h4>Photos By</h4>
          <p><?php the_field('by_photos'); ?></p>
        </div>
        <div class="footer-credits-site">
          <h4>Produced By</h4>
          <p>Chris Montgomery, Patrick McCarthy and Rob DiRienzo</p>
        </div>
        <div class="footer-colophon">
        <h4>Colophon</h4>
          <p>Set in Adelle and Adelle Sans, via Typekit</p>
          <p>Built with WordPress, Aesop Story Engine, Roots, Bedrock and Bootstrap</p>
          <p>Hosted by Digital Ocean</p>
          <p><a href="https://github.com/TheTempleNews/chopboom/" title="ChopBoom on GitHub">View source code on GitHub</a></p>
        </div>
      </div>
    </footer>
  </article>
<?php endwhile; ?>
