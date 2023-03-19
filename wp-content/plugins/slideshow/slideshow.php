<?php
/*
Plugin Name: Slideshow
Plugin URI: http://www.joaoamado.dev/
Description: Plugin feito para a organização do slideshow da homepage
Version: 1.0
Author: João Amado
Author URI: http://www.joaoamado.dev/
*/
add_action( 'init', 'create_slideshow' );

function create_slideshow() {
    register_post_type( 'slideshow',
        array(
            'labels' => array(
                'name' => 'Slideshow',
                'singular_name' => 'Slide',
                'add_new' => 'Adicionar novo',
                'add_new_item' => 'Adicionar novo Slide',
                'edit' => 'Editar',
                'edit_item' => 'Editar Slide',
                'new_item' => 'Novo Slide',
                'view' => 'Ver',
                'view_item' => 'Ver Slide',
                'search_items' => 'Pesquisar Slide',
                'not_found' => 'Não foram encontrados Slides',
                'not_found_in_trash' => 'Não foram encontrados Slides na Lixeira',
                'parent' => 'Slide Pai(?)'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'custom-fields', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/slideshow.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


?>