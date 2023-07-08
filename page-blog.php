<?php
//Template Name: Blog
get_header();?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNKMGN8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


        <section>
            <div class="container">
                <div class="relative">
            <h2><?php the_title(); ?></h2>
             
                <?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                
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

         <?php wp_reset_query(); ?>
        </div>
        </div>
        </section>

<?php get_footer(); 

