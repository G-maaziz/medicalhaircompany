<section class="home_sec_8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="color-blue mb-4"><?php the_field('title') ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            $testimonial = get_field('testimonial');
            if ($testimonial) {
                foreach ($testimonial as $key => $value) { ?>

                    <div class="col-4">
                        <div class="text-center">
                            <img class="img-fluid " src="<?php echo esc_url($value['image']['url']); ?>" alt="<?php echo esc_attr($value['image']['alt']); ?>" width="<?php echo esc_attr($value['image']['width']); ?>" height="<?php echo esc_attr($value['image']['height']); ?>" />
                            <p class="fw-bold"><?= $value['name'] ?></p>
                            <p><?= $value['text'] ?></p>
                        </div>
                    </div>

            <?php
                }
            } ?>


        </div>
    </div>
</section>