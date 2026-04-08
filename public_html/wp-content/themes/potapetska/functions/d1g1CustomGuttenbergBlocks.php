<?php
if (!defined('ABSPATH')) exit;

if (!class_exists('d1g1CustomGuttenbergBlocks')) {
    class d1g1CustomGuttenbergBlocks {
        public function __construct() {
            add_action('acf/init', [$this, 'register_blocks']);
            add_filter('block_categories_all', [$this, 'register_block_category']);
        }

        function register_block_category($categories) {
            return array_merge(
                array(array(
                    'slug' => 'potapetska',
                    'title' => __('Potápěčská', 'potapetska'),
                )),
                $categories
            );
        }

        function register_blocks() {
            $blocks_dir = get_template_directory() . '/blocks';

            foreach (glob($blocks_dir . '/*/block.json') as $block_json) {
                register_block_type(dirname($block_json));
            }
        }
    }
}
new d1g1CustomGuttenbergBlocks;
