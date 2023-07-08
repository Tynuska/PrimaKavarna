<header>

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
                <a href="https://Facebook.com/PrimaKavarna" target="_blank"> <i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"> <i class="fab fa-instagram"></i></a>

                <ul class="prihlaseni">
                    <?php
                    if (is_user_logged_in()) {
                        global $current_user;
                        get_currentuserinfo();
                        echo "<li>" . $current_user->display_name . "</li>"; ?>

                        <li class="skryt_mob">
                            <?php wp_loginout(home_url('')); ?>
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
            <a class="logo" href="<?php echo get_option('home'); ?>/"></a>
            <div class="menu">

                <?php if (is_user_logged_in()) { ?>

                    <ul>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => '',
                            'items_wrap' => '%3$s'
                        )); ?>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu-bonus',
                            'container' => '',
                            'items_wrap' => '%3$s'
                        )); ?>
                    </ul>

                <?php } else { ?>

                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

                <?php } ?>

            </div>

            <!-- hamburger-->
            <div class="mmenu-menu">
                <?php if (is_user_logged_in()) { ?>

                    <ul>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => '',
                            'items_wrap' => '%3$s'
                        )); ?>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu-bonus',
                            'container' => '',
                            'items_wrap' => '%3$s'
                        )); ?>
                    </ul>

                <?php } else { ?>

                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

                <?php } ?>
            </div>

            <div id="mmenu" class="mmenu-icon-wrapper">
                <span class="mmenu-icon"></span>
            </div>
            <!--  konec hamburgeru-->

        </div>
    </div>

    <div class="slogan">
        <div class="container">
            <p>Netradiční kavárna,kde</p>
            <p>najdeš mnohem více než jen</p>
            <p>výběrovou kávu a dezerty.</p>
            <!-- <a href="<?php echo get_option('home'); ?>/zmrzlina">
                <i class="fas fa-angle-double-right"> </i>
                Speciální nabídka
            </a> -->
        </div>
    </div>

    <div class="headerLine">
        <div class="container">
            <div class="tym">
                <p><b>Dnes Vás přivítá tým:</b></p>
                <p><b>René, Radek, Radka,Renata</b></p>

            </div>
            <div class="kava">
                <p><b>Práve podáváme kávu:</b></p>
                <p><b>z Guatemaly a Kostariky. </b></p>
            </div>
        </div>
    </div>
</header>
