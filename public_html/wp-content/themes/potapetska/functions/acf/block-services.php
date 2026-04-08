<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_services',
        'title' => 'Blok: Služby',
        'fields' => array(
            array('key' => 'field_services_label', 'label' => 'Nadlabel', 'name' => 'services_label', 'type' => 'text'),
            array('key' => 'field_services_heading', 'label' => 'Nadpis', 'name' => 'services_heading', 'type' => 'text'),
            array('key' => 'field_services_heading2', 'label' => 'Nadpis - řádek 2', 'name' => 'services_heading2', 'type' => 'text'),
            array('key' => 'field_services_description', 'label' => 'Popis', 'name' => 'services_description', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_services_items', 'label' => 'Služby', 'name' => 'services_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array('key' => 'field_service_title', 'label' => 'Název', 'name' => 'title', 'type' => 'text'),
                    array('key' => 'field_service_description', 'label' => 'Popis', 'name' => 'description', 'type' => 'textarea', 'rows' => 2),
                    array('key' => 'field_service_tags', 'label' => 'Štítky (oddělené čárkou)', 'name' => 'tags', 'type' => 'text'),
                    array('key' => 'field_service_button_label', 'label' => 'Text tlačítka', 'name' => 'button_label', 'type' => 'text'),
                    array('key' => 'field_service_button_link', 'label' => 'Odkaz', 'name' => 'button_link', 'type' => 'link'),
                    array('key' => 'field_service_highlight', 'label' => 'Zvýrazněná karta', 'name' => 'highlight', 'type' => 'true_false', 'default_value' => 0),
                ),
            ),
            array('key' => 'field_services_cta_text', 'label' => 'CTA text', 'name' => 'services_cta_text', 'type' => 'text'),
            array('key' => 'field_services_cta_link', 'label' => 'CTA odkaz', 'name' => 'services_cta_link', 'type' => 'link'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/services'))),
        'style' => 'seamless',
        'position' => 'normal',
    ));
});
