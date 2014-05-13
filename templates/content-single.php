<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="aesop-entry-content entry-content">
      <!-- ASE Chapter Component JS -->
      <!-- <div class="aesop-entry-header"></div> -->
      <a href="http://temple-news.com/"><i class="ttn-logo--masthead--chapter ttn-logo--masthead ttn-logo icon-ttn-logo-146-white" href="http://temple-news.com/"></i></a>
      <?php the_content(); ?>
    </div>
    <div class="next-post-link">
      <?php next_post_link(); ?>
    </div>
    <footer class="footer-single">
      <div class="inner">
        <div class="footer-single-meta">
          <div class="footer-summary">
            <h5>Summary of Reporting</h5>
            <p>"Chop, Boom, You're Gone" is the culmination of five months of reporting on the university's decision last December to eliminate seven non-revenue sports. This is an aggregation of previously published content. When possible, links to original stories are provided in text. All words, images and video are the work of The Temple News, unless otherwise noted.</p>
          </div>
          <div class="footer-credits">
            <div class="footer-credits-words">
              <h5>Words By</h5>
              <p>Steve Bohnel, Joey Cranney, Evan Cross, Joe Gilbride, Stephen Godwin Jr., Jerry Iannelli, Avery Maehrer, Don McDermott, Jeff Neiburg, Danielle Nelson, Andrew Parent and Nick Tricome</p>
            </div>
            <div class="footer-credits-image">
              <h5>Photos By</h5>
              <p>Jacob Colon, Daniel Craig, Avery Maehrer, Kara Milstein, Abi Reimold, Andrew Thayer, Alex Udowenko and Hua Zong</p>
              <h6>Courtesy Photos From</h6>
              <p>Templar Annual and Bradley Witting</p>
            </div>
            <div class="footer-credits-video">
              <h5>Videos By</h5>
              <p>Kimberly Leung, Avery Maehrer, Christina Morgeneier, Kate Reilly, Emily Rolen, Alex Snell, Sarah Sweigart, Dustin Wingate and Rachel Zerbe</p>
            </div>
            <div class="footer-credits-site">
              <h5>Produced By</h5>
              <p>Chris Montgomery, Patrick McCarthy and Rob DiRienzo</p>
            </div>
            <div class="footer-colophon">
            <h5>Colophon</h5>
              <p>Set in Adelle and Adelle Sans, via <a href="typekit.com">Typekit</a></p>
              <p>Built with <a href="http://wordpress.org/">WordPress</a>, <a href="http://aesopstoryengine.com/">Aesop Story Engine</a>, <a href="http://roots.io/starter-theme/">Roots</a>, <a href="http://roots.io/wordpress-stack/">Bedrock</a> and <a href="http://getbootstrap.com/">Bootstrap</a></p>
              <p>Hosted by <a href="digitalocean.com">DigitalOcean</a></p>
              <p><a href="https://github.com/TheTempleNews/chopboom/" title="ChopBoom on GitHub">View source code on GitHub</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </article>
<?php endwhile; ?>
