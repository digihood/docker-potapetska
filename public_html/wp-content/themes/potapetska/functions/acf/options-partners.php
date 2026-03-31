<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group(array(
        'key' => 'group_options_partners',
        'title' => 'Partneři - nastavení',
        'fields' => array(
            array(
                'key' => 'field_partners_section_label',
                'label' => 'Nadpis sekce',
                'name' => 'partners_section_label',
                'type' => 'text',
            ),
            array(
                'key' => 'field_partners_list',
                'label' => 'Seznam partnerů',
                'name' => 'partners_list',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_partner_name',
                        'label' => 'Název partnera',
                        'name' => 'partner_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_partner_logo',
                        'label' => 'Logo (volitelné)',
                        'name' => 'partner_logo',
                        'type' => 'image',
                        'return_format' => 'array',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-partneri',
                ),
            ),
        ),
    ));
});
