<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_page_header',
        'title' => 'Záhlaví stránky',
        'fields' => array(
            array('key' => 'field_ph_label', 'label' => 'Nadlabel', 'name' => 'page_header_label', 'type' => 'text'),
            array('key' => 'field_ph_description', 'label' => 'Popis', 'name' => 'page_header_description', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_ph_bg_image', 'label' => 'Obrázek pozadí', 'name' => 'page_header_bg_image', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_ph_stats', 'label' => 'Statistiky', 'name' => 'page_header_stats', 'type' => 'repeater', 'layout' => 'table', 'max' => 4,
                'sub_fields' => array(
                    array('key' => 'field_ph_stat_value', 'label' => 'Hodnota', 'name' => 'value', 'type' => 'text'),
                    array('key' => 'field_ph_stat_label', 'label' => 'Popisek', 'name' => 'label', 'type' => 'text'),
                ),
            ),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-full-width.php'),
            ),
        ),
        'position' => 'acf_after_title',
    ));
});
