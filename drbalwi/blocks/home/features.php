<section class="sec_home_features">
    <div class="container">
        <div class="row">
            <!-- <div class="col-6">
                <h2><?= get_field("title") ?></h2>
                <?= get_field("content") ?>
                <a href="<?= get_field("button_link") ?>" class="btn btn-primary">
                    <?php the_field("button_text"); ?>
                </a>
            </div> -->
            <div class="col-12 icons">
                <div class="icon_group">
                    <div class="imgContainer">
                        <?php $image_1 = get_field("icon_1"); ?>
                        <img src="<?= $image_1['url'] ?>" alt="<?= $image_1['alt'] ?>" width="<?php echo esc_attr($image_1['width']); ?>" height="<?php echo esc_attr($image_1['height']); ?>">

                    </div>
                    <span><?= get_field("text_1") ?></span>
                </div>
                <div class="icon_group">
                    <div class="imgContainer">

                        <?php $image_2 = get_field("icon_2"); ?>
                        <img src="<?= $image_2['url'] ?>" alt="<?= $image_2['alt'] ?>" width="<?php echo esc_attr($image_2['width']); ?>" height="<?php echo esc_attr($image_2['height']); ?>">
                    </div>
                    <span><?= get_field("text_2") ?></span>
                </div>
                <div class="icon_group">
                    <div class="imgContainer">

                        <?php $image_3 = get_field("icon_3"); ?>
                        <img src="<?= $image_3['url'] ?>" alt="<?= $image_3['alt'] ?>" width="<?php echo esc_attr($image_3['width']); ?>" height="<?php echo esc_attr($image_3['height']); ?>">
                    </div>
                    <span><?= get_field("text_3") ?></span>
                </div>
            </div>
        </div>
    </div>
</section>