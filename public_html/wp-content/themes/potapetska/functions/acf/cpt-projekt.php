<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group(array(
        'key' => 'group_cpt_projekt',
        'title' => 'Projekt - pole',
        'fields' => array(
            array(
                'key' => 'field_projekt_subtitle',
                'label' => 'Podnadpis',
                'name' => 'projekt_subtitle',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_projekt_gallery',
                'label' => 'Galerie',
                'name' => 'projekt_gallery',
                'type' => 'gallery',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_projekt_category_label',
                'label' => 'Kategorie (štítek)',
                'name' => 'projekt_category_label',
                'type' => 'text',
                'instructions' => 'Např. "Stavební práce"',
            ),
            array(
                'key' => 'field_projekt_date',
                'label' => 'Datum realizace',
                'name' => 'projekt_date',
                'type' => 'text',
                'instructions' => 'Např. "2018-2021"',
            ),
            array(
                'key' => 'field_projekt_location_text',
                'label' => 'Lokace (text)',
                'name' => 'projekt_location_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_projekt_cost',
                'label' => 'Náklady',
                'name' => 'projekt_cost',
                'type' => 'text',
            ),
            array(
                'key' => 'field_projekt_client',
                'label' => 'Poptavatel',
                'name' => 'projekt_client',
                'type' => 'text',
            ),
            array(
                'key' => 'field_projekt_team_size',
                'label' => 'Tým',
                'name' => 'projekt_team_size',
                'type' => 'text',
            ),
            array(
                'key' => 'field_projekt_dives_count',
                'label' => 'Počet ponorů',
                'name' => 'projekt_dives_count',
                'type' => 'text',
            ),
            array(
                'key' => 'field_projekt_max_depth',
                'label' => 'Maximální hloubka',
                'name' => 'projekt_max_depth',
                'type' => 'text',
            ),
            array(
                'key' => 'field_projekt_about',
                'label' => 'O projektu',
                'name' => 'projekt_about',
                'type' => 'wysiwyg',
                'media_upload' => 0,
            ),
            array(
                'key' => 'field_projekt_stats',
                'label' => 'Statistiky',
                'name' => 'projekt_stats',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_projekt_stat_value',
                        'label' => 'Hodnota',
                        'name' => 'value',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_projekt_stat_label',
                        'label' => 'Popisek',
                        'name' => 'label',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_projekt_services_used',
                'label' => 'Použité služby',
                'name' => 'projekt_services_used',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_projekt_service_name',
                        'label' => 'Název služby',
                        'name' => 'service_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_projekt_service_desc',
                        'label' => 'Popis',
                        'name' => 'service_description',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_projekt_service_link',
                        'label' => 'Odkaz',
                        'name' => 'service_link',
                        'type' => 'link',
                    ),
                ),
            ),
            array(
                'key' => 'field_projekt_map_location',
                'label' => 'Lokace na mapě',
                'name' => 'projekt_map_location',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array('key' => 'field_projekt_map_lat', 'label' => 'Zeměpisná šířka (lat)', 'name' => 'lat', 'type' => 'number', 'step' => 'any', 'placeholder' => '49.8175'),
                    array('key' => 'field_projekt_map_lng', 'label' => 'Zeměpisná délka (lng)', 'name' => 'lng', 'type' => 'number', 'step' => 'any', 'placeholder' => '15.4730'),
                    array('key' => 'field_projekt_map_address', 'label' => 'Adresa', 'name' => 'address', 'type' => 'text'),
                ),
            ),
            array(
                'key' => 'field_projekt_similar',
                'label' => 'Podobné projekty',
                'name' => 'projekt_similar',
                'type' => 'relationship',
                'post_type' => array('projekt'),
                'max' => 3,
                'return_format' => 'object',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'projekt',
                ),
            ),
        ),
    ));
});
