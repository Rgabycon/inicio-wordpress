<?php

//aqui van todas mis funcionalidades adicionales del template

function cargar_estilos(){
    // Que estilo se va a cargar
    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css',null,'1.1');
}

add_action('wp_enqueue_scripts','cargar_estilos');