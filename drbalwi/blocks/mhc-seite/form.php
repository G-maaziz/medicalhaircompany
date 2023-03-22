<?php
    $assets = get_stylesheet_directory_uri();
?>
<section class="form-contact">
    <div class="container">
        <title>
            <h3>KONTAKTFORMULAR</h3>
        </title>
        <div class="wrapper">
            <div class="main-swiper">
                <div class="header">Jetzt unverbindlich Preis einholen</div>
                <div class="inner ">
                    <div class="input-list">

                        <div class="input-box">
                            <div class="title">Vor- &amp; Nachname</div>
                            <div class="input-container">
                                <input type="text" name="name" placeholder="Vor- &amp; Nachname" required="" minlength="3">
                                <span class="inp_icon" id="icon_nameInput">
                                    <img decoding="async" src="<?= $assets ?>/assets/images/cross.png" class="cross" alt="">
                                    <img decoding="async" src="<?= $assets ?>/assets/images/check.png" class="check" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="title">E-Mail</div>
                            <div class="input-container">
                                <input type="email" name="email" placeholder="Ihre E-Mail-Adresse" required="" minlength="3">
                                <span class="inp_icon" id="icon_mailInput">
                                    <img decoding="async" src="<?= $assets ?>/assets/images/cross.png" class="cross" alt="">
                                    <img decoding="async" src="<?= $assets ?>/assets/images/check.png" class="check" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="title">Telefon</div>
                            <div class="input-box_inner">
                                <select id="select_telefon">
                                    <optgroup label="Beliebte Vorwahlen">
                                        <option value="+49">DE (+49)</option>
                                        <option value="+43">AT (+43)</option>
                                    </optgroup>
                                    <optgroup label="Alle Vorwahlen" id="vorwahlen">

                                    </optgroup>
                                </select>
                                <div class="input-container">
                                    <input type="tel" name="phone" placeholder="+49 123456789" required="" minlength="3">
                                    <span class="inp_icon" id="icon_telInput">
                                        <img decoding="async" src="<?= $assets ?>/assets/images/cross.png" class="cross" alt="">
                                        <img decoding="async" src="<?= $assets ?>/assets/images/check.png" class="check" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="title">Bemerkung</div>
                            <div class="input-container">
                                <textarea name="" id="" cols="30" rows="10" placeholder="Ihre Nachricht"></textarea>
                                <span class="inp_icon" id="icon_mailInput">
                                    <img decoding="async" src="<?= $assets ?>/assets/images/cross.png" class="cross" alt="">
                                    <img decoding="async" src="<?= $assets ?>/assets/images/check.png" class="check" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <label class="policy">
                        <input type="checkbox" name="policy" required>
                        <div>
                            <span class="checkmark"></span>
                            Ich habe die <a href="https://drpigment.de/datenschutz/">Datenschutzbestimmungen</a> gelesen und akzeptiere diese.
                            <span class="inp_icon">
                                <img decoding="async" src="<?= $assets ?>/assets/images/cross.png" class="cross" alt="">
                                <img decoding="async" src="<?= $assets ?>/assets/images/check.png" class="check" alt="">
                            </span>
                        </div>
                    </label>
                    <button type="button" id="completeForm" class="primary-btn">Haaranalyse anfordern</button>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="links">
                <a href="https://medicalhaircompany.com/impressum">Impressum</a>
                <a href="https://medicalhaircompany.com/datenschutzbelehrung">Datenschutzbelehrung</a>
            </div>
            <div class="footer-logo">
                <div class="logo">
                    <img decoding="async" class="logo" src="https://sharp-kirch.85-214-246-2.plesk.page/wp-content/uploads/2023/03/MHC-Logo-2023-Primary.svg">
                </div>
            </div>
        </div>
    </div>
</section>