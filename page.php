<?php get_header(); ?>
  <section>
  <div class="container">
          <?php while ( have_posts() ) : the_post(); ?>
            <h1 id="nahoru"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; ?>
  </div>
  </section>
 <?php get_footer(); ?>