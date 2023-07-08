<?php get_header();
//Template Name: Obecná šablona 
?>


<div class="obec">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
</div>

 <?php get_footer(); ?>

