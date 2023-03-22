<?php
    $pos = get_field("image_pos");
    $desk_left = $pos["desktop_pos"] == "Left";
    $mobile_above = $pos["mobile_pos"] == "Above";
    $icons = get_field("icons");
    $icons_number = count($icons);
    $image = get_field("image"); 
	$open_tab = get_field('should_open_new_tab');
?>

<section class="sec_title_text_image withIcons<?= !empty($block["className"]) ? " ".$block["className"] : "" ?>">
    <div class="container">
        <div class="row">
            <?php if($desk_left): ?>
                <div class="col-12 left_above<?= empty($image) ? 'fullwidthText' : '' ?>">
                <?php 
                    $image = get_field("image"); 
                    if ($image) { ?>
                    <div class="bild">
                        <?php 
                            if (!empty($image)) {
                                echo wp_get_attachment_image($image['id'], 'wp_image_size', false, array('class' => "fancy"));
                            }
                        ?>
                    </div>
                    <div class="title">
                        <?php if(get_field("title_size") == "Medium"): ?>
                            <h3><?php the_field("title"); ?></h3>
                        <?php else: ?>
                            <h2 class="linie"><?php the_field("title"); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php
                            the_field("text");
                            if(!empty(get_field("button_text")))
                            {
                            ?>
                                <a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if($open_tab) { ?> target="_blank"<?php } ?>>
                                <?= get_field("button_text"); ?>
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                    <?php } else { ?>
                        
                        <div class="fullWidth">
                            <?php if(get_field("title_size") == "Medium"): ?>
                                <h3><?php the_field("title"); ?></h3>
                            <?php else: ?>
                                <h2 class="linie"><?php the_field("title"); ?></h2>
                            <?php endif; ?>
                            <?php
                                the_field("text");
                                if(!empty(get_field("button_text")))
                                {
                                ?>
                                    <a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if($open_tab) { ?> target="_blank"<?php } ?>>
                                    <?= get_field("button_text"); ?>
                                <?php
                                }
                                ?>
                        </div>
                    <?php } ?>
                </div>
            <?php else: ?>
                <div class="col-12 right_above<?= empty($image) ? 'fullwidthText' : '' ?>">
                    <?php 
                    if ($image) { ?>
                    <div class="bild">
                        <?php 
                            if (!empty($image)) {
                                echo wp_get_attachment_image($image['id'], 'wp_image_size', false, array('class' => "fancy"));
                            }
                        ?>
                    </div>
                    <div class="title">
                        <?php if(get_field("title_size") == "Medium"): ?>
                            <h3><?php the_field("title"); ?></h3>
                        <?php else: ?>
                            <h2 class="linie"><?php the_field("title"); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php
                            the_field("text");
                            if(!empty(get_field("button_text")))
                            {
                            ?>
                                <a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if($open_tab) { ?> target="_blank"<?php } ?>>
                                <?= get_field("button_text"); ?>
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                    <?php } else { ?>
                        <div class="fullWidth">
                            <?php if(get_field("title_size") == "Medium"): ?>
                                <h3><?php the_field("title"); ?></h3>
                            <?php else: ?>
                                <h2 class="linie"><?php the_field("title"); ?></h2>
                            <?php endif; ?>
                            <?php
                                the_field("text");
                                if(!empty(get_field("button_text")))
                                {
                                ?>
                                    <a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if($open_tab) { ?> target="_blank"<?php } ?>>
                                    <?= get_field("button_text"); ?>
                                <?php
                                }
                                ?>
                        </div>
                    <?php } ?>
                </div>
            <?php endif;
            
            if(get_field('content_after_icons')) { ?>
                <div class="col-12 text-after">
                    <?= the_field('content_after_icons') ?>
                </div>
            <?php } ?>

            <div class="icons">

            <?php
            foreach($icons as $icon)
            { 
                if($icon['icon_links']) { ?>
                    <div class="col-2">
                        <a href="<?= $icon['icon_links'] ?>">
                            <?php 
                                if (!empty($icon["icon"] )) {
                                    echo wp_get_attachment_image($icon["icon"] ['id'], 'wp_image_size', false);
                                }
                            ?>
                            <span><?= $icon["label"] ?></span>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="col-2">
                    <?php 
                                if (!empty($icon["icon"] )) {
                                    echo wp_get_attachment_image($icon["icon"] ['id'], 'wp_image_size', false);
                                }
                            ?>
                        <span><?= $icon["label"] ?></span>
                    </div>
            <?php } }
            echo('</div>');
            ?>
        </div>
    </div>
</section>