<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_about_us',
        'title' => 'Blok: O nás',
        'fields' => array(
            array('key' => 'field_about_label', 'label' => 'Nadlabel', 'name' => 'about_label', 'type' => 'text'),
            array('key' => 'field_about_heading', 'label' => 'Nadpis', 'name' => 'about_heading', 'type' => 'text'),
            array('key' => 'field_about_text', 'label' => 'Text', 'name' => 'about_text', 'type' => 'wysiwyg', 'media_upload' => 0),
            array('key' => 'field_about_cta_text', 'label' => 'CTA text', 'name' => 'about_cta_text', 'type' => 'text'),
            array('key' => 'field_about_cta_link', 'label' => 'CTA odkaz', 'name' => 'about_cta_link', 'type' => 'link'),
            array('key' => 'field_about_image', 'label' => 'Obrázek', 'name' => 'about_image', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_about_badge_number', 'label' => 'Badge číslo', 'name' => 'about_badge_number', 'type' => 'text'),
            array('key' => 'field_about_badge_text', 'label' => 'Badge text', 'name' => 'about_badge_text', 'type' => 'text'),
            array('key' => 'field_about_certifications', 'label' => 'Certifikace', 'name' => 'about_certifications', 'type' => 'repeater', 'layout' => 'table',
                'sub_fields' => array(
                    array('key' => 'field_about_cert_img', 'label' => 'Obrázek', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'),
                    array('key' => 'field_about_cert_label', 'label' => 'Název', 'name' => 'label', 'type' => 'text'),
                    array('key' => 'field_about_cert_desc', 'label' => 'Popis', 'name' => 'description', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_about_bg_color', 'label' => 'Barva pozadí', 'name' => 'about_bg_color', 'type' => 'select', 'choices' => array('white' => 'Bílá', 'light' => 'Světle šedá', 'dark' => 'Tmavě modrá'), 'default_value' => 'white'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/about-us'))),
        'style' => 'seamless',
    ));
});
