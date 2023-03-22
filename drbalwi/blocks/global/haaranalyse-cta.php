<section class="haaranalyse">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2><?php the_field('headline') ?></h2>
                <p><?php the_field('text') ?></p>
            </div>
            <div class="col-6">
                <div class="haaranalyse_cta">
                    <img src="<?= get_field('image')['url'] ?>" alt="<?= get_field('image')['alt'] ?>" width="160" height="151">
                    <div class="btn">
                        <p class="angebot_btn synt_link" data-url="<?php the_field('button_link') ?>">
                            <span><?php the_field('button_label') ?> »</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>