<?php 
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
get_header();
?>    
   
 <header class="singleblog" style="background: url(<?php echo $thumbnail[0]; ?>);">

        <div class="topLine">
            <div class="container">
                <span>
                    <i class="fas fa-phone fa-rotate-90"></i> 
                    <a href="tel: +420 606 123 456"> +420 123 456 </a>
                </span>
                <span>
                    <i class="fas fa-globe-americas"></i> <a href="https://goo.gl/maps/o3rV3ftJqcq5Heno6" target="_blank"> Jablonského 2, Praha </a>
                </span>
                <span class="openTime">
                    <i class="far fa-clock"></i> Otevřeno: Po-Pá: 8h - 20h
                </span>

                <div class="topLineSoc">
                    <a href="https://Facebook.com/PrimaKavarna" target="_blank"> <i class="fab fa-facebook" ></i></a>
                    <a href="https://instagram.com" target="_blank"> <i class="fab fa-instagram"></i></a> 

                    <ul class="prihlaseni">
                        <?php
                            if ( is_user_logged_in() ) {
                                global $current_user; get_currentuserinfo();
                                    echo "<li>". $current_user->display_name ."</li>";?>

                                    <li class="skryt_mob">
                                        <?php wp_loginout( home_url( '' ) ); ?>
                                    </li>

                            <?php } else { ?>

                                    <li>
                                        <a href="/login">Login</a>
                                    </li>
                                    <li>
                                        <a href="/registrace">Registrace</a>
                                    </li>
                            <?php }
                        ?>
                    </ul>                  
                </div>
            </div>                    
        </div>

        <div class="headerMenu">
            <div class="container">
                <a class=""  href="<?php echo get_option('home'); ?>/" ></a>
                <div class="menu">                

                <?php if ( is_user_logged_in() ) {?>
                    <ul>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                                'container' => '',
                                'items_wrap' => '%3$s'
                        ) ); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu-bonus',
                                'container' => '',
                                'items_wrap' => '%3$s'
                        ) ); ?>                                                 
                    </ul>

                    <?php } else { ?>

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

                    <?php }?>                                
                 </div>

                    <!-- hamburger-->
                    <div class="mmenu-menu">
                    <?php if ( is_user_logged_in() ) {?>
                        <ul>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                                'container' => '',
                                'items_wrap' => '%3$s'
                        ) ); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu-bonus',
                                'container' => '',
                                'items_wrap' => '%3$s'
                        ) ); ?>
                        </ul>

                    <?php } else { ?>

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    <?php }?>
			</div>
            
			<div id="mmenu" class="mmenu-icon-wrapper">
				<span class="mmenu-icon"></span>
			</div>
    <!--  konec hamburgeru-->
f            </div>
        </div>
</header>
