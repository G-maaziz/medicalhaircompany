<section class="video-feedback"<?php if (!empty(get_field('video_testimonial_bg'))) : ?> style="background-color: <?php the_field('video_testimonial_bg') ?>;" <?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-6 mar_auto">
                <h2><?= the_field('video_testimonial_headline') ?></h2>
                <p><?= the_field('video_testimonial_content') ?></p>
            </div>
        </div>
        <div class="row">
            <?php

            $testmonial_videos = get_field('testimonial_video');
            if ($testmonial_videos) {
                foreach ($testmonial_videos as $key => $value) {
                    ?>
                    <div class="col-4">
                        <div class="video">

                            <div class="poster_video">

                                <?php  $image = $value['video_testimonial_desktop_image'];
                                        if (!empty($image)) : ?>
                                    <img class="video_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                <?php endif; ?>


                                <?php
                                        $play_icon = $value['play_icon'];
                                        if (!empty($play_icon)) : ?>
                                    <img class="play_icon" src="<?php echo esc_url($play_icon['url']); ?>" alt="<?php echo esc_attr($play_icon['alt']); ?>" width="<?php echo esc_attr($play_icon['width']); ?>" height="<?php echo esc_attr($play_icon['height']); ?>" />
                                <?php endif;
                                        ?>


                            </div>



                            <?php if ($value['video_testimonial_video_source'] == 'link') {
                                        ?>
                                <video controls="" preload="none">
                                    <source type="video/mp4" src="<?= $value['video_testimonial_video_link'] ?>">
                                </video>
                            <?php
                                    } else { ?>

                                <video controls="" preload="none">
                                    <source type="video/mp4" src="<?= $value['video_testimonial_video'] ?>">
                                </video>
                            <?php } ?>
                        </div>
                        <p class="p_name"><?= $value['video_patienten_name'] ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>