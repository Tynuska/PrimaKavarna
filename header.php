<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kavarna</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styly.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css?family=Raleway:200,400,700,900&display=swap&subset=latin-ext" rel="stylesheet">
</head>
<body>

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
                    <a href="https://Facebook.com/PrimaKavarna" target="_blank"> <i class="fab fa-facebook" ></i></a>
                    <a href="https://instagram.com" target="_blank"> <i class="fab fa-instagram"></i></a> 
                </div>
            </div>                    
        </div>

        <div class="headerMenu">
            <div class="container">
                <a class="logo"  href="#" ></a>
                <div class="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 
                </div>
            </div>
        </div>

        <div class="slogan">
            <div class="container">
                <p>Netradiční kavárna,kde</p>
                <p>najdeš mnohem více než jen</p>
                <p>výběrovou kávu a dezerty.</p>
                <a href="#">
                    <i class="fas fa-angle-double-right"> </i>
                    Speciální nabídka
                </a>               
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