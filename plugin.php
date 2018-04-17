<?php
/*
Plugin Name: FooBox Disable Rocketship
Description: Disable Cloudfare's Rocketship specifically for FooBox
Version: 0.0.1
Author: FooPlugins
Author URI: http://fooplugins.com
License: GPL3

function foobox_disable_rocketship( $tag, $handle, $src ) {
    if ( 'foobox-min' === $handle ) {
        $tag = str_replace( 'src=', 'data-cfasync="false" src=', $tag );
    }
    return $tag;
}

add_filter( 'script_loader_tag', 'foobox_disable_rocketship', 10, 3 );
