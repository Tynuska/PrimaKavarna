<?php get_header(); ?>
<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNKMGN8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container">
<div class="relative">
<h1>Výpis článků z rubriky: <?php echo '' . single_cat_title( '', false ) . ''; ?></h1>

<?php if ( have_posts() ) : ?>
  
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="blog">  
                <a class="obr-blog" href="<?php the_permalink(); ?>"><?php if (
                has_post_thumbnail() ) { the_post_thumbnail('full');} else {echo '<img
                src="'.get_template_directory_uri().'/img/no_image.png"
                alt="obrazek"/>';} ?></a>

                <div class="blogText">
  
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <span><i class="far fa-clock"></i> <?php the_time( get_option('date_format' ) ); ?></span>
                <span><i class="fas fa-tags"></i> <?php the_category(', '); ?></span>

                <?php the_excerpt(); ?>
                <a class="blogBtn" href="<?php the_permalink(); ?>">Přečíst</a>
                </div>       
        </div>
        <?php endwhile; ?>
        <span class="older" ><?php next_posts_link('Starší<i class="fas fa-arrow-circle-left"></i>'); ?></span>
            <span class="newer"><?php previous_posts_link('<i class="fas fa-arrow-circle-right"></i> Novější'); ?></span>
    
        <?php else : ?>
   
        <p><?php _e( 'Žádné články zatím nejsou k dispozici...' ); ?></p>
  
        <?php endif; ?>
</div>
</div>
<?php get_footer();
