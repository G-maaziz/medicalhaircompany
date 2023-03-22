<?php
    $title          = get_field("title");
    $gravity_id     = get_field("gravity_form");
    $name_id        = get_field("inputname")["select_input"];
    $email_id       = get_field("input_email")["select_input"];
    $tel_id         = get_field("input_phone")["select_input"];
    $name_ph        = get_field("inputname")["placeholder"];
    $email_ph       = get_field("input_email")["placeholder"];
    $tel_ph         = get_field("input_phone")["placeholder"];
?>

<div id="form" data-title="<?= $title ?>" data-form-id="<?= $gravity_id ?>">
    <label class="i_row icon_user">
        <input type="text" placeholder="<?= $name_ph ?>" id="inp_name" data-input-id="<?= $name_id ?>" autocomplete="off">
        <span class="inp_icon" id="icon_inp_name">
            <img src="/wp-content/themes/drbalwi/assets/images/cross.png" class="cross" alt="">
            <img src="/wp-content/themes/drbalwi/assets/images/check.png" class="check" alt="">
        </span>
    </label>
    <label class="i_row icon_email">
        <input type="email" placeholder="<?= $email_ph ?>" id="inp_email" data-input-id="<?= $email_id ?>" autocomplete="off">
        <span class="inp_icon" id="icon_inp_email">
            <img src="/wp-content/themes/drbalwi/assets/images/cross.png" class="cross" alt="">
            <img src="/wp-content/themes/drbalwi/assets/images/check.png" class="check" alt="">
        </span>
    </label>
    <div class="i_row" id="telefon_row">
        <select id="select_telefon">
            <optgroup label="Beliebte Vorwahlen">
                <option value="+49">DE (+49)</option>
                <option value="+43">AT (+43)</option>
            </optgroup>
            <optgroup label="Alle Vorwahlen" id="vorwahlen">
            </optgroup>
        </select>
        <input type="tel" placeholder="<?= $tel_ph ?>" id="inp_telefon" data-input-id="<?= $tel_id ?>" autocomplete="off">
        <span class="inp_icon" id="icon_inp_telefon">
            <img src="/wp-content/themes/drbalwi/assets/images/cross.png" class="cross" alt="">
            <img src="/wp-content/themes/drbalwi/assets/images/check.png" class="check" alt="">
        </span>
    </div>
    <label class="privacy">
        <input type="checkbox" id="privacy_check">
        <span><?= get_field("privacy_policy") ?></span>
        <span class="inp_icon" id="icon_privacy">
            <img src="/wp-content/themes/drbalwi/assets/images/cross.png" class="cross" alt="">
            <img src="/wp-content/themes/drbalwi/assets/images/check.png" class="check" alt="">
        </span>
    </label>
    <div id="sendBtn"><?= get_field("submit_button")["submit"] ?><div class="lds-dual-ring"></div></div>
</div>
<?php /*
    <input type="hidden" name="utm_source" value="input_<?php the_field('tracking_source') ?>">
    <input type="hidden" name="utm_medium" value="input_<?php the_field('tracking_medium') ?>">
    <input type="hidden" name="utm_content" value="input_<?php the_field('tracking_content') ?>">
    <input type="hidden" name="utm_term" value="input_<?php the_field('tracking_term') ?>">
    <input type="hidden" name="utm_campaign" value="input_<?php the_field('tracking_campaign') ?>">
    <input type="hidden" name="affwp_ref" value="input_<?php the_field('tracking_affwp_ref') ?>">
    <input type="hidden" name="gclid" value="input_<?php the_field('tracking_gclid') ?>">
*/ ?>


<input type="hidden" name="data_layer" value="<?php the_field('datalayer_event') ?>">