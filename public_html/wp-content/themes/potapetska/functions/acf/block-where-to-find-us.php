<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_where_to_find_us',
        'title' => 'Blok: Kde nás najdete',
        'fields' => array(
            array('key' => 'field_wtfu_label', 'label' => 'Nadlabel', 'name' => 'wtfu_label', 'type' => 'text'),
            array('key' => 'field_wtfu_heading', 'label' => 'Nadpis', 'name' => 'wtfu_heading', 'type' => 'text'),
            array('key' => 'field_wtfu_map', 'label' => 'Lokace na mapě', 'name' => 'wtfu_map_location', 'type' => 'group', 'layout' => 'block',
                'sub_fields' => array(
                    array('key' => 'field_wtfu_lat', 'label' => 'Zeměpisná šířka (lat)', 'name' => 'lat', 'type' => 'number', 'step' => 'any', 'placeholder' => '50.1408'),
                    array('key' => 'field_wtfu_lng', 'label' => 'Zeměpisná délka (lng)', 'name' => 'lng', 'type' => 'number', 'step' => 'any', 'placeholder' => '14.1083'),
                ),
            ),
            array('key' => 'field_wtfu_address', 'label' => 'Adresa (zobrazí se v popupu)', 'name' => 'wtfu_address', 'type' => 'text'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/where-to-find-us'))),
        'style' => 'seamless',
    ));
});
