<section <?php if (!empty($block['className'])) : ?>class="sec_global_hero <?php echo $block['className'] ?>" <?php else : ?>class="sec_global_hero" <?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="global_hero_content">
                    <h1><?php the_field('global_hero_title'); ?></h1>
                    <p class="subtitle"><?php the_field('global_hero_sub_title'); ?></p>
                    <div class="you-video">

                        <?php
                        $image = get_field('desktop_image');
                        if (!empty($image)) { ?>
                            <div class="mobile poster_video">
                                <img class=" youtube-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                <?php
                                    $play_icon = get_field('play_icon');
                                    if (!empty($play_icon)) { ?>
                                    <img class="play_icon" src="<?php echo esc_url($play_icon['url']); ?>" alt="<?php echo esc_attr($play_icon['alt']); ?>" width="<?php echo esc_attr($play_icon['width']); ?>" height="<?php echo esc_attr($play_icon['height']); ?>" />
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                        <?php if (get_field('activation')) {
                            ?>
                            <div class="graft mobile">
                                <span><?php the_field('grafts') ?></span>
                                <p><?php the_field('text') ?></p>
                            </div>
                        <?php } ?>
                        <?php
                        $button_link = get_field('button_link');
                        if (!empty($button_link)) : ?>
                            <div class="btn mobile">
                                <p class="angebot_btn synt_link" data-url="<?php the_field('button_link'); ?>">
                                    <span><?php the_field('button_text'); ?></span> »
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php the_field('global_hero_content'); ?>
                        <?php
                        $button_link = get_field('button_link');
                        if (!empty($button_link)) : ?>
                            <div class="btn desk">
                                <p class="angebot_btn synt_link" data-url="<?php the_field('button_link'); ?>">
                                    <span><?php the_field('button_text'); ?></span> »
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6">
                    <?php
                    $image = get_field('desktop_image');
                    if (!empty($image)) { ?>
                        <div class="you-video">


                            <div class="desk poster_video">
                                <img class=" youtube-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                <?php
                                    $play_icon = get_field('play_icon');
                                    if (!empty($play_icon)) { ?>
                                    <img class="play_icon" src="<?php echo esc_url($play_icon['url']); ?>" alt="<?php echo esc_attr($play_icon['alt']); ?>" width="<?php echo esc_attr($play_icon['width']); ?>" height="<?php echo esc_attr($play_icon['height']); ?>" />
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (get_field('activation')) {
                        ?>
                        <div class="graft desk">
                            <span><?php the_field('grafts') ?></span>
                            <p><?php the_field('text') ?></p>
                        </div>
                    <?php } ?>

                </div>
            </div>
</section>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.poster_video').on('click', function() {
            if (jQuery(this).hasClass('mobile')) {
                jQuery(this).parent().html('<iframe style="float:left; max-width:100%;" width="375" height="200" src="https://www.youtube.com/embed/ENtBwmS01EM?autoplay=1" title="YouTube video player" frameborder="0" autoplay="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            } else {
                jQuery(this).parent().html('<iframe style="float:left; max-width:100%;" width="600" height="500" src="https://www.youtube.com/embed/ENtBwmS01EM?autoplay=1" title="YouTube video player" frameborder="0" autoplay="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            }
        });
    });
</script>