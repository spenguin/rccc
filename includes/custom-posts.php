<?php

namespace CustomPosts;

use WP_Query;

\CustomPosts\initialize();

function initialize()
{
    add_action('init', '\CustomPosts\custom_post_type', 0);
    add_action('admin_init', '\CustomPosts\admin_init');
    add_action('init', '\CustomPosts\custom_taxonomy_type', 0);


    add_action('save_post_exhibitor', '\CustomPosts\save_twitter_handle');
    add_action('save_post_exhibitor', '\CustomPosts\save_instagram_handle');
    add_action('save_post_exhibitor', '\CustomPosts\save_tiktok_handle');
    add_action('save_post_exhibitor', '\CustomPosts\save_facebook_handle');
    add_action('save_post_exhibitor', '\CustomPosts\save_linktree_url');
    add_action('save_post_exhibitor', '\CustomPosts\save_website');    
    // add_action('admin_init', '\CustomPosts\admin_init');   
    
    // add_action('save_post_market', '\CustomPosts\save_market_location' );
    // add_action('save_post_market', '\CustomPosts\save_date_time' );
    // add_action('save_post_recipe', '\CustomPosts\save_featured_recipe' );
}

function custom_post_type()
{
    // Set UI labels for Custom Post Type Market
    $labels = array(
        'name'                => _x('Panels', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Panel', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Panels', 'rcc'),
        'parent_item_colon'   => __('Parent Panel', 'rcc'),
        'all_items'           => __('All Panels', 'rcc'),
        'view_item'           => __('View Panel', 'rcc'),
        'add_new_item'        => __('Add New Panel', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Panel', 'rcc'),
        'update_item'         => __('Update Panel', 'rcc'),
        'search_items'        => __('Search Panel', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('panel', 'rcc'),
        'description'         => __('Panels listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        // 'supports'            => array('title' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('seasons'),
        'rewrite' => array('slug' => 'panel' ),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('panel', $args); 

    // Set UI labels for Custom Post Type Poster
    $labels = array(
        'name'                => _x('Posters', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Poster', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Posters', 'rcc'),
        'parent_item_colon'   => __('Parent Poster', 'rcc'),
        'all_items'           => __('All Posters', 'rcc'),
        'view_item'           => __('View Poster', 'rcc'),
        'add_new_item'        => __('Add New Poster', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Poster', 'rcc'),
        'update_item'         => __('Update Poster', 'rcc'),
        'search_items'        => __('Search Poster', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('poster', 'rcc'),
        'description'         => __('Posters listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('seasons'),
        'rewrite' => array('slug' => 'poster' ),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('poster', $args);   
    
    // Set UI labels for Custom Post Type Exhibitor
    $labels = array(
        'name'                => _x('Exhibitors', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Exhibitor', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Exhibitors', 'rcc'),
        'parent_item_colon'   => __('Parent Exhibitor', 'rcc'),
        'all_items'           => __('All Exhibitors', 'rcc'),
        'view_item'           => __('View Exhibitor', 'rcc'),
        'add_new_item'        => __('Add New Exhibitor', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Exhibitor', 'rcc'),
        'update_item'         => __('Update Exhibitor', 'rcc'),
        'search_items'        => __('Search Exhibitor', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('exhibitor', 'rcc'),
        'description'         => __('Exhibitors listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('line'),
        'rewrite' => array('slug' => 'exhibitor', 'with_front' => false),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('exhibitor', $args);    
}

function custom_taxonomy_type()
{
    register_taxonomy(
        'capacity',
        'exhibitor',
        array(
            'labels'    => array(
                'name'  => 'Capacity',
                'add_new_item'  => 'Add New Capacity',
                'new_item_name' => 'New Capacity'
            ),
            'show_ui'   => TRUE,
            'show_tagcloud' => FALSE,
            'hierarchical'  => TRUE
        )
    );
}

/**
 * Custom Fields in Posts
 */
function admin_init()
{
    add_meta_box('twitter_handle_meta', 'Twitter handle', '\CustomPosts\twitter_handle', 'exhibitor', 'side');
    add_meta_box('instagram_handle_meta', 'Instagram handle', '\CustomPosts\instagram_handle', 'exhibitor', 'side');
    add_meta_box('tiktok_handle_meta', 'Tiktok handle', '\CustomPosts\tiktok_handle', 'exhibitor', 'side');
    add_meta_box('facebook_handle_meta', 'Facebook handle', '\CustomPosts\facebook_handle', 'exhibitor', 'side');
    add_meta_box('linktree_url_meta', 'Linktree URL', '\CustomPosts\linktree_url', 'exhibitor', 'side');
    add_meta_box('website_meta', 'Website', '\CustomPosts\website', 'exhibitor', 'side');
}

function twitter_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $twitter_handle = (isset($custom['twitter_handle'][0])) ? $custom['twitter_handle'][0] : '';
?>
    <label for="twitter_handle">Twitter Handle:</label>
    <input type="text" name="twitter_handle" value="<?php echo $twitter_handle; ?>" />
<?php
}

function save_twitter_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $twitter_handle = isset( $_POST['twitter_handle'] ) ? $_POST['twitter_handle'] : '';

    update_post_meta($post->ID, 'twitter_handle', $twitter_handle);
}

function instagram_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $instagram_handle = (isset($custom['instagram_handle'][0])) ? $custom['instagram_handle'][0] : '';
?>
    <label for="instagram_handle">Instagram Handle:</label>
    <input type="text" name="instagram_handle" value="<?php echo $instagram_handle; ?>" />
<?php
}

function save_instagram_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $instagram_handle = isset( $_POST['instagram_handle'] ) ? $_POST['instagram_handle'] : '';

    update_post_meta($post->ID, 'instagram_handle', $instagram_handle);
}

function tiktok_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $tiktok_handle = (isset($custom['tiktok_handle'][0])) ? $custom['tiktok_handle'][0] : '';
?>
    <label for="tiktok_handle">Tiktok Handle:</label>
    <input type="text" name="tiktok_handle" value="<?php echo $tiktok_handle; ?>" />
<?php
}

function save_tiktok_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $tiktok_handle = isset( $_POST['tiktok_handle'] ) ? $_POST['tiktok_handle'] : '';

    update_post_meta($post->ID, 'tiktok_handle', $tiktok_handle);
}

function facebook_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $facebook_handle = (isset($custom['facebook_handle'][0])) ? $custom['facebook_handle'][0] : '';
?>
    <label for="facebook_handle">Facebook Handle:</label>
    <input type="text" name="facebook_handle" value="<?php echo $facebook_handle; ?>" />
<?php
}

function save_facebook_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $facebook_handle = isset( $_POST['facebook_handle'] ) ? $_POST['facebook_handle'] : '';

    update_post_meta($post->ID, 'facebook_handle', $facebook_handle);
}

function linktree_url()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $linktree_url = (isset($custom['linktree_url'][0])) ? $custom['linktree_url'][0] : '';
?>
    <label for="linktree_url">Linktree url:</label>
    <input type="text" name="linktree_url" value="<?php echo $linktree_url; ?>" />
<?php
}

function save_linktree_url()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $linktree_url = isset( $_POST['linktree_url'] ) ? $_POST['linktree_url'] : '';

    update_post_meta($post->ID, 'linktree_url', $linktree_url);
}

function website()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $website = (isset($custom['website'][0])) ? $custom['website'][0] : '';
?>
    <label for="website">Website:</label>
    <input type="text" name="website" value="<?php echo $website; ?>" />
<?php
}

function save_website()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $website = isset( $_POST['website'] ) ? $_POST['website'] : '';

    update_post_meta($post->ID, 'website', $website);
}