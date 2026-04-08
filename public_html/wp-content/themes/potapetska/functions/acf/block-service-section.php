<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_service_section',
        'title' => 'Blok: Detail služby',
        'fields' => array(
            array('key' => 'field_ss_label', 'label' => 'Nadlabel', 'name' => 'service_section_label', 'type' => 'text'),
            array('key' => 'field_ss_heading', 'label' => 'Nadpis', 'name' => 'service_section_heading', 'type' => 'text'),
            array('key' => 'field_ss_heading2', 'label' => 'Nadpis řádek 2', 'name' => 'service_section_heading2', 'type' => 'text'),
            array('key' => 'field_ss_text', 'label' => 'Text', 'name' => 'service_section_text', 'type' => 'wysiwyg', 'media_upload' => 0),
            array('key' => 'field_ss_bullets', 'label' => 'Klíčové body', 'name' => 'service_section_bullets', 'type' => 'repeater', 'layout' => 'table',
                'sub_fields' => array(
                    array('key' => 'field_ss_bullet_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_ss_image', 'label' => 'Obrázek', 'name' => 'service_section_image', 'type' => 'image', 'return_format' => 'array'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/service-section'))),
        'style' => 'seamless',
        'position' => 'normal',
    ));
});
