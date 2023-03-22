<?php
    $bg = get_field('background_color');
    $video = get_field('video_link');
    $video_poster = get_field('video_thumbnail');
?>

<section class="sec_video_title<?= !empty($block["className"]) ? " ".$block["className"] : "" ?>"<?php if($bg) { ?> style="background:<?= $bg ?>"<?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="video_content">
                    <h2><?php the_field("title_video"); ?></h2>
                        <?php if(get_field('subtitle_video')) { ?>
                            <p><?= the_field('subtitle_video') ?></p>
                            <?php } ?>
                            <?php if($video) {
                        ?>
                            <video controls preload="none" playsinline poster="<?= $video_poster ?>">
                                <source src="<?= $video ?>" type="video/mp4">
                            </video>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>