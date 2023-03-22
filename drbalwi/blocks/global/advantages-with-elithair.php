<section <?php if(!empty($block['className'])) : ?>class="advantages <?php echo $block['className'] ?>"<?php else : ?>class="advantages"<?php endif; ?> <?php if(!empty(get_field('advantages_background_color'))) : ?>style="background-color: <?php the_field('advantages_background_color') ?>;"<?php endif; ?>>
    <div class="container">
        <?php if(get_field('advantages_main_title') || get_field('advantages_content')) { ?>
            <div class="row">
                <div class="col-12">
                    <?php if(get_field('advantages_main_title')) { ?>
                        <h2><?= the_field('advantages_main_title') ?></h2>
                    <?php } ?>
                    <?php if(get_field('advantages_content')) { ?>
                        <?= the_field('advantages_content') ?>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <?php

                $advantages_boxes = get_field('advantages_boxes');
                if ($advantages_boxes){
                foreach ($advantages_boxes as $key => $value) {
                    ?>
            <div class="col-4">
                <div class="advantages_box" <?php if(!empty(get_field('advantages_box_background'))) : ?>style="background-color: <?php the_field('advantages_box_background') ?>;"<?php endif; ?>>
                    <?php
                        $image_box = $value['box_image'];
                        if (!empty($image_box)) : ?>
                            <img src="<?php echo esc_url($image_box['url']); ?>" alt="<?php echo esc_attr($image_box['alt']); ?>" width="<?php echo esc_attr($image_box['width']); ?>" height="<?php echo esc_attr($image_box['height']); ?>" />
                    <?php endif; ?>
                    <div class="advantages_content">
                        <?= $value['advantages_text'] ?>
                    </div>
                </div>
            </div>
            <?php
                }}
                ?>
        </div>
    </div>
</section>