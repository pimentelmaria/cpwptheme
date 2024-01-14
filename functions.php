<?php

function mp_register_styles(){
    wp-enqueue_style('mp-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp-enqueue_style('mp-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" , array(), '1.0', 'all');
    wp-enqueue_style('mp-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'mp_register_styles');

?>