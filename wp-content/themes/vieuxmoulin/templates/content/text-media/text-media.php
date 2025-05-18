<?php $headline = get_sub_field('headline') ?>
<?php $text = get_sub_field('text') ?>
<?php $cta = get_sub_field('cta') ?>
<?php $image = get_sub_field('image') ?>
<?php $media_position = get_sub_field('media_position') ?>
<?php $media_type = get_sub_field('media_type') ?>
<?php $class = get_sub_field('class') ?>
<?php $shape_left = get_sub_field('shape_left') ?>
<?php $shape_right = get_sub_field('shape_right') ?>

<section class="text-media__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <?php if ($headline !== '' && isset($headline)): ?>
        <h2 class="text-media__content-headline" aria-level="2">
            <?= $headline ?>
        </h2>
    <?php endif; ?>
        <div class="text-media__content-container">
            <?php if ($text !== '' && isset($text)): ?>
                <div class="text-media__content-text">
                    <?= $text ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($cta)): ?>
                <a class="text-media__content-link"
                   href="<?= $cta['url'] ?>"
                   title="<?= $cta['title'] ?>">
                    <?= $cta['title'] ?>
                </a>
            <?php endif; ?>
        </div>
        <?php if (!empty($image)): ?>
            <div class="text-media__position text-media__position--<?= $media_position ?>">
                <?php if ($media_position === 'left' && $shape_left === '1') : ?>
                    <svg class="lightblue" width="326" height="390" viewBox="0 0 326 390">
                        <use xlink:href="#lightblue"></use>
                    </svg>
                <?php elseif ($media_position === 'left' && $shape_left === '2') : ?>
                    <svg class="yellow" width="300" height="300" viewBox="0 0 300 300">
                        <use xlink:href="#yellow"></use>
                    </svg>
                <?php elseif ($media_position === 'right' && $shape_right === '1') : ?>
                    <svg class="darkblue" width="226" height="263" viewBox="0 0 226 263">
                        <use xlink:href="#darkblue"></use>
                    </svg>
                <?php elseif ($media_position === 'right' && $shape_right === '2') : ?>
                    <svg class="green" width="254" height="310" viewBox="0 0 254 310">
                        <use xlink:href="#green"></use>
                    </svg>
                <?php elseif ($media_position === 'right' && $shape_right === '3') : ?>
                    <svg class="light" width="86" height="134" viewBox="0 0 86 134">
                        <use xlink:href="#light"></use>
                    </svg>
                <?php endif; ?>
                <?= responsive_image($image, ['classes' => 'text-media__image', 'lazy' => 'lazy']) ?>
            </div>
        <?php endif; ?>
</section>