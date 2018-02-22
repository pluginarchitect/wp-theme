<?php
/**
 * The main template file
 */
get_header(); ?>

<main>

  <section class="">
    <div class="container">
      <p class="shoutout">
        Plugin Architect is a curated resource for developers with an emphasis on <a href="#featured"><em>real&nbsp;world&nbsp;examples</em></a>.
      </p>
    </div>
  </section>

  <!-- @TODO Make topics section dynamic. -->
  <section class="topic-grid--section container">

     <h2 class="topic-grid--title">WordPress Development Topics</h2>

     <div class="topic-grid">

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-bolt"></i>
           </div>
           <h3 class="topic-title">AMP Project</h3>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-th-large"></i>
           </div>
           <h3 class="topic-title">Block Editor</h3>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-terminal"></i>
           </div>
           <h3 class="topic-title">WP-CLI</h3>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-bullhorn"></i>
           </div>
           <h3 class="topic-title">Foo</h3>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-bug"></i>
           </div>
           <h2 class="topic-title">Bar</h2>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-shopping-cart"></i>
           </div>
           <h3 class="topic-title">Baz</h3>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-bullhorn"></i>
           </div>
           <h3 class="topic-title">Foo</h3>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-bug"></i>
           </div>
           <h2 class="topic-title">Bar</h2>
        </a>

        <a href="#" class="topic">
           <div class="topic--icon">
              <i class="fas fa-shopping-cart"></i>
           </div>
           <h3 class="topic-title">Baz</h3>
        </a>

     </div>
  </section>

  <!-- @TODO Make featured plugins dynamic. -->
  <section id="featured" class="features">
     <div class="container">
        <h2 class="features--title">Featured Plugins</h2>

        <div class="feature">
           <img class="feature--image"
                src="https://plugins.svn.wordpress.org/ninja-forms/assets/icon-256x256.png" alt="" />
           <div class="feature--description">
              <h2 class="feature--title">Ninja Forms</h2>
              Drag and drop fields in an intuitive UI to create contact forms, email subscription forms, order forms, payment forms, send emails and more!
           </div>
        </div>

        <div class="feature">
           <img class="feature--image"
                src="https://plugins.svn.wordpress.org/easy-digital-downloads/assets/icon-256x256.png" alt="" />
           <div class="feature--description">
              <h2 class="feature--title">Easy Digital Downloads</h2>
              The easiest way to sell digital products with WordPress.
           </div>
        </div>

        <div class="feature">
           <img class="feature--image"
                src="https://plugins.svn.wordpress.org/wp-migrate-db/assets/icon-256x256.jpg" alt="" />
           <div class="feature--description">
              <h2 class="feature--title">WP Migrate DB</h2>
              Migrates your database by running find & replace on URLs and file paths, handling serialized data, and saving an SQL file.
           </div>
        </div>

        <div class="feature">
           <img class="feature--image"
                src="https://plugins.svn.wordpress.org/social-warfare/assets/icon-256x256.jpg" alt="" />
           <div class="feature--description">
              <h2 class="feature--title">Social Warfare</h2>
              The most beautiful, lightning fast social media sharing buttons built to boost shares and drive more traffic without slowing down your site.
           </div>
        </div>

        <div class="feature">
           <img class="feature--image"
                src="https://plugins.svn.wordpress.org/event-notifier/assets/icon-256x256.png" alt="" />
           <div class="feature--description">
              <h2 class="feature--title">Event Notifier</h2>
              Send notifications when WordPress hooks are fired.
           </div>
        </div>

     </div>
  </section>

</main>

<?php get_footer(); ?>
