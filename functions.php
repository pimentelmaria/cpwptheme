<?php

function mp_register_styles(){
    wp-enqueue_style('mp-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'mp_register_styles');

?>