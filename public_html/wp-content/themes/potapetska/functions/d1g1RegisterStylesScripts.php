<?php
if (!defined('ABSPATH')) exit;

if (!class_exists('d1g1RegisterStylesScripts')) {
    class d1g1RegisterStylesScripts {
        private $styles_directory = '/assets-minified/styles';
        private $scripts_directory = '/assets-minified/scripts';

        public function __construct() {
            if (defined('VITE_DEVELOPMENT') && VITE_DEVELOPMENT === true) {
                $this->styles_directory = '/assets/styles';
                $this->scripts_directory = '/assets/scripts/js';
            }
            add_action('wp_enqueue_scripts', [$this, 'register_styles_scripts']);
            add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_scripts']);
            add_action('wp_enqueue_scripts', [$this, 'dequeue_scripts'], 100);
        }

        function register_styles_scripts() {
            // Main CSS (production only - in dev, Vite handles it)
            if (!defined('VITE_DEVELOPMENT') || VITE_DEVELOPMENT !== true) {
                wp_enqueue_style('main-css', get_template_directory_uri() . $this->styles_directory . '/style.css', array(), filemtime(get_stylesheet_directory() . $this->styles_directory . '/style.css'));
            }

            // Fonts
            wp_enqueue_style('fonts', get_template_directory_uri() . $this->styles_directory . '/fonts.css', array());

            // Main JS
            $app_path = get_stylesheet_directory() . $this->scripts_directory . '/app.js';
            if (file_exists($app_path)) {
                wp_enqueue_script('potapetska-app', get_template_directory_uri() . $this->scripts_directory . '/app.js', array(), filemtime($app_path), true);
            }

            // Tailwind intersect observer
            $observer_path = get_stylesheet_directory() . '/node_modules/tailwindcss-intersect/dist/observer.min.js';
            if (file_exists($observer_path)) {
                wp_enqueue_script('tailwind-observer', get_stylesheet_directory_uri() . '/node_modules/tailwindcss-intersect/dist/observer.min.js', array(), filemtime($observer_path), true);
            }

            // Localize script
            wp_localize_script('potapetska-app', 'potapetska', array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'home_url' => home_url(),
                'theme_url' => get_stylesheet_directory_uri(),
            ));

            // Google Maps (conditional)
            if (defined('MAP_API_KEY') && MAP_API_KEY) {
                wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . MAP_API_KEY . '&callback=Function.prototype', array(), null, true);
            }
        }

        function enqueue_admin_scripts() {
            $admin_css = get_stylesheet_directory() . '/assets-minified/styles/admin.css';
            if (file_exists($admin_css)) {
                wp_enqueue_style('admin-css', get_template_directory_uri() . '/assets-minified/styles/admin.css', array(), filemtime($admin_css));
            }
        }

        function dequeue_scripts() {
            wp_dequeue_style('wp-block-library');
            wp_deregister_script('wp-embed');
        }
    }
}
new d1g1RegisterStylesScripts;
