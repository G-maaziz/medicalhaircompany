<?php
    $pos = get_field("image_pos");
    $desk_left = $pos["desktop_pos"] == "Left";
    $mobile_above = $pos["mobile_pos"] == "Above";
    $meiden_art = get_field('art_of_media');
    $image = get_field('image_text');
    $video = get_field('video_source');
    $art_video = get_field('video_source_art_of_video_upload');
    $video_poster = get_field('video_source_video_poster');
    $video_link = get_field('video_source_video_link');
    $video_file = get_field('video_source_video_file');

    $hTag = (!empty($block["className"]) && strpos($block["className"], "home") !== false) ? "h1" : "h2";
	$new_tab = get_field('should_open_a_new_tab');
?>

<section class="sec_title_text_image<?= (!empty($block["className"]) ? " ".$block["className"] : "") . (get_field("theme") === true ? ' dark' : '') ?>">
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
                            <h3><?php the_field("title"); ?></h3>
                            <?php if(get_field('subtitle')) { ?>
                                <h3 class="subtitle"><?= get_field('subtitle') ?></h3>
                                <?php } ?>
                        <?php else: ?>
                            <<?= $hTag ?> class="linie"><?php the_field("title"); ?></<?= $hTag ?>>
                            <?php if(get_field('subtitle')) { ?>
                                <h2 class="subtitle"><?= get_field('subtitle') ?></h2>
                                <?php } ?>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php the_field("text"); 
                            if(get_field("button_link")) {
                        ?>
                        <a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if($new_tab) { ?> target="_blank"<?php } ?>>
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
                            <h3><?php the_field("title"); ?></h3>
                            <?php if(get_field('subtitle')) { ?>
                                <h3 class="subtitle"><?= get_field('subtitle') ?></h3>
                                <?php } ?>
                        <?php else: ?>
                            <<?= $hTag ?> class="linie"><?php the_field("title"); ?></<?= $hTag ?>>
                            <?php if(get_field('subtitle')) { ?>
                                <h2 class="subtitle"><?= get_field('subtitle') ?></h2>
                                <?php } ?>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php the_field("text"); 
                            if(get_field("button_link")) {
                        ?>
                        <a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if($new_tab) { ?> target="_blank"<?php } ?>>
                            <?php the_field("button_text"); ?>
                        </a>
                        <?php } ?>
                    </div>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>