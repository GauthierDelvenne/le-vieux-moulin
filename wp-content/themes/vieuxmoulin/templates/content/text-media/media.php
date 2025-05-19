<?php $headline = get_sub_field('headline'); ?>
<?php $class = get_sub_field('class'); ?>

<section class="media__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="media-container">

        <?php if ($headline !== '' && isset($headline)) : ?>
            <h2 class="media-headline" aria-level="2">
                <?= $headline; ?>
            </h2>
        <?php endif; ?>

        <?php if (have_rows('media_content')) : ?>
            <div class="media-content">
                <?php while (have_rows('media_content')) : the_row(); ?>
                    <?php
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    $headline = get_sub_field('headline');
                    ?>
                    <div class="media-item">
                        <?php if (!empty($link)): ?>
                            <a class="list-link"
                               href="<?= $link['url'] ?>"
                               title="<?= $link['title'] ?>">
                                <?= $link['title'] ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($headline !== '' && isset($headline)) : ?>
                            <p class="media-headline">
                                <?= $headline; ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($image)): ?>
                            <div class="media-media">
                                <?= responsive_image($image, ['classes' => 'media__image', 'lazy' => 'lazy']) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
