<section class="feedback" style="background-color: <?php the_field('testmonial_background_color') ?>;">
    <div class="container">
        <div class="row">
            <div class="col-8 mar_auto">
                <h2><?= the_field('testmonial_main_title') ?></h2>
                <p><?= the_field('testmonial_content') ?></p>
            </div>
        </div>
        <div class="row">
            <?php

                $testmonial_boxes = get_field('testmonial_boxes');
                if ($testmonial_boxes){
                foreach ($testmonial_boxes as $key => $value) {
                    ?>
            <div class="col-4">
                <div class="feedback_box" style="background-color: <?php the_field('testmonial_box_background') ?>;">
                    <div class="feedback_header">
                        <?php
                            $image_star = $value['image_star'];
                            if (!empty($image_star)) : ?>
                                <img class="star" src="<?php echo esc_url($image_star['url']); ?>" alt="<?php echo esc_attr($image_star['alt']); ?>" width="<?php echo esc_attr($image_star['width']); ?>" height="<?php echo esc_attr($image_star['height']); ?>" />
                        <?php endif; ?>
                        <?php
                            $image_flag = $value['image_flag'];
                            if (!empty($image_flag)) : ?>
                                <img class="logo" src="<?php echo esc_url($image_flag['url']); ?>" alt="<?php echo esc_attr($image_flag['alt']); ?>" width="<?php echo esc_attr($image_flag['width']); ?>" height="<?php echo esc_attr($image_flag['height']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="feedback_content">
                        <span class="name"><?= $value['testmonial_author'] ?></span>
                        <p><?= $value['testmonial_text'] ?></p>
                    </div>
                </div>
            </div>
            <?php
                }}
                ?>
        </div>
    </div>
</section>