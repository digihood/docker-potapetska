<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_centers',
        'title' => 'Blok: Střediska',
        'fields' => array(
            array('key' => 'field_centers_label', 'label' => 'Nadlabel', 'name' => 'centers_label', 'type' => 'text'),
            array('key' => 'field_centers_heading', 'label' => 'Nadpis', 'name' => 'centers_heading', 'type' => 'text'),
            array('key' => 'field_centers_items', 'label' => 'Střediska', 'name' => 'centers_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array('key' => 'field_center_name', 'label' => 'Název', 'name' => 'name', 'type' => 'text'),
                    array('key' => 'field_center_icon', 'label' => 'Ikona (primary/yellow)', 'name' => 'icon_style', 'type' => 'select', 'choices' => array('yellow' => 'Žlutá', 'primary' => 'Modrá'), 'default_value' => 'primary'),
                    array('key' => 'field_center_highlight', 'label' => 'Zvýrazněné', 'name' => 'highlight', 'type' => 'true_false', 'default_value' => 0),
                    array('key' => 'field_center_info', 'label' => 'Informace', 'name' => 'info_items', 'type' => 'repeater', 'layout' => 'table',
                        'sub_fields' => array(
                            array('key' => 'field_center_info_label', 'label' => 'Popisek', 'name' => 'label', 'type' => 'text'),
                            array('key' => 'field_center_info_value', 'label' => 'Hodnota', 'name' => 'value', 'type' => 'textarea', 'rows' => 2),
                            array('key' => 'field_center_info_link', 'label' => 'Odkaz (volitelné)', 'name' => 'link', 'type' => 'url'),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/centers'))),
        'style' => 'seamless',
    ));
});
