<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group(array(
        'key' => 'group_options_contact',
        'title' => 'Kontakt - nastavení',
        'fields' => array(
            array(
                'key' => 'field_contact_section_label',
                'label' => 'Nadlabel sekce',
                'name' => 'contact_section_label',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_section_heading',
                'label' => 'Nadpis sekce',
                'name' => 'contact_section_heading',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_emergency_label',
                'label' => 'Popisek pohotovosti',
                'name' => 'contact_emergency_label',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_emergency_phone',
                'label' => 'Telefon pohotovosti',
                'name' => 'contact_emergency_phone',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_emergency_desc',
                'label' => 'Popis pohotovosti',
                'name' => 'contact_emergency_desc',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_details',
                'label' => 'Kontaktní údaje',
                'name' => 'contact_details',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_contact_detail_label',
                        'label' => 'Popisek',
                        'name' => 'label',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_contact_detail_value',
                        'label' => 'Hodnota',
                        'name' => 'value',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_contact_detail_link',
                        'label' => 'Odkaz (volitelné)',
                        'name' => 'link_url',
                        'type' => 'url',
                    ),
                ),
            ),
            array(
                'key' => 'field_contact_form_heading',
                'label' => 'Nadpis formuláře',
                'name' => 'contact_form_heading',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_form_description',
                'label' => 'Popis formuláře',
                'name' => 'contact_form_description',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_form_shortcode',
                'label' => 'Shortcode formuláře (CF7)',
                'name' => 'contact_form_shortcode',
                'type' => 'text',
                'instructions' => 'Vložte shortcode Contact Form 7',
            ),
            array(
                'key' => 'field_contact_form_note',
                'label' => 'Poznámka pod formulářem',
                'name' => 'contact_form_note',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-kontakt',
                ),
            ),
        ),
    ));
});
