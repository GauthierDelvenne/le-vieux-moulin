<?php $headline = get_sub_field('headline'); ?>
<?php $class = get_sub_field('class'); ?>
<?php $block1 = get_sub_field('double-text-media_content-n1'); ?>
<?php $block2 = get_sub_field('double-text-media_content-n2'); ?>

<section class="double-text-media__section_container section_container_<?= $class !== '' ? $class : '' ?>">
    <div class="double-text-media-container">

        <?php if ($headline !== '' && isset($headline)) : ?>
            <h2 class="double-text-media-headline" aria-level="2">
                <?= $headline; ?>
            </h2>
        <?php endif; ?>


        <?php
        function render_text_media_block($block): void
        {
            if (!$block) return;

            $headline = $block['headline'] ?? '';
            $text = $block['text'] ?? '';
            $cta = $block['cta'] ?? '';
            $image = $block['image'] ?? '';
            $media_position = $block['media_position'] ?? '';
            $class = $block['class'] ?? '';
            $shape_left = $block['shape_left'] ?? '';
            $shape_right = $block['shape_right'] ?? '';

            ?>
            <div class="double-text-media-content">
                <section class="text-media__section_container section_container_<?= esc_attr($class) ?>">
                    <?php if (!empty($headline)) : ?>
                        <h3 class="text-media__content-headline" aria-level="3">
                            <?= esc_html($headline) ?>
                        </h3>
                    <?php endif; ?>

                    <div class="text-media__content-container">
                        <?php if (!empty($text)) : ?>
                            <div class="text-media__content-text">
                                <?= wp_kses_post($text) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($cta)) : ?>
                            <a class="text-media__content-link"
                               href="<?= esc_url($cta['url']) ?>"
                               title="<?= esc_attr($cta['title']) ?>">
                                <?= esc_html($cta['title']) ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($image)) : ?>
                        <div class="text-media__position text-media__position--<?= esc_attr($media_position) ?>">
                            <?php
                            if ($media_position === 'left') {
                                if ($shape_left === '1') {
                                    echo '<svg class="lightblue" width="278" height="365" viewBox="0 0 278 365"><use xlink:href="#lightblue"></use></svg>';
                                } elseif ($shape_left === '2') {
                                    echo '<svg class="yellow" width="298" height="203" viewBox="0 0 298 203"><use xlink:href="#yellow"></use></svg>';
                                }
                            } elseif ($media_position === 'right') {
                                if ($shape_right === '1') {
                                    echo '<svg class="darkblue" width="178" height="178" viewBox="0 0 178 178"><use xlink:href="#darkblue"></use></svg>';
                                } elseif ($shape_right === '2') {
                                    echo '<svg class="green" width="163" height="229" viewBox="0 0 163 229"><use xlink:href="#green"></use></svg>';
                                }
                            }
                            ?>

                            <?= responsive_image($image, ['classes' => 'text-media__image', 'lazy' => 'lazy']) ?>
                        </div>
                    <?php endif; ?>
                </section>
            </div>
            <?php
        }
        ?>

        <?php
        render_text_media_block(get_sub_field('double-text-media_content-n1'));
        render_text_media_block(get_sub_field('double-text-media_content-n2'));
        ?>


    </div>
</section>
