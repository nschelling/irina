<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );


    $data = new stdclass();
    $data->post_title = "Start";
    $data->template = 'index'; // the template name to be read by frnt
    $data->posts = array();

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $post_item = new stdclass();
            $post_item->post_title = $post->post_title;
            $post_item->permalink = get_permalink($post->ID);
            array_push($data->posts, $post_item);
        }
    }

    header("content-type: application/json");
    echo json_encode($data);