<?php

function mp_enqueue_styles(){

    $version = wp_get_theme()->get( 'Version');
    wp_enqueue_style('mp-style', get_template_directory_uri() . '/style.css', array('mp-bootstrap'), $version, 'all');
    wp_enqueue_style('mp-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('mp-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'mp_enqueue_styles');

function mp_enqueue_scripts(){

    wp_enqueue_script('mp-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('mp-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('mp-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6', array(), '3.4.1', true);
    wp_enqueue_script('mp-main', get_template_directory_uri() . '/assets/js/main.js', array(), '3.4.1', true);
}

add_action('wp_enqueue_scripts', 'mp_enqueue_scripts');

?>

