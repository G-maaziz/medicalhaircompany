<?php
$pos = get_field("image_pos");
$desk_left = $pos["desktop_pos"] == "Left";
$mobile_above = $pos["mobile_pos"] == "Above";
$icons = get_field("icons");
$icons_number = count($icons);
?>

<section class="sec_title_text_image withIcons<?= !empty($block["className"]) ? " " . $block["className"] : "" ?>">
    <div class="container">
        <div class="row">
            <?php if ($desk_left) : ?>
                <div class="col-12 left_above">
                    <div class="bild">
                        <img class="fancy" src="<?php the_field("image"); ?>">
                    </div>
                    <div class="title">
                        <?php if (get_field("title_size") == "Medium") : ?>
                            <h3><?php the_field("title"); ?></h3>
                        <?php else : ?>
                            <h2 class="linie"><?php the_field("title"); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php
                            the_field("text");
                            ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="col-12 right_above">
                    <div class="bild">
                        <img class="fancy" src="<?php the_field("image"); ?>">
                    </div>
                    <div class="title">
                        <?php if (get_field("title_size") == "Medium") : ?>
                            <h3><?php the_field("title"); ?></h3>
                        <?php else : ?>
                            <h2 class="linie"><?php the_field("title"); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php
                            the_field("text");
                            ?>
                    </div>
                </div>
            <?php endif;

            echo ('<div class="icons">');
            foreach ($icons as $icon) { ?>
                <div class="<?= $icons_number == 5 ? 'col-2' : 'col-3' ?>">
                    <img src="<?= $icon["icon"]['url'] ?>" alt="<?= $icon["icon"]['alt'] ?>" width="<?php echo esc_attr($icon["icon"]['width']); ?>" height="<?php echo esc_attr($icon["icon"]['height']); ?>">
                    <span><?= $icon["label"] ?></span>
                </div>
            <?php
            }
            echo ('</div>');
            ?>
            <?php if (get_field('content_after_icons')) { ?>
                <div class="col-12">
                    <?= the_field('content_after_icons') ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>