<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// -> Inhaltsfeld-Konfiguration der globalen Einstellungen des Themes
Container::make('theme_options', 'Globales')
    ->add_fields([
        Field::make('image', 'logo', 'Logo'),
        Field::make('complex', 'socials', 'Socials')
            ->add_fields([
                Field::make('text', 'title', 'Titel')
                    ->set_help_text('Erscheint auf der Kontaktseite, z.B. "e-mail".'),
                Field::make('text', 'url', 'URL')
                    ->set_help_text('Für E-Mail so schreiben: mailto:name@domain.ch'),
                Field::make('text', 'label', 'Anzeigetext')
                    ->set_help_text('Text im Kontakt-Button, z.B. "@jss.visuals".'),
                Field::make('text', 'footer_title', 'Titel im Footer')
                    ->set_help_text('Z.B. "email". Leer lassen, wenn der Link nicht in den Footer soll.'),
            ])
            ->set_header_template(' <% if (title) { %> <%- title %><% } %>')
            ->set_layout('tabbed-vertical')
    ]);
