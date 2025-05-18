<?php $headline = get_sub_field('headline'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $class = get_sub_field('class'); ?>

<section class="donation__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="donation-container">
        <?php if ($headline !== '' && isset($headline)) : ?>
            <h2 class="donation-headline" aria-level="2">
                <?= $headline; ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($text)) : ?>
            <div class="donation__content-text">
                <?= wp_kses_post($text) ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('gallery')) : ?>
            <div class="donation-content">
                <?php while (have_rows('gallery')) : the_row(); ?>
                    <?php
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    ?>
                    <div class="donation-item">
                        <?php if (!empty($link)): ?>
                            <a class="list-link"
                               href="<?= $link['url'] ?>"
                               title="<?= $link['title'] ?>">
                                <?= $link['title'] ?>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($image)): ?>
                            <div class="donation-donation">
                                <?= responsive_image($image, ['classes' => 'donation__image', 'lazy' => 'lazy']) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
