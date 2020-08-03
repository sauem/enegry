<?php

function prinf($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

function add_category_parent_css($css_classes, $category, $depth, $args){
    if($args['has_children']){
        $css_classes[] = 'cat-item';
    }
    return $css_classes;
}

add_filter( 'category_css_class', 'add_category_parent_css', 10, 4);