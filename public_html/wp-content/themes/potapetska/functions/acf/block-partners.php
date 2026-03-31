<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_partners',
        'title' => 'Blok: Partneři',
        'fields' => array(
            array('key' => 'field_partners_bg', 'label' => 'Barva pozadí sekce', 'name' => 'partners_bg_color', 'type' => 'select', 'choices' => array('light' => 'Světlé', 'white' => 'Bílé'), 'default_value' => 'light'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/partners'))),
    ));
});
