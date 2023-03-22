<section class="bg-gray-2 sec_usp">
    <div class="container">
        <div class="row odd-even-bg">

            
            <?php
            $items = get_field('items');
            if ($items) {
                foreach ($items as $key => $value) {
                    $image_desk = $value['images']['desktop'];
                    $image_mobile = $value['images']['mobile'];
                    ?>
                    <div class="col-3 odd-even-bg-item">
                        <div class="item">

                            <img class="img-fluid  " src="<?php echo esc_url($image_mobile['url']); ?>" alt="<?php echo esc_attr($image_mobile['alt']); ?>" width="<?php echo esc_attr($image_mobile['width']); ?>" height="<?php echo esc_attr($image_mobile['height']); ?>" />


                            <span class="item_title"><?= $value['title'] ?></span>
                            <p><?= $value['text'] ?></p>
                        </div>
                    </div>


            <?php
                }
            } ?>


        </div>
    </div>
</section>