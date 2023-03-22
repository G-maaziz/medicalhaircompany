<section class="sectionWithTwoColumns" <?php if (get_field('two_columns_background_color')) : ?> style="background-color: <?php the_field('two_columns_background_color') ?>;" <?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Presseartikel</h2>
            </div>
            <?php
            $columns = get_field('two_columns_column');
            if ($columns) {
                foreach ($columns as $key => $value) {
                    ?>
                    <div class="col-6">
                        <div class="newpaperWrapper" <?php if (get_field('two_columns_box_backgorund_color')) : ?> style="background-color: <?php the_field('two_columns_box_backgorund_color') ?>;" <?php endif; ?>>

                            <div class="newpaperWrapper-top">
                                <h3><?= $value['news_box_title'] ?></h3>
                                <?php
                                        $image = $value['news_box_image'];
                                        if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                <?php endif; ?>
                                <?php
                                        $text = $value['news_box_text'];
                                        if (!empty($text)) : ?>
                                    <?= $value['news_box_text'] ?>
                                <?php endif; ?>
                            </div>

                            <div class="newpaperWrapper-bottom">
                                <?php if ($value['news_box_button_url']) {
                                            ?>
                                    <div class="btn">
                                        <p class="angebot_btn">
                                            <a href="<?= $value['news_box_button_url'] ?>" target="_blank" rel="noopener noreferrer"><?= $value['news_box_button_label'] ?></a>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>