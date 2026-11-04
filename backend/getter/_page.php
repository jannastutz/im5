<?php

// -> Farbwelt der aktuellen Seite für Bubbles und Footer
function get_page_theme(): string {
    if (is_singular('project')) {
        return 'project';
    }
    if (is_page()) {
        return carbon_get_the_post_meta('page_theme') ?: 'grey';
    }
    return 'grey';
}
