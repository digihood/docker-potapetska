<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group(array(
        'key' => 'group_options_header',
        'title' => 'Záhlaví - nastavení',
        'fields' => array(
            array(
                'key' => 'field_header_top_bar_text',
                'label' => 'Text v horní liště',
                'name' => 'header_top_bar_text',
                'type' => 'text',
                'instructions' => 'Text zobrazený v žluté horní liště',
            ),
            array(
                'key' => 'field_header_top_bar_phone',
                'label' => 'Telefon v horní liště',
                'name' => 'header_top_bar_phone',
                'type' => 'text',
            ),
            array(
                'key' => 'field_header_top_bar_email',
                'label' => 'E-mail v horní liště',
                'name' => 'header_top_bar_email',
                'type' => 'email',
            ),
            array(
                'key' => 'field_header_cta_text',
                'label' => 'Text CTA tlačítka',
                'name' => 'header_cta_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_header_cta_link',
                'label' => 'Odkaz CTA tlačítka',
                'name' => 'header_cta_link',
                'type' => 'link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-zahlavi',
                ),
            ),
        ),
    ));
});
