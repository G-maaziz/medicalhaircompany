<?php
$section_title = get_field('section_title');
$section_text = get_field('section_text');
$image_logo = get_field('image_logo');
$boxes = get_field('boxes');
$slider_text = get_field('slider_text');
$slider_title = get_field('slider_title');
$image = get_field('image');


?>


<section class="unsere-partner">
    <div class="container">
         <div>
            <p><?= $section_text ?></p>
            <p class="title"><strong><?= $section_title ?></strong></p>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php

                foreach ($boxes as $key => $value) {
                    ?>
                    <div class="swiper-slide">
                        <div>
                            <img src="<?= $value['image'] ?>" alt="">
                        </div>
                        <h3><?= $value['slider_title'] ?></h3>
                        <p><?= $value['slider_text'] ?></p>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>