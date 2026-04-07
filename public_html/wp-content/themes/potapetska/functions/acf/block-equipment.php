<?php
if (!defined('ABSPATH')) exit;
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group(array(
        'key' => 'group_block_equipment',
        'title' => 'Blok: Technika & Půjčovna',
        'fields' => array(
            array('key' => 'field_equip_label', 'label' => 'Nadlabel', 'name' => 'equipment_label', 'type' => 'text'),
            array('key' => 'field_equip_heading', 'label' => 'Nadpis', 'name' => 'equipment_heading', 'type' => 'text'),
            array('key' => 'field_equip_heading2', 'label' => 'Nadpis řádek 2 (žlutý)', 'name' => 'equipment_heading2', 'type' => 'text'),
            array('key' => 'field_equip_desc', 'label' => 'Popis', 'name' => 'equipment_description', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_equip_benefit', 'label' => 'Text benefitu (žlutý pruh)', 'name' => 'equipment_benefit_text', 'type' => 'text'),
            array('key' => 'field_equip_rental_heading', 'label' => 'Půjčovna - nadpis', 'name' => 'equipment_rental_heading', 'type' => 'text'),
            array('key' => 'field_equip_rental_desc', 'label' => 'Půjčovna - popis', 'name' => 'equipment_rental_description', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_equip_rental_items', 'label' => 'Půjčovna - položky', 'name' => 'equipment_rental_items', 'type' => 'repeater', 'layout' => 'table',
                'sub_fields' => array(
                    array('key' => 'field_equip_ri_name', 'label' => 'Název', 'name' => 'name', 'type' => 'text'),
                    array('key' => 'field_equip_ri_price', 'label' => 'Cena', 'name' => 'price', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_equip_rental_cta', 'label' => 'Půjčovna - CTA text', 'name' => 'equipment_rental_cta_text', 'type' => 'text'),
            array('key' => 'field_equip_rental_cta_link', 'label' => 'Půjčovna - CTA odkaz', 'name' => 'equipment_rental_cta_link', 'type' => 'link'),
            array('key' => 'field_equip_sale_heading', 'label' => 'Odprodej - nadpis', 'name' => 'equipment_sale_heading', 'type' => 'text'),
            array('key' => 'field_equip_sale_desc', 'label' => 'Odprodej - popis', 'name' => 'equipment_sale_description', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_equip_sale_items', 'label' => 'Odprodej - položky', 'name' => 'equipment_sale_items', 'type' => 'repeater', 'layout' => 'table',
                'sub_fields' => array(
                    array('key' => 'field_equip_si_name', 'label' => 'Název', 'name' => 'name', 'type' => 'text'),
                    array('key' => 'field_equip_si_price', 'label' => 'Cena', 'name' => 'price', 'type' => 'text'),
                ),
            ),
            array('key' => 'field_equip_sale_cta', 'label' => 'Odprodej - CTA text', 'name' => 'equipment_sale_cta_text', 'type' => 'text'),
            array('key' => 'field_equip_sale_cta_link', 'label' => 'Odprodej - CTA odkaz', 'name' => 'equipment_sale_cta_link', 'type' => 'link'),
        ),
        'location' => array(array(array('param' => 'block', 'operator' => '==', 'value' => 'acf/equipment'))),
        'style' => 'seamless',
    ));
});
