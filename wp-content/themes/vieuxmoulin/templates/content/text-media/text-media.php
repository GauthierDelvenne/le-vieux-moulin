    <?php $supline = get_sub_field('supline') ?>
    <?php $headline = get_sub_field('headline') ?>
    <?php $subline = get_sub_field('subline') ?>
    <?php $text = get_sub_field('text') ?>
    <?php $cta = get_sub_field('cta') ?>
    <?php $image = get_sub_field('image') ?>
    <?php $media_position = get_sub_field('media_position') ?>
    <?php $media_type = get_sub_field('media_type') ?>
    <?php $class = get_sub_field('class') ?>
    
    
    <section class="section_container_<?= $class !== '' ? $class : '' ?>">
        <div class="text-mediacontent-container">
            <?php if ($supline !== '' && isset($supline)): ?>
                <p class="text-mediacontent-supline">
                    <?= $supline ?>
                </p>
            <?php endif; ?>
            <?php if ($headline !== '' && isset($headline)): ?>
                <h2 class="text-mediacontent-headline" aria-level="2">
                    <?= $headline ?>
                </h2>
            <?php endif; ?>
            <?php if ($subline !== '' && isset($subline)): ?>
                <p class="text-mediacontent-subline">
                    <?= $subline ?>
                </p>
            <?php endif; ?>
            <?php if ($text !== '' && isset($text)): ?>
                <div class="text-mediacontent-text">
                    <?= $text ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($cta)): ?>
                <a class="text-mediacontent-link"
                   href="<?= $cta['url'] ?>"
                   title="<?= $cta['title'] ?>">
                    <?= $cta['title'] ?>
                </a>
            <?php endif; ?>
        </div>
        <?php if (!empty($image)): ?>
            <div class="text-mediaposition text-mediaposition--<?= $media_position ?>">
                <?= responsive_image($image, ['classes' => 'text-media__image', 'lazy' => 'lazy']) ?>
            </div>
        <?php endif; ?>
    </section>