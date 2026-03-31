<?php
if (!defined('ABSPATH')) exit;

if (!class_exists('d1g1RegisterCustomPostTypes')) {
    class d1g1RegisterCustomPostTypes {
        public function __construct() {
            add_action('init', [$this, 'register_projekt_cpt']);
            add_action('init', [$this, 'register_team_cpt']);
            add_action('init', [$this, 'create_projekt_taxonomies']);
        }

        function register_projekt_cpt() {
            register_post_type('projekt', array(
                'labels' => array(
                    'name' => __('Projekty', 'potapetska'),
                    'singular_name' => __('Projekt', 'potapetska'),
                    'add_new' => __('Přidat projekt', 'potapetska'),
                    'add_new_item' => __('Přidat nový projekt', 'potapetska'),
                    'edit_item' => __('Upravit projekt', 'potapetska'),
                    'view_item' => __('Zobrazit projekt', 'potapetska'),
                    'all_items' => __('Všechny projekty', 'potapetska'),
                    'menu_name' => __('Projekty', 'potapetska'),
                ),
                'public' => true,
                'menu_icon' => 'dashicons-portfolio',
                'menu_position' => 57,
                'has_archive' => true,
                'show_in_rest' => true,
                'rewrite' => array('slug' => 'projekt'),
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            ));
        }

        function register_team_cpt() {
            register_post_type('team', array(
                'labels' => array(
                    'name' => __('Tým', 'potapetska'),
                    'singular_name' => __('Člen týmu', 'potapetska'),
                    'add_new' => __('Přidat člena', 'potapetska'),
                    'add_new_item' => __('Přidat nového člena', 'potapetska'),
                    'edit_item' => __('Upravit člena', 'potapetska'),
                    'all_items' => __('Všichni členové', 'potapetska'),
                    'menu_name' => __('Tým', 'potapetska'),
                ),
                'public' => false,
                'show_ui' => true,
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-groups',
                'menu_position' => 58,
                'supports' => array('title', 'thumbnail'),
            ));
        }

        function create_projekt_taxonomies() {
            register_taxonomy('projekt_type', 'projekt', array(
                'label' => __('Typ projektu', 'potapetska'),
                'rewrite' => array('slug' => 'typ-projektu'),
                'hierarchical' => true,
                'show_in_rest' => true,
            ));
        }
    }
}
new d1g1RegisterCustomPostTypes;
