<?php
    $title          = get_field("title");
?>

<div id="thank_you" data-title="<?= $title ?>">
    <div class="columns">
        <div class="texts">
            <h3><?= get_field("content_title") ?></h3>
            <?= get_field("content_text") ?>
        </div>
        <img class="image" src="<?= get_field("image") ?>">
    </div>
    <div class="insta_box">
        <img src="<?= get_field("insta_icon") ?>">
        <div class="before_after">
            <?= get_field("before_after_text") ?>
        </div>
        <a href="<?= get_field("insta_button_link") ?>"><?= get_field("insta_button_text") ?></a>
    </div>
</div>

<?php /*
<div class="survey-form multistep-form w-form">
          <div>
              <div data-animation="slide" data-easing="ease-in-cubic" data-disable-swipe="1" data-duration="500" class="slider w-slider">
                  <div class="mask w-slider-mask">
                      <div class="step-intro">
                          <h3 class="step-heading "><?php the_field('step_heading_') ?></h3>
                      </div>
                      <div class="slide last w-slide s12">
                          <div class="mobile_swap">
                              <div class="d_flex">
                                  <div class="text">
                                      <h3><?php the_field('content_title') ?></h3>
                                      <img class="mobile" src="<?php the_field('desktop_image') ?>" alt="">
                                      <?php the_field('content_text') ?>
                                  </div>
                                  <div class="image desk">
                                      <img src="<?php the_field('desktop_image') ?>" alt="">
                                  </div>
                              </div>
                          </div>
                          <div class="insta-box">
                              <div class="d_flex">
                                  <div class="item1">
                                      <img src="<?php the_field('instra_icon_') ?>" alt="">
                                      <p><?php the_field('icon_text') ?></p>
                                  </div>
                                  <div class="item1">
                                      <p><?php the_field('before_after_text') ?></p>
                                  </div>
                                  <div class="item1">
                                      <a href="<?php the_field('instra_button_link') ?>" class="Jetzt"><?php the_field('instra_button_text') ?></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      */ ?>