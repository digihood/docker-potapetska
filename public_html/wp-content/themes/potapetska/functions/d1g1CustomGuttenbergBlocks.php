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
            if (!function_exists('acf_register_block_type')) return;

            $blocks = array(
                array('hero', 'Hero sekce', 'Hlavní hero sekce s pozadím', 'cover-image', array('hero', 'úvod')),
                array('services', 'Služby', 'Grid služeb s kartami', 'grid-view', array('služby', 'services')),
                array('equipment', 'Technika & Půjčovna', 'Sekce s technikou a půjčovnou', 'hammer', array('technika', 'půjčovna')),
                array('about-us', 'O nás', 'Sekce o společnosti', 'groups', array('o nás', 'about')),
                array('references', 'Reference', 'Zobrazení posledních projektů', 'portfolio', array('reference', 'projekty')),
                array('contact', 'Kontakt', 'Kontaktní sekce z Options', 'email', array('kontakt', 'formulář')),
                array('partners', 'Partneři', 'Sekce partnerů z Options', 'networking', array('partneři', 'klienti')),
                array('service-section', 'Detail služby', 'Detailní popis služby', 'text-page', array('služba', 'detail')),
                array('reasons', 'Proč nás zvolit', 'Důvody pro výběr společnosti', 'star-filled', array('důvody', 'proč')),
                array('projects-select', 'Výběr projektů', 'Výběr konkrétních projektů', 'images-alt2', array('projekty', 'výběr')),
                array('other-services', 'Další služby', 'Grid dalších služeb', 'screenoptions', array('služby', 'další')),
                array('where-to-find-us', 'Kde nás najdete', 'Mapa s lokací', 'location-alt', array('mapa', 'lokace')),
                array('our-team', 'Náš tým', 'Zobrazení členů týmu', 'admin-users', array('tým', 'lidé')),
                array('centers', 'Střediska', 'Naše střediska', 'building', array('střediska', 'pobočky')),
            );

            foreach ($blocks as $block) {
                acf_register_block_type(array(
                    'name' => $block[0],
                    'title' => __($block[1], 'potapetska'),
                    'description' => __($block[2], 'potapetska'),
                    'render_template' => 'parts/block/' . $block[0] . '.php',
                    'category' => 'potapetska',
                    'icon' => $block[3],
                    'keywords' => $block[4],
                    'mode' => 'preview',
                    'supports' => array('align' => false),
                ));
            }
        }
    }
}
new d1g1CustomGuttenbergBlocks;
