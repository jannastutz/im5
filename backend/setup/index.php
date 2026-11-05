<?php
/**
 * Einrichtungsseite unter "Werkzeuge > Portfolio einrichten".
 *
 * Legt per Klick die Seiten, Menüs und Kategorien an und kann Demo-Projekte
 * mit Platzhaltern erstellen und wieder löschen. Bestehende Inhalte werden
 * nicht überschrieben. Nach dem Einrichten kann dieser Ordner im Theme bleiben,
 * die Seite macht ohne Klick nichts.
 */

// -> Vorlage für das Impressum. Die Adresse in den eckigen Klammern muss ersetzt werden.
function setup_get_impressum_text(): array {
    return [
        'text' => <<<'HTML'
<h2>Verantwortlich für den Inhalt</h2>
<p>Janna Syrina Stutz<br>[Strasse und Hausnummer]<br>[PLZ und Ort]<br>Schweiz</p>
<p>E-Mail: <a href="mailto:hi@jannastutz.ch">hi@jannastutz.ch</a></p>
<h2>Urheberrecht</h2>
<p>Alle Rechte an Inhalten, Bildern, Fotos und anderen Dateien auf dieser Website gehören Janna Syrina Stutz oder den genannten Rechteinhaberinnen und Rechteinhabern. Für jede Verwendung braucht es vorher eine schriftliche Zustimmung.</p>
HTML,
        'text_2' => <<<'HTML'
<h2>Haftung</h2>
<p>Ich übernehme keine Gewähr für die Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen auf dieser Website. Haftungsansprüche wegen Schäden materieller oder immaterieller Art, die aus dem Zugriff auf die Inhalte, ihrer Nutzung oder Nichtnutzung, durch Missbrauch der Verbindung oder durch technische Störungen entstehen, sind ausgeschlossen, soweit das Gesetz dies zulässt.</p>
<p>Alle Angebote sind unverbindlich. Ich kann Inhalte ohne Ankündigung ändern, ergänzen oder löschen und die Website zeitweise oder endgültig offline nehmen.</p>
<h2>Links</h2>
<p>Links auf Websites Dritter liegen ausserhalb meiner Verantwortung. Für deren Inhalte sind die jeweiligen Betreiber verantwortlich. Der Zugriff und die Nutzung erfolgen auf eigene Gefahr.</p>
HTML,
    ];
}

// -> Vorlage für die Datenschutzerklärung. Vor dem Go-Live mit den aktiven Plugins abgleichen.
function setup_get_privacy_text(): array {
    return [
        'text' => <<<'HTML'
<h2>Verantwortliche Person</h2>
<p>Janna Syrina Stutz<br>[Strasse und Hausnummer]<br>[PLZ und Ort]<br>Schweiz<br><a href="mailto:hi@jannastutz.ch">hi@jannastutz.ch</a></p>
<h2>Besuch dieser Website</h2>
<p>Beim Aufruf dieser Website werden technische Daten wie IP-Adresse, Datum, Uhrzeit, aufgerufene Seite und Browser verarbeitet. Das ist nötig, um die Website anzuzeigen, stabil zu betreiben und zu schützen.</p>
<p>Die Website wird bei der Hostpoint AG in Rapperswil-Jona gehostet. Die Daten liegen auf Servern in der Schweiz.</p>
<h2>Schriften von Adobe Fonts</h2>
<p>Diese Website lädt die Schrift Coolvetica über Adobe Fonts. Dabei erhält Adobe die IP-Adresse deines Geräts und technische Angaben zur Website. Adobe kann diese Daten auch im Ausland bearbeiten, insbesondere in den USA. Laut Adobe wird die IP-Adresse für die Auslieferung der Schrift nicht gespeichert und es werden dafür keine Cookies gesetzt.</p>
HTML,
        'text_2' => <<<'HTML'
<h2>Cookies und Analyse</h2>
<p>Diese Website setzt für Besucherinnen und Besucher keine eigenen Cookies und keine Analyse- oder Werbedienste ein.</p>
<h2>Kontakt per E-Mail</h2>
<p>Wenn du mir schreibst, bearbeite ich deine Angaben, um deine Anfrage zu beantworten.</p>
<h2>Aufbewahrung</h2>
<p>Ich bewahre Personendaten nur so lange auf, wie es für den jeweiligen Zweck nötig ist oder das Gesetz es verlangt.</p>
<h2>Externe Links</h2>
<p>Diese Website verlinkt auf Instagram und LinkedIn. Erst wenn du einen dieser Links öffnest, gelten dort die Datenschutzbestimmungen des jeweiligen Anbieters.</p>
<h2>Deine Rechte</h2>
<p>Du kannst Auskunft über deine Daten verlangen und unrichtige Daten berichtigen oder Daten löschen lassen, soweit keine gesetzliche Pflicht dagegen spricht. Schreib mir dafür an die oben genannte E-Mail-Adresse. Du kannst dich auch an den Eidgenössischen Datenschutz- und Öffentlichkeitsbeauftragten (EDÖB) wenden.</p>
<p>Stand: November 2026</p>
HTML,
    ];
}

