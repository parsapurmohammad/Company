<?php
if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
    add_image_size('img400-400',400,400,true,array('center','center'));
}