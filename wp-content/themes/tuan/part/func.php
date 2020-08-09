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


function get_logo(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    echo $image[0];
}

function resize_image($url , $size = []){
    $media_url = str_replace(home_url('wp-content/uploads') . '/','',$url);
    if(!isset($size[0]) || !isset($size[1])){
        return home_url('wp-content/uploads/').$media_url;
    }
    $img_url = home_url('wp-content/uploads/vthumb.php?src='.$media_url.'&size='.$size[0].'x'.$size[1].'&zoom=1&q=90');
    return $img_url;
}

function getImageID($post , $size = "full"){
    return get_the_post_thumbnail_url($post, $size);
}
function staticInfo($key,$img = false){
    if(!$img){
        return get_post_meta(39,$key,TRUE);
    }
    return wp_get_attachment_image_url(get_post_meta(39,$key,TRUE),'full');
}