<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_reasons',
        'title' => 'Blok: Proč nás zvolit',
        'fields' => array(
            array('key' => 'field_reasons_label', 'label' => 'Nadlabel', 'name' => 'reasons_label', 'type' => 'text'),
            array('key' => 'field_reasons_heading', 'label' => 'Nadpis', 'name' => 'reasons_heading', 'type' => 'text'),
            array('key' => 'field_reasons_heading2', 'label' => 'Nadpis řádek 2', 'name' => 'reasons_heading2', 'type' => 'text'),
            array('key' => 'field_reasons_items', 'label' => 'Důvody', 'name' => 'reasons_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array('key' => 'field_reason_title', 'label' => 'Název', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_reason_desc', 'label' => 'Popis', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                ),
            ),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/reasons'))),
        'style' => 'seamless',
        'position' => 'normal',
    ));
});