// -> Texte und Module der Seiten
function setup_get_pages(): array {
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
    $contact = [
        '_type' => 'contact',
        'title' => "have a project in mind?\nlet's talk!",
        'text' => 'for collaborations or projects requests feel free to contact me :)',
    ];
    return [
        'home' => [
            'title' => 'Home',
            'theme' => 'grey',
            'modules' => [
                ['_type' => 'hero', 'title' => 'Portfolio', 'name' => 'janna syrina', 'subtitle' => 'multimedia producer'],
                ['_type' => 'projects'],
            ],
        ],
        'about-me' => [
            'title' => 'About me',
            'theme' => 'olive',
            'modules' => [
                ['_type' => 'hero', 'title' => 'About me'],
                [
                    '_type' => 'skills',
                    'title' => 'my creative skillset...',
                    'items' => [
                        ['title' => 'Audiovisual Productions', 'keywords' => 'photography | video | animation | podcast', 'text' => $lorem],
                        ['title' => 'Photo & Video', 'keywords' => 'concept | direction | post-production', 'text' => $lorem],
                        ['title' => 'Visual Design', 'keywords' => 'graphic design | illustrations | identity', 'text' => $lorem],
                        ['title' => 'Event', 'keywords' => 'direction | management | set design | communications', 'text' => $lorem],
                        ['title' => 'Social Media', 'keywords' => 'strategy | content-production | community-management', 'text' => $lorem],
                    ],
                ],
                [
                    '_type' => 'about',
                    'title' => 'get to know me!',
                    'intro' => "i'm a multimedia production student based in lucerne and bern. " . $lorem,
                    'timeline' => [
                        ['years' => '2016-2022', 'text' => 'matura kantonsschule beromünster'],
                        ['years' => '2023', 'text' => 'praktikum content creation | grelldenker belp'],
                        ['years' => '2023-2024', 'text' => 'praktikum grafik & kommunikation | fidea design'],
                        ['years' => '2024-2027', 'text' => 'bsc multimedia production'],
                    ],
                ],
                $contact,
            ],
        ],
        'contact' => [
            'title' => 'Contact',
            'theme' => 'brown',
            'modules' => [
                ['_type' => 'hero', 'title' => 'Contact'],
                $contact,
            ],
        ],
        'impressum' => [
            'title' => 'Impressum',
            'theme' => 'orange',
            'modules' => [
                ['_type' => 'hero', 'title' => 'Impressum'],
                ['_type' => 'text'] + setup_get_impressum_text(),
            ],
        ],
        'privacy' => [
            'title' => 'Privacy',
            'theme' => 'orange',
            'modules' => [
                ['_type' => 'hero', 'title' => 'Privacy'],
                ['_type' => 'text'] + setup_get_privacy_text(),
            ],
        ],
    ];
}

