<?php
    $bg = get_field('background_color');
    $pos = get_field("image_pos_pro");
    $desk_left = $pos["desktop_pos"] == "Left";
    $mobile_above = $pos["mobile_pos"] == "Above";
    $meiden_art = get_field('art_of_media_pro');
    $image = get_field('image_text_pro');
    $video = get_field('video_source_pro');
    $art_video = get_field('video_source_pro_art_of_video_upload');
    $video_poster = get_field('video_source_pro_video_poster');
    $video_link = get_field('video_source_pro_video_link');
    $video_file = get_field('video_source_pro_video_file');
?>

<section class="sec_title_text_image<?= !empty($block["className"]) ? " ".$block["className"] : "" ?>"<?php if($bg) { ?> style="background:<?= $bg ?>"<?php } ?>>
    <div class="container">
        <div class="row">
            <?php if($desk_left): ?>
                <div class="col-12 left_<?= $mobile_above ? "above" : "below" ?>">
                    <div class="bild">
                        <?php
                            if ($meiden_art == 'image') {
                                if (!empty($image)) {
                                    echo wp_get_attachment_image($image['id'], 'wp_image_size', false, array('class' => "image"));
                                }
                            } else { ?>
                                <video controls preload="none" playsinline poster="<?= $video_poster ?>">
                                    <source src="<?= ($art_video == 'link') ? $video_link : $video_file ?>" type="video/mp4">
                                </video>
                        <?php } ?>
                    </div>
                    <div class="title">
                        <?php if(get_field("title_size") == "Medium"): ?>
                            <h3><?php the_field("title_pro"); ?></h3>
                        <?php else: ?>
                            <h2 class="linie"><?php the_field("title_pro"); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php the_field("text_pro");

                        if(get_field("button_link")) {
                        ?>
                        <a href="<?= get_field("button_link") ?>" target="_blank" class="btn btn-primary desk">
                            <?php the_field("button_text"); ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-12 right_<?= $mobile_above ? "above" : "below" ?>">
                <div class="bild">
                        <?php
                            if ($meiden_art == 'image') {
                                if (!empty($image)) {
                                    echo wp_get_attachment_image($image['id'], 'wp_image_size', false, array('class' => "image"));
                                }
                            } else { ?>
                                <video controls preload="none" playsinline poster="<?= $video_poster ?>">
                                    <source src="<?= ($art_video == 'link') ? $video_link : $video_file ?>" type="video/mp4">
                                </video>
                        <?php } ?>
                    </div>
                    <div class="title">
                        <?php if(get_field("title_size") == "Medium"): ?>
                            <h3><?php the_field("title_pro"); ?></h3>
                        <?php else: ?>
                            <h2 class="linie"><?php the_field("title_pro"); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php the_field("text_pro");

                        if(get_field("button_link")) {
                            ?>
                            <a href="<?= get_field("button_link") ?>" target="_blank" class="btn btn-primary desk">
                                <?php the_field("button_text"); ?>
                            </a>
                            <?php } 
                        ?>
                    </div>

                </div>
            <?php endif; ?>
            <div class="col-12">
                <div class="produkt_vorteile">
                    <h3><?= the_field('vorteil_title') ?></h3>
                    <ul>
                        <?php 
                        $vorteile_list = get_field('advantages_list_item');
                        if ($vorteile_list) {
                                        foreach ($vorteile_list as $key => $value) { ?>
                                        <li><?= $value['text'] ?></li>
                        <?php } } ?>
                    </ul>
                </div>
                <?php if(get_field("button_link")) {
                        ?>
                        <div class="mobile">
                            <a href="<?= get_field("button_link") ?>" target="_blank" class="btn btn-primary">
                                <?php the_field("button_text"); ?>
                            </a>
                        </div>
                        <?php } ?>
            </div>
        </div>
    </div>
</section>