<?php

// -> Liest die Video-ID aus einem YouTube-Link. Gibt null zurück, wenn der Link nicht passt.
function get_youtube_id(string $url): ?string {
    $pattern = '~(?:youtube(?:-nocookie)?\.com/(?:watch\?(?:.*&)?v=|embed/|shorts/|live/)|youtu\.be/)([\w-]{11})~';
    return preg_match($pattern, $url, $matches) ? $matches[1] : null;
}

// -> Alle gültigen Videos eines Projekts mit ihrem Vorschaubild
function get_project_videos(int $id, array|false $fallback_poster): array {
    $videos = [];
    foreach (carbon_get_post_meta($id, 'videos') ?: [] as $video) {
        $youtube_id = get_youtube_id($video['url']);
        if ($youtube_id) {
            $videos[] = [
                'id' => $youtube_id,
                'poster' => $video['poster'] ? get_media_by_id($video['poster'], 'xl') : $fallback_poster,
            ];
        }
    }
    return $videos;
}

// -> Alle Daten eines Projekts für die Übersicht und die Projektseite
function get_project_by_id(int $id): array {
    $terms = get_the_terms($id, 'project_category');
    $categories = is_array($terms) ? $terms : [];
    $image_id = carbon_get_post_meta($id, 'image');
    $image = $image_id ? get_media_by_id($image_id, 'xl') : false;
    return [
        'title' => get_the_title($id),
        'url' => get_permalink($id),
        'text' => carbon_get_post_meta($id, 'text'),
        'text_2' => carbon_get_post_meta($id, 'text_2'),
        'image' => $image,
        'videos' => get_project_videos($id, $image),
        'thumbnail' => $image_id ? get_media_by_id($image_id, 'm') : false,
        'gallery' => array_map(function ($gallery_id) {
            return [
                'thumbnail' => get_media_by_id($gallery_id, 'm'),
                'full' => get_media_by_id($gallery_id, 'xl'),
            ];
        }, carbon_get_post_meta($id, 'gallery') ?: []),
        'category_names' => array_map(fn ($term) => $term->name, $categories),
        'category_slugs' => array_map(fn ($term) => $term->slug, $categories),
    ];
}

// -> Alle veröffentlichten Projekte: zuerst nach Feld "Reihenfolge", dann die neusten
function get_projects(): array {
    $ids = get_posts([
        'post_type' => 'project',
        'post_status' => 'publish',
        'numberposts' => -1,
        'fields' => 'ids',
        'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
    ]);
    return array_map('get_project_by_id', $ids);
}

// -> Alle Kategorien, sortiert für den Filter
function get_project_categories(): array {
    $terms = get_terms([
        'taxonomy' => 'project_category',
        'hide_empty' => false,
    ]);
    if (is_wp_error($terms)) {
        return [];
    }
    usort($terms, function ($a, $b) {
        $order_a = (int) carbon_get_term_meta($a->term_id, 'sort_order');
        $order_b = (int) carbon_get_term_meta($b->term_id, 'sort_order');
        return $order_a <=> $order_b ?: strcmp($a->name, $b->name);
    });
    return array_map(fn ($term) => ['name' => $term->name, 'slug' => $term->slug], $terms);
}
