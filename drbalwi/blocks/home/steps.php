<?php
$steps = get_field('step');
$steps_number = count($steps);
$twolines = $steps_number > 3;
?>
<section class="sec_home_steps <?= !empty($block["className"]) ? " " . $block["className"] : "" ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="noMargin"><?= get_field("title") ?></h2>
                <p class="subtitle"><?= get_field("subtitle") ?></p>
                <?= get_field("body_text") ?>
                <div class="steps">
                    <?php
                    foreach ($steps as $key => $step) { ?>
                        <div class="step col-4">
                            <?php if (get_field('steps_images') == 'without') { ?><div class="stepNumber"><span class="p_number"><?= $key + 1; ?></span></div><?php } ?>
                            <img src="<?= $step['image_1']['url'] ?>" alt="<?= $step['image_1']['alt'] ?>" width="<?php echo esc_attr($step['image_1']['width']); ?>" height="<?php echo esc_attr($step['image_1']['height']); ?>">
                            <div class="step_label">
                                <?= $step['label_1'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>