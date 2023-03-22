<?php
    $additional_class = $block['className'];
    $sec_id = $block['anchor'];
    $back_color = get_field('background_color');

    $title = get_field('vorher_nachher_title');
    $sub_title = get_field('vorher_nachher_subtitle');
    $content = get_field('vorher_nachher_text');

    $vorher_nachher = get_field('vorher_nachher_images');

?>
<section <?php if($additional_class) { ?>class="global_vorher_nachher <?= $additional_class ?>"<?php } else { ?>class="global_vorher_nachher"<?php } if($sec_id) { ?> id="<?php echo esc_attr( $sec_id ); ?>"<?php } if ($back_color) { ?> style="background-color: <?= $back_color ?>;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($title) { ?><h2><?= $title ?></h2><?php } ?>
                <?php if($sub_title) { ?><p class="subtitle"><?= $sub_title ?></p><?php } ?>
                <?= $content ? $content : '' ?>
                <div class="patient_list">
                    <?php if ($vorher_nachher) {
                        foreach ($vorher_nachher as $key => $value) { ?>
                            <div class="patient_list-element">
                                <p class="patient_name"><?= $value['patient_name'] ?></p>
                                <?php
                                    if (!empty($value['image'])) {
                                        echo wp_get_attachment_image($value['image']['id'], 'wp_image_size', false);
                                    } 
                                ?>
                            </div>
                    <?php }
                        } ?>
                </div>
                <?php if(count($vorher_nachher) > 4) { ?>
                    <button id="loadmore">Mehr Laden</button>
                <?php } ?>
            </div>
        </div>
    </div>
</section>