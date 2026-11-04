<?php
$menu = get_menu_by_slug('legals');
$links = get_globals_footer_links();
?>

<footer data-layout="footer">
    <div class="footer-inner">
        <nav class="nav-container" aria-label="Rechtliches">
            <ul class="nav">
                <?php foreach ($menu as $item) : ?>
                    <li class="nav-item">
                        <a href="<?= esc_url($item['url']) ?>"
                            <?= $item['target'] ? 'target="' . esc_attr($item['target']) . '"' : '' ?>><?= esc_html($item['title']) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <p class="copyright">© janna syrina</p>

        <ul class="nav socials">
            <?php foreach ($links as $item) : ?>
                <li class="nav-item">
                    <a href="<?= esc_url($item['url']) ?>"
                        <?= $item['is_external'] ? 'target="_blank" rel="noopener"' : '' ?>><?= esc_html($item['footer_title']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</footer>
