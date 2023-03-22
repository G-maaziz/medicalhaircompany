<section class="certificate <?php echo $block['className'] ?>"<?php if (get_field('cer_background_color')) : ?> style="background-color: <?php the_field('cer_background_color') ?>;" <?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(get_field('cer_main_title')) : ?>
                                    <h2><?= the_field('cer_main_title') ?></h2>
                <?php endif; ?>
                <?php
                    $desk_image = get_field('siegel_image_desktop');
                    if (!empty($desk_image)) : ?>
                    <img class="video_img desk" src="<?php echo esc_url($desk_image['url']); ?>" alt="<?php echo esc_attr($desk_image['alt']); ?>" width="<?php echo esc_attr($desk_image['width']); ?>" height="<?php echo esc_attr($desk_image['height']); ?>" />
                <?php endif; ?>
                <?php
                    $mobile_image = get_field('siegel_image_mobile');
                    if (!empty($mobile_image)) : ?>
                    <img class="video_img mobile" src="<?php echo esc_url($mobile_image['url']); ?>" alt="<?php echo esc_attr($mobile_image['alt']); ?>" width="<?php echo esc_attr($mobile_image['width']); ?>" height="<?php echo esc_attr($mobile_image['height']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-3">
                <div onclick="document.getElementById('nexgen').style.display='block'">
                    <?php
                        $bg_image = get_field('nexgen_background_image');
                        if (!empty($bg_image)) : ?>
                        <img class="video_img" src="<?php echo esc_url($bg_image['url']); ?>" alt="<?php echo esc_attr($bg_image['alt']); ?>" width="<?php echo esc_attr($bg_image['width']); ?>" height="<?php echo esc_attr($bg_image['height']); ?>" />
                    <?php endif; ?>
                    <div class="overlay_content">
                        <p><span>+</span></p>
                        <p><?= the_field('certificate_box_content') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div onclick="document.getElementById('iact').style.display='block'">
                    <?php
                        $iact = get_field('iact_background_image');
                        if (!empty($iact)) : ?>
                        <img class="video_img" src="<?php echo esc_url($iact['url']); ?>" alt="<?php echo esc_attr($iact['alt']); ?>" width="<?php echo esc_attr($iact['width']); ?>" height="<?php echo esc_attr($iact['height']); ?>" />
                    <?php endif; ?>
                    <div class="overlay_content">
                        <p><span>+</span></p>
                        <p><?= the_field('certificate_box_content_2') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div onclick="document.getElementById('international').style.display='block'">
                    <?php
                        $stem = get_field('stem_cell_transplantation_background_image');
                        if (!empty($stem)) : ?>
                        <img class="video_img" src="<?php echo esc_url($stem['url']); ?>" alt="<?php echo esc_attr($stem['alt']); ?>" width="<?php echo esc_attr($stem['width']); ?>" height="<?php echo esc_attr($stem['height']); ?>" />
                    <?php endif; ?>
                    <div class="overlay_content">
                        <p><span>+</span></p>
                        <p><?= the_field('certificate_box_content_3') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div onclick="document.getElementById('virtual_2020').style.display='block'">
                    <?php
                        $virtual_bg = get_field('virtual_2020_background_image');
                        if (!empty($virtual_bg)) : ?>
                        <img class="video_img" src="<?php echo esc_url($virtual_bg['url']); ?>" alt="<?php echo esc_attr($virtual_bg['alt']); ?>" width="<?php echo esc_attr($virtual_bg['width']); ?>" height="<?php echo esc_attr($virtual_bg['height']); ?>" />
                    <?php endif; ?>
                    <div class="overlay_content">
                        <p><span>+</span></p>
                        <p><?= the_field('certificate_box_content_4') ?></p>
                    </div>
                </div>
            </div>
            <?php if (get_field('cer_div_url')) {
                    ?>
                <div class="col-12 center">
                    <div class="btn">
                        <p class="angebot_btn synt_link" data-url="<?php the_field('cer_div_url') ?>">
                            <?php the_field('cer_div_label') ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="popup" id="nexgen">
                    <div class="popup_photo">
                        <?php
                            $nexgen = get_field('nexgen_certificate');
                            if (!empty($mobile_image)) : ?>
                            <img class="video_img" src="<?php echo esc_url($nexgen['url']); ?>" alt="<?php echo esc_attr($nexgen['alt']); ?>" width="<?php echo esc_attr($nexgen['width']); ?>" height="<?php echo esc_attr($nexgen['height']); ?>" />
                        <?php endif; ?>
                    </div>
                    <span onclick="document.getElementById('nexgen').style.display='none'" class="popup_close">&times;</span>
                </div>
                <div class="popup" id="iact">
                    <div class="popup_photo">
                        <?php
                            $iact = get_field('iact_certificate');
                            if (!empty($mobile_image)) : ?>
                            <img class="video_img" src="<?php echo esc_url($iact['url']); ?>" alt="<?php echo esc_attr($iact['alt']); ?>" width="<?php echo esc_attr($iact['width']); ?>" height="<?php echo esc_attr($iact['height']); ?>" />
                        <?php endif; ?>
                    </div>
                    <span onclick="document.getElementById('iact').style.display='none'" class="popup_close">&times;</span>
                </div>
                <div class="popup" id="international">
                    <div class="popup_photo">
                        <?php
                            $stem_cell = get_field('stem_cell_transplantation_certificate');
                            if (!empty($mobile_image)) : ?>
                            <img class="video_img" src="<?php echo esc_url($stem_cell['url']); ?>" alt="<?php echo esc_attr($stem_cell['alt']); ?>" width="<?php echo esc_attr($stem_cell['width']); ?>" height="<?php echo esc_attr($stem_cell['height']); ?>" />
                        <?php endif; ?>
                    </div>
                    <span onclick="document.getElementById('international').style.display='none'" class="popup_close">&times;</span>
                </div>
                <div class="popup" id="virtual_2020">
                    <div class="popup_photo">
                        <?php
                            $virtual_2020 = get_field('virtual_2020_certificate');
                            if (!empty($virtual_2020)) : ?>
                            <img class="video_img" src="<?php echo esc_url($virtual_2020['url']); ?>" alt="<?php echo esc_attr($virtual_2020['alt']); ?>" width="<?php echo esc_attr($virtual_2020['width']); ?>" height="<?php echo esc_attr($virtual_2020['height']); ?>" />
                        <?php endif; ?>
                    </div>
                    <span onclick="document.getElementById('virtual_2020').style.display='none'" class="popup_close">&times;</span>
                </div>
            </div>
        </div>
    </div>
</section>