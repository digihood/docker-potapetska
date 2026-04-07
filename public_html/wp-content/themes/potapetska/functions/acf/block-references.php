<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_references',
        'title' => 'Blok: Reference',
        'fields' => array(
            array('key' => 'field_ref_label', 'label' => 'Nadlabel', 'name' => 'references_label', 'type' => 'text'),
            array('key' => 'field_ref_heading', 'label' => 'Nadpis', 'name' => 'references_heading', 'type' => 'text'),
            array('key' => 'field_ref_heading2', 'label' => 'Nadpis řádek 2', 'name' => 'references_heading2', 'type' => 'text'),
            array('key' => 'field_ref_count', 'label' => 'Počet zobrazených projektů', 'name' => 'references_count', 'type' => 'number', 'default_value' => 6),
            array('key' => 'field_ref_show_map', 'label' => 'Zobrazit mapu', 'name' => 'references_show_map', 'type' => 'true_false', 'default_value' => 1),
            array('key' => 'field_ref_show_clients', 'label' => 'Zobrazit klienty', 'name' => 'references_show_clients', 'type' => 'true_false', 'default_value' => 1),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/references'))),
        'style' => 'seamless',
    ));
});
