<?php

// -> Logo aus den globalen Einstellungen, sonst die Datei aus dem Theme
function get_globals_logo(): array {
    $logo_id = carbon_get_theme_option('logo');
    if ($logo_id) {
        return get_media_by_id($logo_id);
    }
    return [
        'src' => get_template_directory_uri() . '/frontend/assets/images/logo.png',
        'alt' => get_bloginfo('name'),
    ];
}

// -> Alle Socials, für jeden Link steht fest, ob er in einem neuen Tab öffnet
function get_globals_socials(): array {
    $socials = carbon_get_theme_option('socials') ?: [];
    return array_map(function ($item) {
        $item['is_external'] = str_starts_with($item['url'], 'http');
        return $item;
    }, $socials);
}

// -> Links für den Footer. Ist kein Footer-Titel erfasst, erscheinen alle Socials.
function get_globals_footer_links(): array {
    $socials = get_globals_socials();
    $links = array_filter($socials, fn ($item) => !empty($item['footer_title']));
    if (empty($links)) {
        return array_map(function ($item) {
            $item['footer_title'] = $item['title'];
            return $item;
        }, $socials);
    }
    // Im Footer steht die Reihenfolge wie im Design umgekehrt zur Kontaktseite.
    return array_reverse($links);
}
