<?php

$layout2 = get_field("use_images_between_title_and_text") === true;
$center = get_field("centered") === true;
$images = get_field("images");
?>
<section class="sec_title_content<?= (get_field("theme") === false ? " dark" : "") . ($layout2 ? ' withImages' : '') . ($center ? ' centered' : '') ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (get_field("title_size") == "Medium") : ?>
                    <h3><?php the_field("title"); ?></h3>
                <?php else : ?>
                    <h2 class="linie"><?php the_field("title"); ?></h2>
                <?php endif; ?>

                <?php
                if ($layout2) { ?>
                    <div class="unt_icons">
                        <?php
                            foreach ($images as $img) { ?>
                            <img src="<?= $img["image"]["url"] ?>" alt="<?= $img["image"]["alt"] ?>"  width="<?php echo esc_attr($img["image"]['width']); ?>" height="<?php echo esc_attr($img["image"]['height']); ?>">
                        <?php
                            }
                            ?>
                    </div>
                <?php
                } ?>

                <?php the_field("text"); ?>
                <a href="<?= get_field("button_link") ?>" class="btn btn-primary">
                    <?= get_field("button_text"); ?>
                </a>
            </div>
        </div>
    </div>
</section>