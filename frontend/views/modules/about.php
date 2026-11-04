<?php
$data = $args['data'];
$strips = ['left' => $data['strip_left'], 'right' => $data['strip_right']];
?>

<section data-module="about">
    <div class="strips">
        <?php foreach ($strips as $side => $strip) : ?>
            <?php if ($strip) : ?>
                <img class="strip strip-<?= $side ?>" src="<?= esc_url($strip['src']) ?>" alt="<?= esc_attr($strip['alt']) ?>">
            <?php else : ?>
                <span class="strip strip-<?= $side ?> strip-empty" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
            <?php endif; ?>
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
