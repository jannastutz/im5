<?php
$project = $args['data'];
?>

<article class="teaser-project" data-teaser data-categories="<?= esc_attr(implode(' ', $project['category_slugs'])) ?>">
    <a href="<?= esc_url($project['url']) ?>">
        <?php if ($project['thumbnail']) : ?>
            <img class="image" src="<?= esc_url($project['thumbnail']['src']) ?>" alt="<?= esc_attr($project['thumbnail']['alt']) ?>" loading="lazy">
        <?php else : ?>
            <span class="image image-empty"></span>
        <?php endif; ?>
        <p class="category"><?= esc_html(implode(' | ', $project['category_names'])) ?></p>
        <h2 class="title"><?= esc_html($project['title']) ?></h2>
    </a>
</article>