// -> Seiten, Startseite, Menüs, Kategorien und leere Socials anlegen
function setup_create_structure(bool $rebuild_menus = false): void {
    $ids = [];
    foreach (setup_get_pages() as $slug => $page) {
        $existing = get_page_by_path($slug);
        $ids[$slug] = $existing ? $existing->ID : wp_insert_post([
            'post_type' => 'page',
            'post_status' => 'publish',
            'post_title' => $page['title'],
            'post_name' => $slug,
        ]);
        if (empty(carbon_get_post_meta($ids[$slug], 'modules'))) {
            carbon_set_post_meta($ids[$slug], 'modules', $page['modules']);
            carbon_set_post_meta($ids[$slug], 'page_theme', $page['theme']);
        }
    }

    update_option('show_on_front', 'page');
    update_option('page_on_front', $ids['home']);
    update_option('wp_page_for_privacy_policy', $ids['privacy']);

    setup_create_menu('main', 'Hauptnavigation', [
        ['title' => 'home', 'url' => home_url('/')],
        ['title' => 'projects', 'url' => home_url('/#projects')],
        ['title' => 'about me', 'page' => $ids['about-me']],
        ['title' => 'contact', 'page' => $ids['contact']],
    ], $rebuild_menus);
    setup_create_menu('legals', 'Rechtliches', [
        ['title' => 'impressum', 'page' => $ids['impressum']],
        ['title' => 'privacy', 'page' => $ids['privacy']],
    ], $rebuild_menus);

    foreach (['video', 'photo', 'graphics', 'event', 'podcast', 'socials'] as $index => $name) {
        $term = term_exists($name, 'project_category') ?: wp_insert_term($name, 'project_category');
        if (!is_wp_error($term)) {
            carbon_set_term_meta((int) $term['term_id'], 'sort_order', (string) ($index + 1));
        }
    }

    if (empty(carbon_get_theme_option('socials'))) {
        carbon_set_theme_option('socials', [
            ['title' => 'e-mail', 'url' => 'mailto:hi@jannastutz.ch', 'label' => 'hi@jannastutz.ch', 'footer_title' => 'email'],
            ['title' => 'instagram', 'url' => 'https://www.instagram.com/jss.visuals/', 'label' => '@jss.visuals', 'footer_title' => 'instagram'],
            ['title' => 'linkedin', 'url' => 'https://www.linkedin.com/', 'label' => 'janna stutz', 'footer_title' => ''],
        ]);
    }

    flush_rewrite_rules();
}

// -> Ein Menü erstellen, ausser dem Menü-Ort ist schon eines zugewiesen.
// Mit $rebuild werden die Einträge eines bestehenden Menüs ersetzt.
function setup_create_menu(string $location, string $name, array $items, bool $rebuild = false): void {
    $locations = get_nav_menu_locations();
    $assigned_id = $locations[$location] ?? 0;
    $assigned_items = $assigned_id ? (wp_get_nav_menu_items($assigned_id) ?: []) : [];
    if ($assigned_items && !$rebuild) {
        return;
    }
    foreach ($assigned_items as $item) {
        wp_delete_post($item->ID, true);
    }
    $menu = wp_get_nav_menu_object($name);
    $menu_id = $assigned_id ?: ($menu ? $menu->term_id : wp_create_nav_menu($name));
    if (is_wp_error($menu_id)) {
        return;
    }
    foreach ($items as $item) {
        $data = ['menu-item-title' => $item['title'], 'menu-item-status' => 'publish'];
        if (isset($item['page'])) {
            $data += ['menu-item-object' => 'page', 'menu-item-object-id' => $item['page'], 'menu-item-type' => 'post_type'];
        } else {
            $data += ['menu-item-url' => $item['url'], 'menu-item-type' => 'custom'];
        }
        wp_update_nav_menu_item($menu_id, 0, $data);
    }
    $locations[$location] = $menu_id;
    set_theme_mod('nav_menu_locations', $locations);
}

// -> Ein Platzhalterbild aus dem Theme in die Mediathek laden
function setup_import_placeholder(string $file): int {
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $path = get_template_directory() . '/frontend/assets/placeholder/' . $file;
    $upload = wp_upload_bits($file, null, file_get_contents($path));
    $id = wp_insert_attachment([
        'post_title' => 'Platzhalter',
        'post_mime_type' => 'image/jpeg',
        'post_status' => 'inherit',
    ], $upload['file']);
    wp_update_attachment_metadata($id, wp_generate_attachment_metadata($id, $upload['file']));
    update_post_meta($id, '_portfolio_demo', 1);
    return $id;
}

// -> Demo-Projekte mit Platzhalterbildern und Lorem Ipsum anlegen
function setup_create_demo_projects(): void {
    setup_delete_demo_projects();
    setup_create_structure();
    $images = array_map('setup_import_placeholder', array_map(fn ($n) => "placeholder-$n.jpg", range(1, 6)));
    $categories = ['video', 'graphics', 'photo', 'event', 'podcast', 'socials'];
    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.';
    for ($i = 0; $i < 12; $i++) {
        $id = wp_insert_post([
            'post_type' => 'project',
            'post_status' => 'publish',
            'post_title' => 'projekt vorlage ' . ($i + 1),
            'menu_order' => $i + 1,
            'meta_input' => ['_portfolio_demo' => 1],
        ]);
        wp_set_object_terms($id, $categories[$i % 6], 'project_category');
        carbon_set_post_meta($id, 'image', $images[$i % 6]);
        carbon_set_post_meta($id, 'text', $text . ' ' . $text);
        carbon_set_post_meta($id, 'text_2', $text);
        carbon_set_post_meta($id, 'gallery', $images);
    }
}

