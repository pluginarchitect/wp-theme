<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <div class="nav--main">
      <?php
      wp_nav_menu( array(
          'theme_location'  => 'primary',
          'menu_class'      => 'primary-menu',
          'container'       => 'nav',
          'container_class' => 'container nav',
      ) );
      ?>
    </div>
<?php endif; ?>
