<?php get_header(); ?>
<div class="singlePost">
<div class="container">
<?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>

      <div class="singleIkony">
      <span><i class="far fa-clock"></i> <?php the_time( get_option('date_format' ) ); ?></span>
        <span><i class="fas fa-tags"></i> <?php the_category(', '); ?></span>
    </div>  

      <?php the_content(); ?>
      <div class="fb-comments" data-href="http://student1.primawebovky.cz/" data-width="100%" data-numposts="5"></div>
      <a class="blogBtn" href="<?php echo get_option('home'); ?>/blog">Zpět na blog</a>
    <?php endwhile; ?>
</div>
</div>

 <?php get_footer(); ?> 