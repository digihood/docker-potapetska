<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_projects_select',
        'title' => 'Blok: Výběr projektů',
        'fields' => array(
            array('key' => 'field_ps_label', 'label' => 'Nadlabel', 'name' => 'projects_select_label', 'type' => 'text'),
            array('key' => 'field_ps_heading', 'label' => 'Nadpis', 'name' => 'projects_select_heading', 'type' => 'text'),
            array('key' => 'field_ps_heading2', 'label' => 'Nadpis řádek 2', 'name' => 'projects_select_heading2', 'type' => 'text'),
            array('key' => 'field_ps_items', 'label' => 'Projekty', 'name' => 'projects_select_items', 'type' => 'relationship', 'post_type' => array('projekt'), 'return_format' => 'object'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/projects-select'))),
        'style' => 'seamless',
    ));
});
