<?php $headline = get_sub_field('headline'); ?>
<?php $class = get_sub_field('class'); ?>
<?php $block1 = get_sub_field('double-text-media_content-n1'); ?>
<?php $block2 = get_sub_field('double-text-media_content-n2'); ?>

<section class="double-text-media__section_container section_container_<?= $class !== '' ? $class : '' ?>" >
    <div class="double-text-media-container">

        <?php if ($headline !== '' && isset($headline)) : ?>
            <div class="double-text-media-headliners">
                <h2 class="double-text-media-headline" aria-level="2">
                    <?= $headline; ?>
                </h2>
                <svg class="underline" width="366" height="10" viewBox="0 0 366 10">
                    <use xlink:href="#underline"></use>
                </svg>
            </div>
        <?php endif; ?>


        <?php if (!function_exists('render_text_media_block')) {

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
                    <section class="text-media__section_container section_container_<?= esc_attr($class) ?>" <?php if($class !== ''):?>id="<?= $class !== '' ? $class : '' ?>"<?php  endif;?>>
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
                </div>
                <?php
            }

        }
        ?>

        <?php
        render_text_media_block(get_sub_field('double-text-media_content-n1'));
        render_text_media_block(get_sub_field('double-text-media_content-n2'));
        ?>


    </div>
</section>
