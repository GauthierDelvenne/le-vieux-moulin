<?php $headline = get_sub_field('headline'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $class = get_sub_field('class'); ?>

<section class="background-list__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="background-list-container">

        <?php if ($headline !== '' && isset($headline)) : ?>
            <h2 class="background-list-headline" aria-level="2">
                <?= $headline; ?>
            </h2>
        <?php endif; ?>

        <?php if (have_rows('background-list_content')) : ?>
            <div class="background-list-content">
                <?php while (have_rows('background-list_content')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $text = get_sub_field('text');
                    $headline = get_sub_field('headline');
                    ?>
                    <article class="background-list-item">
                        <?php if (!empty($image)): ?>
                            <div class="background-list-media">
                                <?= responsive_image($image, ['classes' => 'background-list__image', 'lazy' => 'lazy']) ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($headline !== '' && isset($headline)) : ?>
                            <h3 class="background-list-headline" aria-level="3">
                                <?= $headline; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($text !== '' && isset($text)): ?>
                            <div class="background-list-text">
                                <?= $text ?>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
