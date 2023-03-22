<section class="sec_image_video_hero">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="global_hero_content">
                    <h1><?php the_field('global_hero_image_video_title'); ?></h1>
                    <p class="subtitle"><?php the_field('global_hero_image_video__sub_title'); ?></p>
                    <?php
                        if (get_field('select_type_media') == 'image') { ?>
                            <?php
                            $mobile_image = get_field('global_hero_image_video_mobile_image');
                            if (!empty($mobile_image)) : ?>
                                <img class="mobile" src="<?php echo esc_url($mobile_image['url']); ?>" alt="<?php echo esc_attr($mobile_image['alt']); ?>" width="<?php echo esc_attr($mobile_image['width']); ?>" height="<?php echo esc_attr($mobile_image['height']); ?>" />
                                <?php endif; ?>
                       <?php } else {

                                ?>
                            <div class="video mobile">
                                <?php
                                    $mobile_video = get_field('global_hero_image_video_video_poster_mob');
                                    if (!empty($mobile_video)) : ?>
                                    <img class="video_img mobile" src="<?php echo esc_url($mobile_video['url']); ?>" alt="<?php echo esc_attr($mobile_video['alt']); ?>" width="<?php echo esc_attr($mobile_video['width']); ?>" height="<?php echo esc_attr($mobile_video['height']); ?>" />
                                <?php endif; ?>
                                <?php if (get_field('global_hero_image_video_type_of_video') == 'link') {
                                        ?>
                                    <video controls="" preload="none" poster="">
                                        <source type="video/mp4" src="<?= the_field('global_hero_image_video_image_video_link'); ?>">
                                    </video>
                                <?php
                                    } elseif (get_field('global_hero_image_video_type_of_video') == 'youtube') { ?>
                                    <div class="youtube-player" data-id="<?= the_field('global_hero_image_video_image_video_youtube_video'); ?>"></div>
                                <?php } else { ?>
                                    <video controls="" preload="none" poster="">
                                        <source type="video/mp4" src="<?= the_field('global_hero_image_video_image_video_video_upload'); ?>">
                                    </video>
                                <?php } ?>
                            </div>

                        <?php 
                        } 
                    $button_link = get_field('button_link');
                    if (!empty($button_link)) : ?>
                        <div class="btn mobile">
                            <p class="angebot_btn synt_link" data-url="<?php the_field('button_link'); ?>">
                                <span><?php the_field('button_text'); ?></span>
                            </p>
                        </div>
                    <?php endif; ?>
                    <p><?php the_field('global_hero_image_video_content'); ?></p>
                    <?php
                    $button_link = get_field('button_link');
                    if (!empty($button_link)) : ?>
                        <div class="btn desk">
                            <p class="angebot_btn synt_link" data-url="<?php the_field('button_link'); ?>">
                                <span><?php the_field('button_text'); ?></span>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6">
            <?php
                if (get_field('select_type_media') == 'image') { ?>
                    <?php
                    $desk_image = get_field('global_hero_image_video_desktop_image');
                    if (!empty($desk_image)) : ?>
                        <img class="desk" src="<?php echo esc_url($desk_image['url']); ?>" alt="<?php echo esc_attr($desk_image['alt']); ?>" width="<?php echo esc_attr($desk_image['width']); ?>" height="<?php echo esc_attr($desk_image['height']); ?>" />
                    <?php endif; ?>
                       <?php } else {

                        ?>

                    <div class="">
                        <?php
                            $desk_video = get_field('global_hero_image_video_video_poster_desk');
                            if (!empty($desk_video)) : ?>
                            <img class="video_img desk" src="<?php echo esc_url($desk_video['url']); ?>" alt="<?php echo esc_attr($desk_video['alt']); ?>" width="<?php echo esc_attr($desk_video['width']); ?>" height="<?php echo esc_attr($desk_video['height']); ?>" />
                        <?php endif; ?>
                        <?php if (get_field('global_hero_image_video_type_of_video') == 'link') {
                                ?>
                            <video controls="" preload="none" poster="">
                                <source type="video/mp4" src="<?= the_field('global_hero_image_video_image_video_link'); ?>">
                            </video>
                        <?php
                            } elseif (get_field('global_hero_image_video_type_of_video') == 'youtube') { ?>
                            <div class="youtube-player" data-id="<?= the_field('global_hero_image_video_image_video_youtube_video'); ?>"></div>
                        <?php } else { ?>
                            <video controls="" preload="none" poster="">
                                <source type="video/mp4" src="<?= the_field('global_hero_image_video_image_video_video_upload'); ?>">
                            </video>
                        <?php } ?>
                    </div>

                <?php
                } ?>
            </div>
        </div>
    </div>
</section>