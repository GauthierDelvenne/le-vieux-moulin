<?php $headline = get_sub_field('headline') ?>
<?php $text = get_sub_field('text') ?>
<?php $link = get_sub_field('link') ?>
<?php $class = get_sub_field('class') ?>

<section class="section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="text-container">
        <?php if ($headline !== '' && isset($headline)): ?>
            <h2 class="text-headline" aria-level="2">
                <?= $headline ?>
            </h2>
        <?php endif; ?>
        <?php if ($text !== '' && isset($text)): ?>
            <div class="text-text">
                <?= $text ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($link)): ?>
            <a class="text-link"
               href="<?= $link['url'] ?>"
               title="<?= $link['title'] ?>">
                <?= $link['title'] ?>
            </a>
        <?php endif; ?>
    </div>
</section>
