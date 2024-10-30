<?php
/*
Plugin Name: Jetpack Post Statistics Link
Plugin URI: http://www.homedev.com.au/WordPress/JetPackPostStatsLink
Description: Adds a custom column to the "Posts" and "Pages" Admin pages that provides a link to the JetPack Statistics for each item.
Version: 1.3.1
Author: HomeDev
Author URI: http://www.homedev.com.au
License:

    Copyright 2011  HomeDev -   (email : info@homedev.com.au)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Setup style
add_action('admin_init', 'homedev_jetpack_post_stats_add_style');

// add the custom columns
add_filter('manage_posts_columns', 'homedev_jetpack_post_stats_column');
add_filter('manage_pages_columns', 'homedev_jetpack_page_stats_column');


// Hook to manage the data in each column row
add_action('manage_posts_custom_column', 'homedev_jetpack_post_stats_render_row', 10, 2);
add_action('manage_pages_custom_column', 'homedev_jetpack_page_stats_render_row', 10, 2);

// Method to set the name of the column
function homedev_jetpack_post_stats_column($defaults) {
    $defaults['homedev_jetpack_post_stats'] = __('Stats');
    return $defaults;
}

// Pages
function homedev_jetpack_page_stats_column($defaults) {
    $defaults['homedev_jetpack_page_stats'] = __('Stats');
    return $defaults;
}

function homedev_jetpack_post_stats_add_style() {
    $myStyleUrl = plugins_url( basename( dirname( __FILE__ ) ) . '/style.css' );
    wp_enqueue_style('homdevJetpackPostStatsStyle', $myStyleUrl,  false, false, 'all');
}

// Render the details of the row
function homedev_jetpack_post_stats_render_row($column_name, $id){

     if( $column_name == 'homedev_jetpack_post_stats' ) {
        $path = get_bloginfo('wpurl');
        $imgurl = 'http://dashboard.wordpress.com/i/stats-icon.png';
        $url =  $path . '/wp-admin/admin.php?page=stats&view=post&post=' . $id;
        $new_url = '<a href="' . $url . '"><img src="' . $imgurl . '" border="0" /></a>';

        echo $new_url;
    }
}

// Render the details of the row
function homedev_jetpack_page_stats_render_row($column_name, $id){

     if( $column_name == 'homedev_jetpack_page_stats' ) {
        $path = get_bloginfo('wpurl');
        $imgurl = 'http://dashboard.wordpress.com/i/stats-icon.png';
        $url =  $path . '/wp-admin/admin.php?page=stats&view=post&post=' . $id;
        $new_url = '<a href="' . $url . '"><img src="' . $imgurl . '" border="0" /></a>';

        echo $new_url;
    }
}
?>