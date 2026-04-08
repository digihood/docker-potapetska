<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_other_services',
        'title' => 'Blok: Další služby',
        'fields' => array(
            array('key' => 'field_os_label', 'label' => 'Nadlabel', 'name' => 'other_services_label', 'type' => 'text'),
            array('key' => 'field_os_heading', 'label' => 'Nadpis', 'name' => 'other_services_heading', 'type' => 'text'),
            array('key' => 'field_os_heading2', 'label' => 'Nadpis řádek 2', 'name' => 'other_services_heading2', 'type' => 'text'),
            array('key' => 'field_os_items', 'label' => 'Služby', 'name' => 'other_services_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array('key' => 'field_os_title', 'label' => 'Název', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_os_desc', 'label' => 'Popis', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                    array('key' => 'field_os_tags', 'label' => 'Štítky (čárkou)', 'name' => 'tags', 'type' => 'text'),
                    array('key' => 'field_os_link', 'label' => 'Odkaz', 'name' => 'link', 'type' => 'link'),
                ),
            ),
            array('key' => 'field_os_cta_text', 'label' => 'CTA text', 'name' => 'other_services_cta_text', 'type' => 'text'),
            array('key' => 'field_os_cta_link', 'label' => 'CTA odkaz', 'name' => 'other_services_cta_link', 'type' => 'link'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/other-services'))),
        'style' => 'seamless',
        'position' => 'normal',
    ));
});
