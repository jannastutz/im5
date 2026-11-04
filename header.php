<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <link rel="stylesheet" href="https://use.typekit.net/fkm4spp.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/frontend/styles/main.css?v=<?= filemtime(get_template_directory() . '/frontend/styles/main.css') ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
    <title><?= esc_html(wp_get_document_title()) ?></title>
    <?php wp_head(); ?>
</head>
<body data-theme="<?= esc_attr(get_page_theme()) ?>">
