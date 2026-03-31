<?php
if (!defined('ABSPATH')) exit;

if (function_exists('register_sidebar')) {
    $widgets = array(
        array('Zápatí 1', 'footer-1', 'Widget oblast zápatí 1', 'footer-widget'),
        array('Zápatí 2', 'footer-2', 'Widget oblast zápatí 2', 'footer-widget'),
        array('Zápatí 3', 'footer-3', 'Widget oblast zápatí 3', 'footer-widget'),
        array('Zápatí 4', 'footer-4', 'Widget oblast zápatí 4', 'footer-widget'),
    );

    foreach ($widgets as $widget) {
        register_sidebar(array(
            'name' => $widget[0],
            'id' => $widget[1],
            'description' => $widget[2],
            'before_widget' => '<div class="widget ' . $widget[3] . '" id="widget-%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="font-heading text-[0.75rem] font-extrabold text-white uppercase tracking-[0.14em] mb-3 pb-2.5 border-b border-white/[0.07]">',
            'after_title' => '</h4>',
        ));
    }
}
