<div class="container">
<?php while ( have_posts() ) : the_post(); ?>
    <!-- @TODO Add more styling for blog post loop. -->
    <div class="loop-post-single">
        <a href="<?php esc_url( the_permalink() ); ?>">
            <h2 class="loop-post-title"><?php the_title(); ?></h2>
        </a>
        <p>
          <?php the_excerpt(); ?>
        </p>
    </div>
<?php endwhile; ?>
</div>
