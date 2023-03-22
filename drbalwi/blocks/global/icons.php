<?php
$icons = get_field("icons");
$c = count($icons);
$col = 4;
if ($c == 4)
    $col = 3;

$nebeneinander = get_field("layout") === true;
?>
<section class="sec_icons">
    <div class="container">
        <div class="row">
            <?php

            foreach ($icons as $icon) {
                ?>
                <div class="col-<?= $col . ($nebeneinander ? ' neben' : '') ?>">

                    <img src="<?= $icon["image"]['url'] ?>" alt="<?= $icon["image"]['alt'] ?>"  width="<?php echo esc_attr($icon["image"]['width']); ?>" height="<?php echo esc_attr($icon["image"]['height']); ?>">

                    <div class="img-label">
                        <?= $icon["text"] ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>