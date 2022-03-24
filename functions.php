<?php
require_once 'lib/classes/nav-walker-bs5.php';
require_once 'lib/setup.php';
require_once 'lib/assets.php';
require_once 'lib/navigation.php';
require_once 'lib/helpers.php';
// require_once 'lib/language/translation.php'; // translation - uncomment if needed


function register_menus() {
  register_nav_menus( [
      'main-menu' => esc_html__( 'Main Menu', 'test' ),
    ]);
}
add_action( 'init', 'register_menus' );