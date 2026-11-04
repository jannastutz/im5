<?php
$data = $args['data'];
?>

<section data-module="projects" id="projects">
    <div class="filter" role="group" aria-label="Projekte filtern" data-filter>
        <button class="pill" type="button" data-filter-button="all" aria-pressed="true">all</button>
        <?php foreach ($data['categories'] as $category) : ?>
            <button class="pill" type="button" data-filter-button="<?= esc_attr($category['slug']) ?>" aria-pressed="false"><?= esc_html($category['name']) ?></button>
        <?php endforeach; ?>
    </div>

    <div class="grid" data-grid>
        <?php foreach ($data['projects'] as $project) : ?>
            <?php get_template_part('frontend/views/teaser/project', null, ['data' => $project]); ?>
        <?php endforeach; ?>
    </div>

    <p class="empty" data-filter-empty <?= $data['projects'] ? 'hidden' : '' ?>>hier gibt es noch keine projekte.</p>
</section>
