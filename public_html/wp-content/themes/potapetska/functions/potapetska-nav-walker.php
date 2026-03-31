<?php
if (!defined('ABSPATH')) exit;

class Potapetska_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $is_active = in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes);

        $output .= '<a href="' . esc_url($item->url) . '" class="nav-link' . ($is_active ? ' active' : '') . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        // No closing tag needed since we output <a> directly
    }

    function start_lvl(&$output, $depth = 0, $args = null) {
        // No sub-menu wrapper for now
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        // No sub-menu wrapper
    }
}
