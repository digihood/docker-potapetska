<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_our_team',
        'title' => 'Blok: Náš tým',
        'fields' => array(
            array('key' => 'field_ot_label', 'label' => 'Nadlabel', 'name' => 'our_team_label', 'type' => 'text'),
            array('key' => 'field_ot_heading', 'label' => 'Nadpis', 'name' => 'our_team_heading', 'type' => 'text'),
            array('key' => 'field_ot_members', 'label' => 'Členové týmu', 'name' => 'our_team_members', 'type' => 'relationship', 'post_type' => array('team'), 'return_format' => 'object'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/our-team'))),
        'style' => 'seamless',
        'position' => 'normal',
    ));
});
