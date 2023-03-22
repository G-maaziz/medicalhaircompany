<?php
$images = get_field("icons");
$untereinander = get_field("layout") === true;
?>
<section class="sec_icon_title<?= !empty($block["className"]) ? " " . $block["className"] : "" ?>">
    <div class="container">
        <div class="row">
            <?php
            if (!empty(get_field("title_icon_text"))) {
                if (!$untereinander) {
                    ?>
                    <div class="col-6">
                        <h2><?php the_field("title"); ?></h2>
                        <?= get_field('title_icon_text') ?>
                        <a href="<?= get_field("button_link") ?>" class="btn btn-primary">
                            <?php the_field("button_text"); ?>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="icons<?= count($images) == 3 ? ' triple' : '' ?>">
                            <?php
                                    foreach ($images as $img) { ?>
                                <img src="<?= $img["icon"]["url"] ?>" alt="<?= $img["icon"]["alt"] ?>" width="<?php echo esc_attr($img["icon"]['width']); ?>" height="<?php echo esc_attr($img["icon"]['height']); ?>">
                            <?php
                                    }
                                    ?>
                        </div>
                    </div>
                <?php
                    } else { ?>
                    <div class="col-12">
                        <h2><?php the_field("title"); ?></h2>
                    </div>
                    <div class="col-12 unt_icons">
                        <?php
                                foreach ($images as $img) { ?>
                            <img src="<?= $img["icon"]["url"] ?>" alt="<?= $img["icon"]["alt"] ?>" width="<?php echo esc_attr($img["icon"]['width']); ?>" height="<?php echo esc_attr($img["icon"]['height']); ?>">
                        <?php
                                }
                                ?>
                    </div>
                    <div class="col-12">
                        <?= get_field('title_icon_text') ?>
                    </div>
                    <div class="col-12">
                        <a href="<?= get_field("button_link") ?>" class="btn btn-primary">
                            <?php the_field("button_text"); ?>
                        </a>
                    </div>
                <?php
                    }
                } else { ?>
                <div class="col-12">
                    <h2><?php the_field("title"); ?></h2>
                    <div class="icons i_12<?= count($images) == 3 ? ' triple' : '' ?>">
                        <?php
                            foreach ($images as $img) { ?>
                            <img src="<?= $img["icon"] ?>" alt="<?= $img["icon"]["alt"] ?>" width="<?php echo esc_attr($img["icon"]['width']); ?>" height="<?php echo esc_attr($img["icon"]['height']); ?>">
                        <?php
                            }
                            ?>
                    </div>
                    <a href="<?= get_field("button_link") ?>" class="btn btn-primary">
                        <?php the_field("button_text"); ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>