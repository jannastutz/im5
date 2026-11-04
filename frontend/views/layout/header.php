<?php
$menu = get_menu_by_slug('main');
$logo = get_globals_logo();
?>

<?php get_template_part('frontend/views/layout/bubbles') ?>

<header data-layout="header">
    <a class="logo" href="<?= esc_url(home_url('/')) ?>" aria-label="Zur Startseite">
        <img src="<?= esc_url($logo['src']) ?>" alt="<?= esc_attr($logo['alt']) ?>">
    </a>

    <nav class="nav-container" aria-label="Hauptnavigation">
        <ul class="nav">
            <?php foreach ($menu as $item) : ?>
                <?php
                // Die aktuelle Seite wird wie im Design unscharf dargestellt.
                $is_active = is_page() && !is_front_page()
                    && untrailingslashit($item['url']) === untrailingslashit(get_permalink());
                ?>
                <li class="nav-item">
                    <a href="<?= esc_url($item['url']) ?>"
                        <?= $item['target'] ? 'target="' . esc_attr($item['target']) . '"' : '' ?>
                        <?= $is_active ? 'aria-current="page"' : '' ?>><?= esc_html($item['title']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
