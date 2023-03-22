<?php
    $title          = get_field("title");
    $gravity_id     = get_field("gravity_form");
    $data_layer = get_field('datalayer_event');
?>

<div id="upload_form" data-title="<?= $title ?>" data-form-id="<?= $gravity_id ?>">
    <div class="upload_boxes">
        <div class="uBox" data-type="front">
            <img class="img_man" src="<?= get_field("images")["man"]["fronthead"] ?>">
            <img class="img_woman" src="<?= get_field("images")["woman"]["fronthead"] ?>">
            <span><?= get_field("upload_labels")["front_label"] ?></span>
            <div class="icon_upload">
                <span data-upload-again="<?= get_field("upload_labels")["upload_again_label"] ?>">
                    <?= get_field("upload_labels")["upload_label"] ?>
                </span>
                <img src="/wp-content/themes/drbalwi/assets/images/upload_cam.svg">
                <img class="upload_check" src="/wp-content/themes/drbalwi/assets/images/check.png">
            </div>
            <input type="file" accept="image/*" data-input-id="<?= get_field("inputs_ids")["fronthead"] ?>">
        </div>
        <div class="uBox" data-type="back">
            <img class="img_man" src="<?= get_field("images")["man"]["backhead"] ?>">
            <img class="img_woman" src="<?= get_field("images")["woman"]["backhead"] ?>">
            <span><?= get_field("upload_labels")["back_label"] ?></span>
            <div class="icon_upload">
                <span data-upload-again="<?= get_field("upload_labels")["upload_again_label"] ?>">
                    <?= get_field("upload_labels")["upload_label"] ?>
                </span>
                <img src="/wp-content/themes/drbalwi/assets/images/upload_cam.svg">
                <img class="upload_check" src="/wp-content/themes/drbalwi/assets/images/check.png">
            </div>
            <input type="file" accept="image/*" data-input-id="<?= get_field("inputs_ids")["backhead"] ?>">
        </div>
        <div class="uBox" data-type="top">
            <img class="img_man" src="<?= get_field("images")["man"]["tophead"] ?>">
            <img class="img_woman" src="<?= get_field("images")["woman"]["tophead"] ?>">
            <span><?= get_field("upload_labels")["top_label"] ?></span>
            <div class="icon_upload">
                <span data-upload-again="<?= get_field("upload_labels")["upload_again_label"] ?>">
                    <?= get_field("upload_labels")["upload_label"] ?>
                </span>
                <img src="/wp-content/themes/drbalwi/assets/images/upload_cam.svg">
                <img class="upload_check" src="/wp-content/themes/drbalwi/assets/images/check.png">
            </div>
            <input type="file" accept="image/*" data-input-id="<?= get_field("inputs_ids")["tophead"] ?>">
        </div>
    </div>
    <div id="uploadBtn"><?= get_field("submit_label") ?><div class="lds-dual-ring"></div></div>

    <input type="hidden" id="upload_name" data-input-id="<?= get_field("inputs_ids")["upload_name"] ?>">
    <input type="hidden" id="upload_email" data-input-id="<?= get_field("inputs_ids")["upload_email"] ?>">
    <input type="hidden" id="upload_phone" data-input-id="<?= get_field("inputs_ids")["upload_phone"] ?>">
    <input type="hidden" id="data_layer" value="<?= $data_layer ?>">
</div>

















