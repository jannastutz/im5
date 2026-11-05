<?php
$project = get_project_by_id(get_the_ID());
?>

<main data-page="project">
    <div class="project-head">
        <h1 class="title"><?= esc_html($project['title']) ?></h1>
        <p class="category"><?= esc_html(implode(' | ', $project['category_names'])) ?></p>
    </div>

    <?php if ($project['image']) : ?>
        <img class="image" src="<?= esc_url($project['image']['src']) ?>" alt="<?= esc_attr($project['image']['alt']) ?>">
    <?php endif; ?>

    <div class="columns">
        <div><?= wp_kses_post(wpautop($project['text'])) ?></div>
        <div><?= wp_kses_post(wpautop($project['text_2'])) ?></div>
    </div>

    <?php foreach ($project['videos'] as $index => $video) : ?>
        <?php // YouTube lädt erst nach dem Klick, vorher wird nichts an YouTube übertragen. ?>
        <div class="video" data-video="<?= esc_attr($video['id']) ?>">
            <?php if ($video['poster']) : ?>
                <img src="<?= esc_url($video['poster']['src']) ?>" alt="" loading="lazy">
            <?php endif; ?>
            <button class="video-play" type="button" aria-label="Video <?= $index + 1 ?> abspielen"></button>
        </div>
    <?php endforeach; ?>

    <?php if ($project['gallery']) : ?>
        <ul class="gallery" data-gallery>
            <?php foreach ($project['gallery'] as $index => $item) : ?>
                <li>
                    <button class="gallery-item" type="button"
                        data-full="<?= esc_url($item['full']['src']) ?>"
                        aria-label="Bild <?= $index + 1 ?> gross anzeigen">
                        <img src="<?= esc_url($item['thumbnail']['src']) ?>" alt="<?= esc_attr($item['thumbnail']['alt']) ?>" loading="lazy">
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>

        <dialog class="lightbox" data-lightbox aria-label="Bildergalerie">
            <button class="lightbox-button lightbox-close" type="button" data-lightbox-close aria-label="Schliessen">×</button>
            <button class="lightbox-button lightbox-prev" type="button" data-lightbox-prev aria-label="Vorheriges Bild">‹</button>
            <img class="lightbox-image" src="" alt="" data-lightbox-image>
            <button class="lightbox-button lightbox-next" type="button" data-lightbox-next aria-label="Nächstes Bild">›</button>
        </dialog>
    <?php endif; ?>

    <a class="pill-button" href="<?= esc_url(home_url('/#projects')) ?>">view all projects</a>
</main>
