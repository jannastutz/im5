<?php
$data = $args['data'];
?>

<section data-module="contact">
    <h2 class="heading"><?= nl2br(esc_html($data['title'])) ?></h2>
    <p class="text"><?= esc_html($data['text']) ?></p>
    <ul class="contact-list">
        <?php foreach ($data['socials'] as $item) : ?>
            <li class="contact-item">
                <span class="contact-title"><?= esc_html($item['title']) ?></span>
                <a class="pill-button" href="<?= esc_url($item['url']) ?>"
                    <?= $item['is_external'] ? 'target="_blank" rel="noopener"' : '' ?>><?= esc_html($item['label'] ?: $item['title']) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
