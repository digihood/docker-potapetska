<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_contact',
        'title' => 'Blok: Kontakt',
        'fields' => array(
            array('key' => 'field_contact_bg', 'label' => 'Barva pozadí', 'name' => 'contact_bg_color', 'type' => 'select', 'choices' => array('dark' => 'Tmavé (modré)', 'light' => 'Světlé'), 'default_value' => 'dark'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/contact'))),
        'style' => 'seamless',
    ));
});
