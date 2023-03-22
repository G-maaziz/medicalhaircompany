<section class="global_image_text <?php echo $block['className'] ?>"<?php if($block['anchor']) : ?> id="<?php echo esc_attr( $block['anchor'] ); ?>"<?php endif; ?><?php if (get_field('global_image_text_bg_color')) : ?> style="background-color: <?php the_field('global_image_text_bg_color') ?>;" <?php endif; ?>>
    <div class="grid-container container <?= (get_field('global_image_text_image_side') == 'left') ? 'left' : '' ?>">
        <div class="item1">
            <h2><?php the_field('global_image_text_headline') ?><?php if (get_field('global_image_text_subtitle')) : ?><span class="subtitle"> <?php the_field('global_image_text_subtitle') ?></span><?php endif; ?></h2>
        </div>
        <div class="item2">
            <?php
            if (get_field('select_type') == 'image') {

                $desk_image = get_field('img_video_desktop_image');
                $mobile_image = get_field('img_video_mobile_image');

                $image_for_mobile = get_field('img_video_image_for_mobile');

                $image_class_desk = ($image_for_mobile) ? 'desk' : '';
                $image_class_mobile = ($image_for_mobile) ? 'mobile' : '';


                if (!empty($desk_image)) {
                    echo wp_get_attachment_image($desk_image['id'], 'wp_image_size', false, array('class' => $image_class_desk));
                }

                if ($image_for_mobile) {
                    echo wp_get_attachment_image($mobile_image['id'], 'wp_image_size', false, array('class' => $image_class_mobile));
                }
            } else {

                ?>
                <div class="video">
                    <div class="poster_video">

                        <?php
                            $image = get_field('img_video_poster_image_desktop');
                            if (!empty($image)) : ?>
                            <img class="video_img " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                        <?php endif; ?>


                        <?php
                            $play_icon = get_field('img_video_play_icon');
                            if (!empty($play_icon)) : ?>
                            <img class="play_icon" src="<?php echo esc_url($play_icon['url']); ?>" alt="<?php echo esc_attr($play_icon['alt']); ?>" width="<?php echo esc_attr($play_icon['width']); ?>" height="<?php echo esc_attr($play_icon['height']); ?>" />
                        <?php endif; ?>
                    </div>

                    <?php if (get_field('img_video_video_source') == 'link') {
                            ?>
                        <video controls="" preload="none">
                            <source type="video/mp4" src="<?= the_field('img_video_video_link'); ?>">
                            <?php
                                    $tracks = get_field('img_video_track');
                                    if ($tracks) {
                                        foreach ($tracks as $key => $value) {
                                            ?>
                                    <track label="<?= $value['label'] ?>" kind="subtitles" srclang="<?= $value['srclang'] ?>" src="<?= $value['src'] ?>" <?= ($value['default']) ? 'default' : '' ?>>

                            <?php
                                        }
                                    } ?>

                        </video>

                    <?php
                        } else { ?>

                        <video controls="" preload="none">
                            <source type="video/mp4" src="<?= the_field('img_video_video_uplaod'); ?>">
                            <?php
                                    $tracks = get_field('img_video_track');
                                    if ($tracks) {
                                        foreach ($tracks as $key => $value) {
                                            ?>
                                    <track label="<?= $value['label'] ?>" kind="subtitles" srclang="<?= $value['srclang'] ?>" src="<?= $value['src'] ?>" <?= ($value['default']) ? 'default' : '' ?>>

                            <?php
                                        }
                                    } ?>
                        </video>
                    <?php } ?>
                </div>

            <?php
            } ?>
            <?php if (get_field('grafts_info_activation')) : ?>
                <div class="graft ">
                    <span><?php the_field('grafts_info_grafts') ?></span>
                    <p><?php the_field('grafts_info_text') ?></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="item3">
            <?php the_field('global_image_text_text') ?>
            <?php if (get_field('global_image_text_button_url')) { ?>
                <div class="btn">
                    <p class="angebot_btn synt_link" data-url="<?php the_field('global_image_text_button_url') ?>">
                        <?php the_field('global_image_text_button_label') ?> »
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>