<?php /*
$image_url = get_field('images_mannlich_fronthead');
$image_url_1 = get_field('images_mannlich_backhead');
$image_url_2 = get_field('images_mannlich_tophead');

$front_label = get_field('upload_label_front_lable');
$back_label = get_field('upload_label_back_label');
$top_label = get_field('upload_label_top_label');

if (isset($_GET['gendar']) && $_GET['gendar'] == get_field('gander')) {
    $image_url = get_field('images_weiblich_fronthead');
    $image_url_1 = get_field('images_weiblich_backhead');
    $image_url_2 = get_field('images_weiblich_tophead');
}

$id = get_field('form_id');

$input1 = 'input_' . $id . '_' . get_field('inputs_ids_fronthead');
$input2 = 'input_' . $id . '_' . get_field('inputs_ids_backhead');
$input3 = 'input_' . $id . '_' . get_field('inputs_ids_tophead');

?>
<div class="survey-form multistep-form w-form">
    <div id="wf-form-Haartransplantation-Kalkulator---Elitehairtransplant" name="wf-form-Haartransplantation-Kalkulator---Elitehairtransplant" data-name="Haartransplantation Kalkulator - Elitehairtransplant">
        <div data-animation="slide" data-easing="ease-in-cubic" data-disable-swipe="1" data-duration="500" class="slider w-slider">
            <div class="mask w-slider-mask">

                <h4 class="title"> <?php the_field('title') ?>
                </h4>

                <div class="slide last w-slide s10">
                    <div class="step-intro">
                        <div class="multistep-survey-progress">
                            <div class="multistep-survey-progress-bar"></div>
                        </div>
                        <h2> <?php the_field('subtitle') ?>
                        </h2>
                        <h6> <?php the_field('text') ?>

                        </h6>
                    </div>
                    <div class="inputs-container">
                        <div class="three-columns w-row">
                            <div class="survey-column w-col w-col-4 w-col-small-6 w-col-tiny-tiny-stack">
                                <label class=" w-file-upload-label " for="<?= $input1 ?>">


                                    <div class="prevent-double-slide"></div>
                                    <div class="image-uploded">

                                        <img class="Foto01" src="<?= $image_url ?>" alt="">
                                    </div>
                                    <span class="multistep-survey-radio-text w-form-label">
                                        <div class="w-icon-file-upload-icon"></div> <?= $front_label ?>
                                    </span>

                                </label>
                            </div>
                            <div class="survey-column w-col w-col-4 w-col-small-6 w-col-tiny-tiny-stack">
                                <label class=" w-file-upload-label " for="<?= $input2 ?>">


                                    <div class="prevent-double-slide"></div>
                                    <div class="image-uploded">

                                        <img class="Foto02" src="<?= $image_url_1 ?>" alt="">
                                    </div>
                                    <span class="multistep-survey-radio-text w-form-label">
                                        <div class="w-icon-file-upload-icon"></div><?= $back_label ?>
                                    </span>

                                </label>
                            </div>
                            <div class="survey-column w-col w-col-4 w-col-small-6 w-col-tiny-tiny-stack">
                                <label class=" w-file-upload-label " for="<?= $input3 ?>">


                                    <div class="prevent-double-slide"></div>
                                    <div class="image-uploded">

                                        <img class="Foto03" src="<?= $image_url_2 ?>" alt="">
                                    </div>
                                    <span class="multistep-survey-radio-text w-form-label">
                                        <div class="w-icon-file-upload-icon"></div><?= $top_label ?>
                                    </span>

                                </label>
                            </div>
                        </div>
                        <?php

                        echo do_shortcode("[gravityform id='$id' title='false' description='false'   tabindex='49']"); ?>
                        <input type="submit" id="gf__valid" class="gform_button button vergleicher width-100  w-button" value="<?php the_field('submit_label') ?>">

                    </div>
                    <div class="check-list">
                        <?php the_field('text_') ?>
                    </div>

                </div>
            </div>
            <div class="left-arrow w-slider-arrow-left"></div>
            <div class="right-arrow w-slider-arrow-right"></div>
            <div id="sourceNav" class="slide-nav w-slider-nav"></div>
        </div>
    </div>

</div>

<script>
    jQuery(document).ready(function() {
        jQuery('#gf__valid').after("<div style='text-align: center;'><img class='spinner' src='https://i.ibb.co/xMHwhDt/loading-apple.gif'></div>");

        $('.acf-block-preview .gform_wrapper form').remove();

        $(document).ajaxComplete(function() {
            $('.acf-block-preview .gform_wrapper form').remove();
        });


        var id_field1 = '<?= $input1 ?>';
        var id_field2 = '<?= $input2 ?>';
        var id_field3 = '<?= $input3 ?>';

        jQuery('#gf__valid').on('click', function(e) {

            var file1 = jQuery("#" + id_field1).val();
            var file2 = jQuery("#" + id_field2).val();
            var file3 = jQuery("#" + id_field3).val();

            if (file1 && file2 && file3) {

                $(this).attr('disabled', 'disabled');

                $("form").submit();

                jQuery('body .spinner').show();
                
                $("#gf__valid").hide();
                jQuery("label").attr('style', 'border:1px solid #ccc !important;')

            } else {

                if (!file1) {
                    jQuery("label[for='" + id_field1 + "']").attr('style', 'border:1px solid red !important;')
                } else {
                    jQuery("label[for='" + id_field1 + "']").attr('style', 'border:1px solid #ccc !important;')
                }
                // 
                if (!file2) {
                    jQuery("label[for='" + id_field2 + "']").attr('style', 'border:1px solid red !important;')
                } else {
                    jQuery("label[for='" + id_field2 + "']").attr('style', 'border:1px solid #ccc !important;')
                }
                // 
                if (!file3) {
                    jQuery("label[for='" + id_field3 + "']").attr('style', 'border:1px solid red !important;');
                } else {
                    jQuery("label[for='" + id_field3 + "']").attr('style', 'border:1px solid #ccc !important;')
                }

                e.preventDefault();
            }

        });
        $('#' + id_field1).change(function(event) {
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $("img.Foto01").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
            jQuery("label[for='" + id_field1 + "']").attr('style', 'border:1px solid #ccc !important;').addClass('uploaded')
        });
        $('#' + id_field2).change(function(event) {
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $("img.Foto02").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
            jQuery("label[for='" + id_field2 + "']").attr('style', 'border:1px solid #ccc !important;').addClass('uploaded')
        });
        $('#' + id_field3).change(function(event) {
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $("img.Foto03").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
            jQuery("label[for='" + id_field3 + "']").attr('style', 'border:1px solid #ccc !important;').addClass('uploaded')
        });

    });
</script> */ ?>