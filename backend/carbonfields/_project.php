<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// -> Inhaltsfelder eines Projekts
Container::make('post_meta', 'Projektinhalte')
    ->where('post_type', '=', 'project')
    ->add_fields([
        Field::make('image', 'image', 'Vorschaubild')
            ->set_help_text('Erscheint in der Projektübersicht und gross auf der Projektseite.'),
        Field::make('textarea', 'text', 'Beschreibung, linke Spalte')
            ->set_rows(6)
            ->set_width(50),
        Field::make('textarea', 'text_2', 'Beschreibung, rechte Spalte')
            ->set_rows(6)
            ->set_width(50),
        Field::make('complex', 'videos', 'YouTube-Videos')
            ->add_fields([
                Field::make('text', 'url', 'YouTube-Link')
                    ->set_help_text('Link aus dem Browser oder von Teilen, z.B. https://youtu.be/abc123'),
                Field::make('image', 'poster', 'Vorschaubild (optional)')
                    ->set_help_text('Leer lassen, dann erscheint das Vorschaubild des Projekts.'),
            ])
            ->set_header_template(' <% if (url) { %> <%- url %><% } %>')
            ->set_layout('tabbed-vertical'),
        Field::make('media_gallery', 'gallery', 'Galerie')
            ->set_type(['image'])
            ->set_help_text('Bilder per Drag & Drop sortieren. Ohne Bilder wird keine Galerie angezeigt.'),
    ]);

// -> Reihenfolge der Filter-Buttons auf der Startseite
Container::make('term_meta', 'Filter')
    ->where('term_taxonomy', '=', 'project_category')
    ->add_fields([
        Field::make('text', 'sort_order', 'Reihenfolge im Filter')
            ->set_attribute('type', 'number')
            ->set_help_text('Kleinere Zahlen stehen weiter links.'),
    ]);
