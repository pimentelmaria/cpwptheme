<?php

function mp_enqueue_styles(){
    wp_enqueue_style('mp-style', get_template_directory_uri() . '/style.css', array('mp-bootstrap'), '1.0', 'all');
    wp_enqueue_style('mp-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('mp-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'mp_enqueue_styles');

?>

