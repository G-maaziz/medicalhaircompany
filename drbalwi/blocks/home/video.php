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

                    <div class="col-4">
                        <div class="single-item swiper-slide <?= ($value['just_for_mobile']) ? 'mobile' : '' ?>">
                            <div class="thumbnail-wrap">

                                <div class="poster_video">
                                    <img class="img-fluid video_img " src="<?php echo esc_url($value['video_poster']['url']); ?>" alt="<?php echo esc_attr($value['video_poster']['alt']); ?>" width="<?php echo esc_attr($value['video_poster']['width']); ?>" height="<?php echo esc_attr($value['video_poster']['height']); ?>" />
                                    <?php
                                            $play_icon = $value['play_icon'];
                                            if (!empty($play_icon)) : ?>
                                        <img class="play_icon" src="<?php echo esc_url($play_icon['url']); ?>" alt="<?php echo esc_attr($play_icon['alt']); ?>" width="<?php echo esc_attr($play_icon['width']); ?>" height="<?php echo esc_attr($play_icon['height']); ?>" />
                                    <?php endif;
                                            ?>
                                </div>

                                <div class="video-to-show">
                                    <video class="video-toshow" preload="none" controls="controls" style="display: none;">
                                        <source type="video/mp4" src="<?= ($value['video_link']) ? $value['video_link'] : $value['video'] ?>">
                                    </video>
                                </div>

                            </div>



                            <div class="item-body">
                                <div class="star-check-wrap">
                                    <img src="<?php echo esc_url($value['video_stars_image']['url']); ?>" alt="<?php echo esc_attr($value['video_stars_image']['alt']); ?>" width="<?php echo esc_attr($value['video_stars_image']['width']); ?>" height="<?php echo esc_attr($value['video_stars_image']['height']); ?>" />
                                </div>
                                <p class="fw-bold"><?= $value['name'] ?></p>
                                <p><?= $value['text'] ?></p>
                                <p><?= $value['grafts'] ?></p>
                            </div>
                        </div>
                    </div>


            <?php

                }
            } ?>

        </div>
    </div>

</section>


