<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

/**
* ACF Options Page
**/

if (function_exists('acf_add_options_page')) {
    $site_settings = acf_add_options_page([
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'site-general-settings',
        'capability' => 'administrator',
        'redirect' => false,
        'position' => 33
    ]);

    acf_add_options_sub_page([
        'page_title' => __('Banner'),
        'menu_title' => __('Banner'),
        'parent_slug' => $site_settings['menu_slug']
    ]);

    acf_add_options_sub_page([
        'page_title' => __('Header'),
        'menu_title' => __('Header'),
        'parent_slug' => $site_settings['menu_slug']
    ]);

    acf_add_options_sub_page([
        'page_title' => __('Footer'),
        'menu_title' => __('Footer'),
        'parent_slug' => $site_settings['menu_slug']
    ]);
}

/**
* Add ACF Blocks to Gutenberg
**/

function my_acf_block_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 ) {
    $slug = str_replace('acf/', '', $block['name']);
    $block = array_merge(['className' => ''], $block);
    $block['post_id'] = $post_id;
    $block['slug'] = $slug;
    $block['classes'] = implode(' ', [$block['slug'], $block['className'], $block['align']]);
    echo \App\template("blocks/${slug}", ['block' => $block]);
}

add_action('acf/init', function() {
    if( function_exists('acf_register_block') ) {
        // Look into views/blocks
        $dir = new \DirectoryIterator(locate_template("views/blocks/"));
        // Loop through found blocks
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot() && ($fileinfo->getExtension() == 'php')) {
                $slug = str_replace('.blade.php', '', $fileinfo->getFilename());
                // Get infos from file
                $file_path = locate_template("views/blocks/${slug}.blade.php");
                $file_headers = get_file_data($file_path, [
                    'title' => 'Title',
                    'description' => 'Description',
                    'category' => 'Category',
                    'icon' => 'Icon',
                    'keywords' => 'Keywords',
                ]);
                if( empty($file_headers['title']) ) {
                    die( _e('The Block "'. $slug .'" needs a title: ' . $file_path));
                }
                if( empty($file_headers['category']) ) {
                    die( _e('The Block "'. $slug .'" needs a category: ' . $file_path));
                }
                // Register a new block
                $datas = [
                    'name' => $slug,
                    'title' => $file_headers['title'],
                    'description' => $file_headers['description'],
                    'category' => $file_headers['category'],
                    'icon' => $file_headers['icon'],
                    'keywords' => explode(' ', $file_headers['keywords']),
                    'render_callback'  => 'my_acf_block_render_callback',
                    'supports' => [ 'align' => [ 'wide', 'full' ] ],
                    'align' => 'full'
                ];
                acf_register_block($datas);
            }
        }
    }
});

/* Custom Post Type: Locations */

$location_labels = array(
    'name' => _x('Locations', 'Locations'),
    'singular_name' => _x('Location', 'Locations'),
    'add_new' => _x('Add New', 'location'),
    'add_new_item' => __('Add New Location'),
    'edit_item' => __('Edit Location'),
    'new_item' => __('New Location'),
    'view_item' => __('View Location'),
    'view_items' => __('View Locations'),
    'search_items' => __('Search Locations'),
    'not_found' => __('No Locations found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => '',
    'featured_image' => __( 'Featured Image' ),
    'set_featured_image' => __( 'Set Featured Image' ),
    'remove_featured_image' => __( 'Remove Featured Image' ),
    'use_featured_image' => __( 'Use as Featured Image' )
);

$location_args = array(
    'labels' => $location_labels,
    'menu_icon' => 'dashicons-book',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    // 'menu_position' => 4,
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'locations', 'with_front' => false),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'author', 'excerpt', 'thumbnail', 'revisions')
);

register_post_type('location', $location_args);
