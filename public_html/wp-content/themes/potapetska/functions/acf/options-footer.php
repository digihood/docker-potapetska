<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group(array(
        'key' => 'group_options_footer',
        'title' => 'Zápatí - nastavení',
        'fields' => array(
            array(
                'key' => 'field_footer_description',
                'label' => 'Popis společnosti',
                'name' => 'footer_description',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'field_footer_mascot_image',
                'label' => 'Obrázek maskota',
                'name' => 'footer_mascot_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_footer_copyright',
                'label' => 'Text copyrightu',
                'name' => 'footer_copyright',
                'type' => 'text',
                'instructions' => 'Použijte {year} pro aktuální rok',
            ),
            array(
                'key' => 'field_footer_webdesign_text',
                'label' => 'Text webdesignu',
                'name' => 'footer_webdesign_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_footer_webdesign_url',
                'label' => 'URL webdesignu',
                'name' => 'footer_webdesign_url',
                'type' => 'url',
            ),
            array(
                'key' => 'field_footer_menu_left_title',
                'label' => 'Nadpis levého menu',
                'name' => 'footer_menu_left_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_footer_menu_left',
                'label' => 'Levé menu',
                'name' => 'footer_menu_left',
                'type' => 'relationship',
                'post_type' => array('page', 'projekt'),
                'filters' => array('search', 'post_type'),
                'return_format' => 'object',
                'min' => 0,
                'max' => '',
                'instructions' => 'Položky levého sloupce menu v zápatí',
            ),
            array(
                'key' => 'field_footer_menu_right_title',
                'label' => 'Nadpis pravého menu',
                'name' => 'footer_menu_right_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_footer_menu_right',
                'label' => 'Pravé menu',
                'name' => 'footer_menu_right',
                'type' => 'relationship',
                'post_type' => array('page', 'projekt'),
                'filters' => array('search', 'post_type'),
                'return_format' => 'object',
                'min' => 0,
                'max' => '',
                'instructions' => 'Položky pravého sloupce menu v zápatí',
            ),
            array(
                'key' => 'field_footer_certifications',
                'label' => 'Certifikace',
                'name' => 'footer_certifications',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_footer_cert_image',
                        'label' => 'Obrázek',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_footer_cert_label',
                        'label' => 'Název',
                        'name' => 'label',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_footer_memberships',
                'label' => 'Členství',
                'name' => 'footer_memberships',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_footer_member_abbr',
                        'label' => 'Zkratka',
                        'name' => 'abbreviation',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_footer_member_name',
                        'label' => 'Plný název',
                        'name' => 'full_name',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-zapati',
                ),
            ),
        ),
    ));
});
