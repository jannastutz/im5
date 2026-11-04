<?php
$data = $args['data'];
?>

<section data-module="skills">
    <h2 class="heading"><?= esc_html($data['title']) ?></h2>
    <div class="skills-list">
        <?php foreach ($data['items'] as $item) : ?>
            <details class="skill" name="skills">
                <summary>
                    <span class="skill-title"><?= esc_html($item['title']) ?></span>
                    <span class="skill-keywords"><?= esc_html($item['keywords']) ?></span>
                    <span class="skill-icon" aria-hidden="true"></span>
                </summary>
                <div class="skill-text"><?= wp_kses_post(wpautop($item['text'])) ?></div>
            </details>
        <?php endforeach; ?>
    </div>
</section>
