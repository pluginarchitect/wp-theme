
</div>

<div class="newsletter-signup">
   <div class="container">
      <h2>Join Our Newsletter</h2>

      <p>Because we send you all kinds of good stuff, or at least that's what we'd like to think.</p>

      <!-- @TODO Implement form solution. -->
      <form class="newsletter-signup--form" style="opacity:.5;">
         <input type="email" placeholder="Email Address" disabled="disabled">
         <input type="submit" value="Go!" disabled="disabled">
      </form>

      <p class="newsletter-signup--thanks">
         Thanks for subscribing!
      </p>
   </div>
</div>

<footer class="site-footer">
   <div class="container">
      <div class="site-footer--copywrite">&copy; 2018 <?php echo get_bloginfo( 'name' ); ?></div>
      <!-- <?php //echo get_bloginfo( 'description' ); ?> -->
      <div class="site-footer--links">
         <!-- @TODO Make menu name dynamic. -->
         <strong class="site-footer--title">Site</strong>
         <?php
         wp_nav_menu( array(
             'theme_location'  => 'secondary',
         ) );
         ?>
      </div>
      <div class="site-footer--links">
         <!-- @TODO Make menu name dynamic. -->
         <strong class="site-footer--title">Topics</strong>
         <?php
         wp_nav_menu( array(
             'theme_location'  => 'tertiary',
         ) );
         ?>
      </div>
      <div class="site-footer--links">
         <!-- @TODO Make menu name dynamic. -->
         <strong class="site-footer--title">Connect</strong>
         <?php
         wp_nav_menu( array(
             'theme_location'  => 'social',
         ) );
         ?>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
