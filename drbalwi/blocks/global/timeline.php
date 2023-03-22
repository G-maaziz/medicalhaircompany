<section class="timeline_sec <?php echo $block['className'] ?>"<?php if (get_field('timeline_background_color')) : ?> style="background-color: <?php the_field('timeline_background_color') ?>;" <?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="timeline">
                    <?php
                        $timeline_boxes = get_field('timeline_boxes');
                        if ($timeline_boxes){
                        foreach ($timeline_boxes as $key => $value) {
                            ?>
                            <div class="timeline_box">
                                <div class="timeline_box_content">
                                    <p class="jahr"><?= $value['jahr'] ?></p>
                                    <p><?= $value['content'] ?></p>
                                    <p><span><?= $value['where'] ?></span></p>
                                </div>
                            </div>
                    <?php
                        }}
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>