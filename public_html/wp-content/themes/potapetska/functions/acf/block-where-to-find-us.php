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
            array('key' => 'field_wtfu_map', 'label' => 'Lokace na mapě', 'name' => 'wtfu_map_location', 'type' => 'google_map', 'center_lat' => '50.1408', 'center_lng' => '14.1083', 'zoom' => 12),
            array('key' => 'field_wtfu_address', 'label' => 'Adresa', 'name' => 'wtfu_address', 'type' => 'textarea', 'rows' => 2),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/where-to-find-us'))),
    ));
});
