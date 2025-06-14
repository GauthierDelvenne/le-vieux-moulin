<?php $title = get_sub_field('title'); ?>
<?php $image = get_sub_field('image'); ?>
<?php $button1 = get_sub_field('text_button_1'); ?>
<?php $button2 = get_sub_field('text_button_2'); ?>
<?php $class = get_sub_field('class'); ?>
<?php
$current_path = $_SERVER['REQUEST_URI'];

function getPathFromUrl($url)
{
    $parsed = parse_url($url);
    return $parsed['path'] ?? '/';
}

?>

<section class="button__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <?php if (!empty($title)): ?>
        <h2 class="hidden"><?= $title ?></h2>
    <?php endif; ?>

    <?php if (!empty($image)): ?>
        <div class="button-media">
            <?= responsive_image($image, ['classes' => 'button__image', 'lazy' => 'lazy']) ?>
        </div>
    <?php endif; ?>
    <div class="button-container">
        <?php if (!empty($button1)): ?>
            <div class="button-button1">
                <a class="button__content-link <?= ($current_path == getPathFromUrl($button1['url'])) ? 'active' : 'inactive' ?>"
                   href="<?= $button1['url'] ?>"
                   title="<?= $button1['title'] ?>">
                    <?= $button1['title'] ?>
                </a>
            </div>
        <?php endif; ?>
        <?php if (!empty($button2)): ?>
            <div class="button-button2">
                <a class="button__content-link <?= ($current_path == getPathFromUrl($button2['url'])) ? 'active' : 'inactive' ?>"
                   href="<?= $button2['url'] ?>"
                   title="<?= $button2['title'] ?>">
                    <?= $button2['title'] ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
