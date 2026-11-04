<?php
$data = $args['data'];
// Die Titelgrafik heisst wie der Titel, z.B. "About me" = about-me.png
$file = 'frontend/assets/titles/' . sanitize_title($data['title']) . '.png';
$has_image = file_exists(get_template_directory() . '/' . $file);
?>

<section data-module="hero">
    <h1 class="title">
        <?php if ($has_image) : ?>
            <img src="<?= esc_url(get_template_directory_uri() . '/' . $file) ?>" alt="<?= esc_attr($data['title']) ?>">
        <?php else : ?>
            <?= esc_html($data['title']) ?>
        <?php endif; ?>
    </h1>
    <?php if ($data['name']) : ?>
        <p class="name"><?= esc_html($data['name']) ?></p>
    <?php endif; ?>
    <?php if ($data['subtitle']) : ?>
        <p class="subtitle"><?= esc_html($data['subtitle']) ?></p>
    <?php endif; ?>
</section>
