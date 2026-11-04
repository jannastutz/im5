<?php
$data = $args['data'];
?>

<section data-module="text">
    <div class="columns">
        <div><?= wpautop($data['text']); ?></div>
        <div><?= wpautop($data['text_2']); ?></div>
    </div>
</section>
