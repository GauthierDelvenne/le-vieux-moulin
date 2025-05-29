<?php $headline = get_sub_field('headline'); ?>
<?php $class = get_sub_field('class'); ?>
<?php $image = get_sub_field('image'); ?>
<section class="gallery__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <?php if ($headline !== '' && isset($headline)) : ?>
        <h2 class="gallery-headline" aria-level="2">
            <?= $headline; ?>
        </h2>
    <?php endif; ?>

    <?php

    $images = get_sub_field('gallery');
    if ($images): ?>
    <ul class="gallery-list">
        <?php foreach ($images as $image):?>
            <li class="gallery-list-item">
                <?= responsive_image($image, ['classes' => 'gallery__image', 'lazy' => 'lazy']) ?>
            </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</section>
