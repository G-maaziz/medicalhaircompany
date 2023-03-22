<section class="sec_home_vorteile<?= (!empty($block["className"]) ? " ".$block["className"] : "") ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="noMargin"><?= get_field("title") ?></h2>
                <h2 class="subtitle"><?= get_field("subtitle") ?></h2>
                <div class="vorteile">
                    <?php
                    $vorteile = get_field("vorteile");
                    foreach ($vorteile as $vorteil) {
                        ?>
                        <div>
                            <?= $vorteil["text"] ?>
                        </div>
                    <?php
                    }

                    if (!empty(get_field("button_text"))) {
                        ?>
                        <a href="<?= get_field("button_link") ?>" class="btn btn-primary">
                            <?= get_field("button_text"); ?>
                        </a>
                    <?php
                    }
                    ?>
                </div> <?php $image = get_field("image");
                        if (!empty($image)) {
                            echo wp_get_attachment_image($image['id'], 'wp_image_size', false, array('class' => "vorteil_image"));
                        }
                    ?>
            </div>
        </div>
    </div>
</section>