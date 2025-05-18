<?php $supline = get_sub_field('supline') ?>
<?php $headline = get_sub_field('headline') ?>
<?php $subline = get_sub_field('subline') ?>
<?php $text = get_sub_field('text') ?>
<?php $second_text = get_sub_field('second_text') ?>
<?php $cta = get_sub_field('cta') ?>
<?php $image = get_sub_field('image') ?>
<?php $media_position = get_sub_field('media_position') ?>
<?php $media_type = get_sub_field('media_type') ?>
<?php $class = get_sub_field('class') ?>


<section class="landing-page__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="landing-page__content-container">
        <?php if ($supline !== '' && isset($supline)): ?>
            <p class="landing-page__content-supline">
                <?= $supline ?>
            </p>
        <?php endif; ?>
        <?php if ($headline !== '' && isset($headline)): ?>
            <h2 class="landing-page__content-headline" aria-level="2">
                <?= $headline ?>
            </h2>
        <?php endif; ?>
        <?php if ($subline !== '' && isset($subline)): ?>
            <p class="landing-page__content-subline">
                <?= $subline ?>
            </p>
        <?php endif; ?>
        <?php if ($text !== '' && isset($text)): ?>
            <div class="landing-page__content-text">
                <?= $text ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($cta)): ?>
            <a class="landing-page__content-link"
               href="<?= $cta['url'] ?>"
               title="<?= $cta['title'] ?>">
                <?= $cta['title'] ?>
            </a>
        <?php endif; ?>
        <svg class="wave" width="232" height="176" viewBox="0 0 232 176" >
            <use xlink:href="#wave"></use>
        </svg>
    </div>
    <div class="landing-page">
        <?php if ($media_position === 'left') :?>
            <svg class="lightblue" width="326" height="390" viewBox="0 0 326 390" >
                <use xlink:href="#lightblue"></use>
            </svg>
        <?php elseif ($media_position === 'right') :?>
            <svg class="darkblue" width="226" height="263" viewBox="0 0 226 263" >
                <use xlink:href="#darkblue"></use>
            </svg>
        <?php endif ;?>
    <?php if (!empty($image)): ?>
        <div class="landing-page__position landing-page__position--<?= $media_position ?>">
            <?= responsive_image($image, ['classes' => 'landing-page__image', 'lazy' => 'lazy']) ?>
        </div>
    <?php endif; ?>
    <?php if ($second_text !== '' && isset($second_text)): ?>
        <div class="landing-page__content-second_text">
            <?= $second_text ?>
        </div>
    <?php endif; ?>
    </div>
</section>