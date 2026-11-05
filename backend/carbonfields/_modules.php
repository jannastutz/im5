<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// -> Konfiguration der verschiedenen Module
Container::make('post_meta', 'Module')
    ->where('post_type', '=', 'page')
    ->add_fields([
        Field::make('complex', 'modules', 'Module')
            // -> hero
            ->add_fields('hero', 'Seitentitel', [
                Field::make('text', 'title', 'Titel')
                    ->set_required()
                    ->set_help_text('Die handgeschriebene Titelgrafik liegt unter frontend/assets/titles/ und heisst wie dieser Titel, z.B. "about-me.png".'),
                Field::make('text', 'name', 'Name (optional)'),
                Field::make('text', 'subtitle', 'Untertitel (optional)'),
            ])
            // -> projects
            ->add_fields('projects', 'Projektübersicht', [
                Field::make('html', 'projects_info', 'Info')
                    ->set_html('<p>Zeigt den Filter und alle veröffentlichten Projekte an. Die Projekte werden im Menüpunkt <strong>Projekte</strong> verwaltet.</p>'),
            ])
            // -> skills
            ->add_fields('skills', 'Skills', [
                Field::make('text', 'title', 'Titel'),
                Field::make('complex', 'items', 'Skills')
                    ->add_fields([
                        Field::make('text', 'title', 'Titel'),
                        Field::make('text', 'keywords', 'Stichworte'),
                        Field::make('textarea', 'text', 'Beschreibung')->set_rows(3),
                    ])
                    ->set_header_template(' <% if (title) { %> <%- title %><% } %>')
                    ->set_layout('tabbed-vertical'),
            ])
            // -> about
            ->add_fields('about', 'Über mich', [
                Field::make('text', 'title', 'Titel'),
                Field::make('rich_text', 'intro', 'Einleitung')
                    ->set_help_text('Wörter markieren und auf B klicken, um sie fett zu machen.'),
                Field::make('image', 'strip_left', 'Fotostreifen links')->set_width(50),
                Field::make('image', 'strip_right', 'Fotostreifen rechts')->set_width(50),
                Field::make('complex', 'timeline', 'Lebenslauf')
                    ->add_fields([
                        Field::make('text', 'years', 'Zeitraum'),
                        Field::make('text', 'text', 'Station'),
                    ])
                    ->set_header_template(' <% if (years) { %> <%- years %><% } %>')
                    ->set_layout('tabbed-vertical'),
            ])
            // -> contact
            ->add_fields('contact', 'Kontakt', [
                Field::make('textarea', 'title', 'Titel')->set_rows(2),
                Field::make('text', 'text', 'Text'),
                Field::make('html', 'contact_info', 'Info')
                    ->set_html('<p>Die Links kommen aus <strong>Globales &gt; Socials</strong>.</p>'),
            ])
            // -> text
            ->add_fields('text', 'Text', [
                Field::make('rich_text', 'text', 'Text, linke Spalte')->set_width(50),
                Field::make('rich_text', 'text_2', 'Text, rechte Spalte')->set_width(50),
            ])
            // todo: add new modules here
            // -> SETTINGS
            ->set_layout('tabbed-vertical')
    ]);

// -> Funktion, um die Module und die entsprechenden Templates auf der Seite zu laden
function render_modules (): void {
    $modules = carbon_get_the_post_meta('modules');
    if (empty($modules)) {
        return;
    }
    foreach ($modules as $module) {
        // -> Modifiziere die Daten des Moduls, falls nötig, basierend auf dem Modultyp
        switch ($module['_type']) {
            case 'about':
                $module['strip_left'] = $module['strip_left'] ? get_media_by_id($module['strip_left'], 'l') : false;
                $module['strip_right'] = $module['strip_right'] ? get_media_by_id($module['strip_right'], 'l') : false;
                break;
            case 'contact':
                $module['socials'] = get_globals_socials();
                break;
            case 'projects':
                $module['projects'] = get_projects();
                $module['categories'] = get_project_categories();
                break;
                // todo: add data modifications for modules here as a new case
        }
        // -> Laden des Templates basierend auf dem Modultyp und weitergeben der Daten
        get_template_part(
            'frontend/views/modules/' . $module['_type'],
            null,
            [
                'data' => $module
            ]
        );
    }
}