// -> Alles löschen, was als Demo markiert ist
function setup_delete_demo_projects(): void {
    $demo_query = [
        'post_status' => 'any',
        'numberposts' => -1,
        'fields' => 'ids',
        'meta_key' => '_portfolio_demo',
    ];
    foreach (get_posts(['post_type' => 'project'] + $demo_query) as $id) {
        wp_delete_post($id, true);
    }
    foreach (get_posts(['post_type' => 'attachment'] + $demo_query) as $id) {
        wp_delete_attachment($id, true);
    }
}

// -> Hinweis im Backend, wenn das benötigte Plugin fehlt
add_action('admin_notices', function () {
    if (!function_exists('carbon_get_post_meta')) {
        echo '<div class="notice notice-error"><p>Dieses Theme braucht das Plugin <strong>Carbon Fields</strong>. Bitte installieren und aktivieren.</p></div>';
    }
});

// -> Impressum und Privacy mit den aktuellen Vorlagen überschreiben
function setup_rewrite_legal_pages(): void {
    $pages = setup_get_pages();
    foreach (['impressum', 'privacy'] as $slug) {
        $page = get_page_by_path($slug);
        if ($page) {
            carbon_set_post_meta($page->ID, 'modules', $pages[$slug]['modules']);
        }
    }
}

// -> Menüpunkt im Backend
add_action('admin_menu', function () {
    add_management_page('Portfolio einrichten', 'Portfolio einrichten', 'manage_options', 'portfolio-setup', 'setup_render_page');
});

// -> Klick auf einen Button verarbeiten
add_action('admin_post_portfolio_setup', function () {
    if (!current_user_can('manage_options')) {
        wp_die('Keine Berechtigung.');
    }
    check_admin_referer('portfolio_setup');
    if (!function_exists('carbon_get_post_meta')) {
        wp_die('Bitte zuerst das Plugin Carbon Fields installieren und aktivieren.', 'Carbon Fields fehlt', ['back_link' => true]);
    }
    $actions = [
        'structure' => 'setup_create_structure',
        'menus' => fn () => setup_create_structure(true),
        'legal' => 'setup_rewrite_legal_pages',
        'demo' => 'setup_create_demo_projects',
        'delete' => 'setup_delete_demo_projects',
    ];
    $task = sanitize_key($_POST['task'] ?? '');
    if (isset($actions[$task])) {
        $actions[$task]();
    }
    wp_safe_redirect(admin_url('tools.php?page=portfolio-setup&done=1'));
    exit;
});

// -> Einrichtungsseite anzeigen
function setup_render_page(): void {
    $demo_count = count(get_posts([
        'post_type' => 'project',
        'post_status' => 'any',
        'numberposts' => -1,
        'fields' => 'ids',
        'meta_key' => '_portfolio_demo',
    ]));
    ?>
    <div class="wrap">
        <h1>Portfolio einrichten</h1>
        <?php if (isset($_GET['done'])) : ?>
            <div class="notice notice-success"><p>Erledigt.</p></div>
        <?php endif; ?>
        <p>Bestehende Seiten mit Inhalt und erfasste Socials werden nicht überschrieben. Menüs werden nur mit «Menüs neu aufbauen» ersetzt.</p>
        <p>Demo-Projekte im System: <strong><?= esc_html((string) $demo_count) ?></strong></p>
        <form method="post" action="<?= esc_url(admin_url('admin-post.php')) ?>">
            <?php wp_nonce_field('portfolio_setup'); ?>
            <input type="hidden" name="action" value="portfolio_setup">
            <p><button class="button button-primary" name="task" value="structure">Seiten und Menüs anlegen</button></p>
            <p><button class="button" name="task" value="menus">Menüs neu aufbauen</button> Ersetzt die Einträge in Hauptnavigation und Rechtliches.</p>
            <p><button class="button" name="task" value="legal">Impressum und Privacy neu schreiben</button> Ersetzt die Texte beider Seiten, auch eine bereits eingetragene Adresse.</p>
            <p><button class="button" name="task" value="demo">12 Demo-Projekte anlegen</button></p>
            <p><button class="button" name="task" value="delete">Demo-Projekte löschen</button></p>
        </form>
    </div>
    <?php
}
