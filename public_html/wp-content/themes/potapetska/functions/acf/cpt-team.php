<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group(array(
        'key' => 'group_cpt_team',
        'title' => 'Člen týmu - pole',
        'fields' => array(
            array(
                'key' => 'field_team_role',
                'label' => 'Pozice',
                'name' => 'team_role',
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_phone',
                'label' => 'Telefon',
                'name' => 'team_phone',
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_email',
                'label' => 'E-mail',
                'name' => 'team_email',
                'type' => 'email',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team',
                ),
            ),
        ),
    ));
});
