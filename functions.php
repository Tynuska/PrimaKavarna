<?php
// vytvoření menu
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Hlavní Menu' ),
        'header-menu-bonus' => __( 'Bonusové Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );



