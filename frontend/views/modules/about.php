<?php
$data = $args['data'];
// Im Backend erfasste Bilder gehen vor, sonst gelten die Fotostreifen aus dem Theme.
$images = get_template_directory_uri() . '/frontend/assets/images/';
$strips = [
    'left' => $data['strip_left'] ?: ['src' => $images . 'strip-left.webp'],
    'right' => $data['strip_right'] ?: ['src' => $images . 'strip-right.webp'],
];
?>

<section data-module="about">
    <div class="strips">
        <?php foreach ($strips as $side => $strip) : ?>
            <img class="strip strip-<?= $side ?>" src="<?= esc_url($strip['src']) ?>" alt="<?= esc_attr($strip['alt'] ?? 'Fotostreifen von Janna Stutz') ?>">
        <?php endforeach; ?>
    </div>

    <div class="about-content">
        <h2 class="heading"><?= esc_html($data['title']) ?></h2>
        <p class="intro"><?= esc_html($data['intro']) ?></p>
        <ul class="timeline">
            <?php foreach ($data['timeline'] as $item) : ?>
                <li><?= esc_html($item['years']) ?><br><?= esc_html($item['text']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
