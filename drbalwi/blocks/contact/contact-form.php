<section class="sec_hero_contact bg_color">
    <div class="container">
        <div class="row bg_white">
            <div class="col-6">
                <div class="hero_content">
                    <div class="max-500">
                        <h1><?php the_field('title') ?></h1>
                        <div class="mobile-desgin">
                            <?php the_field('text') ?>

                            <h2> <?php the_field('contact_information') ?>
                            </h2>

                            <?php
                            $contacts = get_field('contacts');
                            if ($contacts) {
                                foreach ($contacts as $key => $value) {
                                    ?>
                                    <div class="kontakt_info">
                                        <img src="<?= $value['icon']['url'] ?>" alt="<?= $value['icon']['alt'] ?>">
                                        <p><span class="synt_link" data-url="<?= $value['url'] ?>"><?= $value['label'] ?></span>
                                        </p>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                             <?php if(get_field('button_url')) { ?>
                <div class="col-12">
                    <div class="hairanalysis_btn">
                        <button onclick="window.location.href = <?php the_field('button_url') ?>">
                            <?php the_field('button_label') ?>
                        </button>
                    </div>
                </div>
            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 hair_calc form-bg">
                <div class="contact_form">
                    <div class="inner-contact">
                        <h2> <?php the_field('contact_form_label') ?> </h2>
                        <?php $id = get_field('form_id');
                        echo  do_shortcode('[gravityform id="' . $id . '" title="false" description="false" ajax="true" ]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
