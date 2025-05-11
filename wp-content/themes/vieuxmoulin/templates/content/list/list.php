<?php $headline = get_sub_field('headline'); ?>
<?php $class = get_sub_field('class'); ?>

<section class="list__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="list-container">

        <?php if ($headline !== '' && isset($headline)) : ?>
            <h2 class="list-headline" aria-level="2">
                <?= $headline; ?>
            </h2>
        <?php endif; ?>

        <?php if (have_rows('list_content')) : ?>
            <div class="list-content">
                <?php while (have_rows('list_content')) : the_row(); ?>
                    <?php
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    $text = get_sub_field('text');
                    $headline = get_sub_field('headline');
                    ?>
                    <article class="list-item">
                        <?php if (!empty($link)): ?>
                            <a class="list-link"
                               href="<?= $link['url'] ?>"
                               title="<?= $link['title'] ?>">
                                <?= $link['title'] ?>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($image)): ?>
                            <div class="list-media">
                                <?= responsive_image($image, ['classes' => 'list__image', 'lazy' => 'lazy']) ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($headline !== '' && isset($headline)) : ?>
                            <h3 class="list-headline" aria-level="3">
                                <?= $headline; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($text !== '' && isset($text)): ?>
                            <div class="list-text">
                                <?= $text ?>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
