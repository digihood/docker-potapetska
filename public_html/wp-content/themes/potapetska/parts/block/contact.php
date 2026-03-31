<?php
$bg = get_field('contact_bg_color') ?: 'dark';
$is_dark = $bg === 'dark';
get_template_part('parts/contact-section', null, array('scheme' => $is_dark ? 'dark' : 'light'));
