<section class="<?= get_field('second_paragraph_full_width') ? 'sec_home_price new_bg' : 'sec_home_price' ?>">
    <div class="container">
        <div class="row">
            <div class="<?= get_field('second_paragraph_full_width') ? 'price_last_fullWidth_content' : 'col-12' ?>">
                <h2><?= get_field("title") ?></h2>
                <div class="first_content">
                    <?= get_field("first_paragraph") ?>
                </div>
                <?php $image = get_field("image");
                if ($image) { ?>
                    <img src="<?= $image['url']  ?>" alt="<?= $image['alt']  ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>">
                <?php } ?>
                <div class=" secondP">
                    <?= get_field("second_paragraph") ?>
                    <?php if (get_field("button_link")) { ?>
                        <a href="<?= get_field("button_link") ?>" class="btn btn-tertiary"><?= get_field("button_text") ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>