<section class="home_sec_10">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="text">
                    <h2 class="color-blue"><?php the_field('title') ?> <span class="subtitle"><?php the_field('subtitle') ?> </span></h2>
                    <?php the_field('text') ?>
                </div>
            </div>
        </div>
        <div class="row row2">
            <?php
            $videos = get_field('video');

            if ($videos) {
                foreach ($videos as $key => $value) {
                    ?>

                    <div class="col-4 <?= ($value['just_for_mobile']) ? 'mobile' : '' ?>">

                        <div class="single-item">

                            <div class="item-body">
                                <div>
                                    <div class="star-check-wrap">
                                        <img data-src="<?php echo esc_url($value['video_stars_image']['url']); ?>" alt="<?php echo esc_attr($value['video_stars_image']['alt']); ?>" width="<?php echo esc_attr($value['video_stars_image']['width']); ?>" height="<?php echo esc_attr($value['video_stars_image']['height']); ?>" />
                                    </div>
                                    <p class="fw-bold"><?= $value['name'] ?></p>
                                    <p><?= $value['text'] ?></p>
                                </div>
                                <p><?= $value['grafts'] ?></p>
                            </div>
                        </div>
                    </div>
            <?php

                }
            } ?>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="bottom-content">
                    <?php the_field('bottom_text') ?>
                </div>
            </div>
        </div>
    </div>

</section>