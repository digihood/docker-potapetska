<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_hero',
        'title' => 'Blok: Hero sekce',
        'fields' => array(
            array('key' => 'field_hero_badge_text', 'label' => 'Badge text', 'name' => 'hero_badge_text', 'type' => 'text'),
            array('key' => 'field_hero_headline_1', 'label' => 'Nadpis - řádek 1', 'name' => 'hero_headline_1', 'type' => 'text'),
            array('key' => 'field_hero_headline_2', 'label' => 'Nadpis - řádek 2 (žlutý)', 'name' => 'hero_headline_2', 'type' => 'text'),
            array('key' => 'field_hero_subheadline', 'label' => 'Podnadpis', 'name' => 'hero_subheadline', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_hero_cta1_text', 'label' => 'CTA 1 - text', 'name' => 'hero_cta1_text', 'type' => 'text'),
            array('key' => 'field_hero_cta1_link', 'label' => 'CTA 1 - odkaz', 'name' => 'hero_cta1_link', 'type' => 'link'),
            array('key' => 'field_hero_cta2_text', 'label' => 'CTA 2 - text', 'name' => 'hero_cta2_text', 'type' => 'text'),
            array('key' => 'field_hero_cta2_link', 'label' => 'CTA 2 - odkaz', 'name' => 'hero_cta2_link', 'type' => 'link'),
            array('key' => 'field_hero_stats', 'label' => 'Statistiky', 'name' => 'hero_stats', 'type' => 'repeater', 'layout' => 'table', 'max' => 4,
                'sub_fields' => array(
                    array('key' => 'field_hero_stat_value', 'label' => 'Hodnota', 'name' => 'value', 'type' => 'text'),
                    array('key' => 'field_hero_stat_label', 'label' => 'Popisek', 'name' => 'label', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_hero_bg_image', 'label' => 'Pozadí', 'name' => 'hero_bg_image', 'type' => 'image', 'return_format' => 'array'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/hero'))),
        'style' => 'seamless',
    ));
});
