<?php
function lebari_theme_assets() {
    wp_enqueue_style('glory-fonts', 'https://fonts.googleapis.com/css2?family=Glory:wght@100;300;400;500;600;700;800&family=Lato:wght@100;300;400;700;900&display=swap');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    wp_enqueue_style('mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('animation', get_template_directory_uri() . '/assets/css/animation.css');
    wp_enqueue_style('custom-animate', get_template_directory_uri() . '/assets/css/custom-animate.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('hover', get_template_directory_uri() . '/assets/css/hover.css');
    wp_enqueue_style('bootstrap-touchspin', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

    wp_enqueue_script('jquery');

    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), null, true);
    wp_enqueue_script('mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), null, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/appear.js', array('jquery'), null, true);
    wp_enqueue_script('nav-tool', get_template_directory_uri() . '/assets/js/nav-tool.js', array('jquery'), null, true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), null, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), null, true);
    wp_enqueue_script('tilt', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'lebari_theme_assets');