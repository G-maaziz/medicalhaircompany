<?php
    $additional_class = $block['className'];
    $sec_id = $block['anchor'];
    $back_color = get_field('background_color');

    $title = get_field('methoden_sec_title');
    // $sub_title = get_field('methoden_sec_text');
    $content = get_field('methoden_sec_text');

    $methods_boxes = get_field('forschung_boxes');
    $count = count($methods_boxes);
?>
<section <?php if(!empty($additional_class)) { ?>class="infoGrafik <?= $additional_class ?>"<?php }else { ?>class="infoGrafik"<?php } if($sec_id) { ?> id="<?php echo esc_attr( $sec_id ); ?>"<?php } if ($back_color) { ?> style="background-color: <?= $back_color ?>;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <?php if ($title) : ?><h2><?= $title ?></h2><?php endif; ?>
                <?php echo ($content) ? $content : ''; ?>
            </div>
        </div>
        <div class="row row2">
            <?php if ($methods_boxes) {
                foreach ($methods_boxes as $key => $value) { ?>
                <div class="<?= ($count == 5) ? 'flexBasis_20' : (($count == 4) ? 'col-3' : 'col-4') ?>">
                    <div class="infoGrafik_box"<?php if($value['box_background_color']) : ?> style="background: <?= $value['box_background_color'] ?>"<?php endif; ?>>
                        <div class="infoGrafik_box-content">
                            <p class="infoGrafik_box-content-title">
                                <strong><?= $value['box_title'] ?></strong>
                            </p>
                            <?= $value['box_text'] ?>
                        </div>
                        <?php if ($value['button_link']) { ?>
                        <div class="page_link">
                            <p class="page_link_anchor"><a href="<?= $value['button_link'] ?>" class="cta_button" target="_blank" rel="noopener noreferrer"><?= $value['button_label'] ?></a></p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            <?php } } ?>
        </div>
    </div>
</section>
