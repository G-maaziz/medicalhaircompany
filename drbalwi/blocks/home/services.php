<section class="bg-gray home_sec_5 ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text">
                    <h2 class="color-blue"><?php the_field('title') ?></h2>
                    <?php the_field('text') ?>
                </div>
            </div>
        </div>
        <div class="row row2">

            <?php
            $services = get_field('services');
            $column_number = get_field('column_number') ? 12 / intval(get_field('column_number')) : '4';


            if ($services) {
                foreach ($services as $key => $value) { ?>
                    <div class="col-<?= $column_number ?>">
                        <a href="<?= $value['link'] ?>">
                            <div class="mb-2 mt-2 text-center">

                                <div class="content">

                                    <p><?= $value['text'] ?></p>

                                    <img class="img-fluid" src="<?php echo esc_url($value['image']['url']); ?>" alt="<?php echo esc_attr($value['image']['alt']); ?>" width="<?php echo esc_attr($value['image']['width']); ?>" height="<?php echo esc_attr($value['image']['height']); ?>" />

                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            } ?>

        </div>
    </div>
</section>