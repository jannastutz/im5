<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// -> Farbwelt einer Seite: bestimmt Bubbles und Footer-Farbe
Container::make('post_meta', 'Darstellung')
    ->where('post_type', '=', 'page')
    ->set_context('side')
    ->add_fields([
        Field::make('select', 'page_theme', 'Farbwelt')
            ->add_options([
                'grey' => 'Grau (Startseite)',
                'olive' => 'Olive (About)',
                'brown' => 'Braun (Contact)',
                'orange' => 'Orange (Impressum, Privacy)',
            ])
            ->set_default_value('grey'),
    ]);
