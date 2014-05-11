<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="aesop-entry-content entry-content">
      <!-- ASE Chapter Component JS -->
      <div class="aesop-entry-header"></div>
      <?php the_content(); ?>
    </div>
    <footer class="footer-single">
      <div class="footer-single-nav">
        <div class="footer-nav-next">
          <?php next_post_link(); ?>
        </div>
      </div>
      <div class="footer-single-meta">
        <div class="footer-summary">
          <h6>Summary of Reporting</h6>
          <p>"Chop, Boom, You're Gone" is the culmination of five months of reporting on the university's decision last December to eliminate seven non-revenue sports. This is an aggregation of previously published content. When possible, links to original stories are provided in text. All words, images and video are the work of The Temple News, unless otherwise noted.</p>
        </div>
        <div class="footer-credits">
          <div class="footer-credits-words">
            <h6>Words By</h6>
            <p><?php the_field('by_words'); ?></p>
          </div>
          <div class="footer-credits-video">
            <h6>Video By</h6>
            <p><?php the_field('by_videos'); ?></p>
          </div>
          <div class="footer-credits-image">
            <h6>Photos By</h6>
            <p><?php the_field('by_photos'); ?></p>
          </div>
          <div class="footer-credits-site">
            <h6>Produced By</h6>
            <p>Chris Montgomery, Patrick McCarthy and Rob DiRienzo</p>
          </div>
          <div class="footer-colophon">
          <h6>Colophon</h6>
            <p>Set in Adelle and Adelle Sans, via Typekit</p>
            <p>Built with WordPress, Aesop Story Engine, Roots, Bedrock and Bootstrap</p>
            <p>Hosted by Digital Ocean</p>
            <p><a href="https://github.com/TheTempleNews/chopboom/" title="ChopBoom on GitHub">View source code on GitHub</a></p>
          </div>
        </div>
      </div>
    </footer>
  </article>
<?php endwhile; ?>
