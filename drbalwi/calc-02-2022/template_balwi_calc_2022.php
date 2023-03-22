<?php /* Template Name: balwi-calc-new-2022 */

$build_link = get_stylesheet_directory_uri() . '/calc-02-2022/assets';

?>

<!DOCTYPE html>
<html lang="de-DE">

<head>
	<meta charset="UTF-8">
	<meta name='robots' content='noindex, nofollow' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="theme-color" content="#2569A8">
    <link rel="stylesheet" href="<?= $build_link ?>/css/main.min.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6V26B6');</script>
<!-- End Google Tag Manager -->
</head>
<body>
  
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6V26B6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="header-inner">
            <button type="button" id="prevButton"><img src="<?= $build_link ?>/images/arrow.svg"></button>
            <a href="#" class="logo"><img src="https://drbalwi.com/wp-content/uploads/2022/01/DrBalwi_Logo_Final_web-01-01.svg"></a>
        </div>
    </header>


    <main>
        <div class="wrapper">
            <div class="calc-slide">
                <div class="item for-man for-woman" data-step="1">
                    <div class="md-box">
                        <div class="cover"><img src="<?= $build_link ?>/images/dr.jpg"></div>
                        <h2>Hallo, ich bin Dr. Balwi!</h2>
                        <p>Wir freuen uns, Ihnen eine individuelle Haaranalyse zu erstellen. Bitte beantworten Sie dafür die folgenden Fragen.</p>
                    </div>
                    <button type="button" id="startButton">LASSEN SIE UNS BEGINNEN!</button>
                </div>
                <!--  -->
                <div class="item for-man for-woman" data-step="2">
                    <div class="form-choies">
                        <h2>Was ist Ihr Geschlecht?</h2>
                        <div class="choie-list">
                            <label class="choie-list_item">
                                <input type="radio" name="input1" value="Weiblich" data-value="woman">
                                <div><img src="<?= $build_link ?>/images/input1_1.jpg">Weiblich</div>
                                
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input1" value="Männlich" data-value="man">
                                <div><img src="<?= $build_link ?>/images/input1_2.jpg"> Männlich</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item for-man" data-step="3">
                    <div class="form-choies">
                        <h2>Welcher Bereich stört Sie?</h2>
                        <div class="choie-list">
                            <label class="choie-list_item">
                                <input type="radio" name="input2" value="Geheimratsecken" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/m_input2_1.jpg">Geheimratsecken</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input2" value="Tonsur" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/m_input2_2.jpg"> Tonsur</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input2" value="Bart" class="one-choice-cb" data-bart>
                                <div><img src="<?= $build_link ?>/images/m_input2_3.jpg"> Bart</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman" data-step="3">
                    <div class="form-choies">
                        <h2>Welcher Bereich stört Sie?</h2>
                        <div class="choie-list">
                            <label class="choie-list_item">
                                <input type="radio" name="input2" value="Geheimratsecken" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/w_input2_1.jpg">Geheimratsecken</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input2" value="Tonsur" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/w_input2_2.jpg"> Tonsur</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input2" value="Augenbrauen" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/w_input2_3.jpg"> Augenbrauen</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item for-man" data-step="4">
                    <div class="form-choies">
                        <h2>Welche Haarfarbe haben Sie?</h2>
                        <div class="choie-list">
                            <label class="choie-list_item">
                                <input type="radio" name="input3" value="Hell" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/m_input3_1.jpg">Hell</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input3" value="Dunkel" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/m_input3_2.jpg"> Dunkel</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman" data-step="4">
                    <div class="form-choies">
                        <h2>Welche Haarfarbe haben Sie?</h2>
                        <div class="choie-list">
                            <label class="choie-list_item">
                                <input type="radio" name="input3" value="Hell" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/w_input3_1.jpg">Hell</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input3" value="Dunkel" class="one-choice-cb">
                                <div><img src="<?= $build_link ?>/images/w_input3_2.jpg"> Dunkel</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item first-result for-man for-woman" data-step="5">
                    <div class="box-circle">
                        „Gut aussehen ist nicht für alle gleich!“
                    </div>
                    <div class="box-md">
                        <img src="<?= $build_link ?>/images/result-dc-1.jpg" alt="">
                        <p>
                            <span>Super!</span>
                            <span>Unsere Experten </span>
                            <span>beginnen bereits</span>
                            <span>Ihre Daten zu</span>
                            <span>analysieren!</span>
                        </p>
                    </div>
                    <button type="button" id="firstResultButton">Alles klar</button>
                </div>
                <!--  -->
                <div class="item for-man no-padding-t" data-step="6">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/new_11.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Wie Alt sind Sie?</h2>
                        <div class="choie-list boxing">
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="21-30" class="one-choice-cb">
                                <div>21-30</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="31-40" class="one-choice-cb">
                                <div>31-40</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="41-50" class="one-choice-cb">
                                <div>41-50</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="41-50" class="one-choice-cb">
                                <div>51+</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman no-padding-t" data-step="6">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/w_cover_1.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Wie Alt sind Sie?</h2>
                        <div class="choie-list boxing">
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="21-30" class="one-choice-cb">
                                <div>21-30</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="31-40" class="one-choice-cb">
                                <div>31-40</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="41-50" class="one-choice-cb">
                                <div>41-50</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input4" value="41-50" class="one-choice-cb">
                                <div>51+</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item for-man no-padding-t" data-step="7">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/m_cover_2.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Welche diese Aussagen trifft auf Sie zu?</h2>
                        <div class="choie-list texting">
                            <label class="choie-list_item">
                                <input type="radio" name="input5" value="Ich mache mir nahezu tagtäglich Sorgen wegen dem Haarausfall, fühle mich unglücklich und habe kaum noch Selbstbewusstsein."  class="one-choice-cb">
                                <div>Ich mache mir nahezu tagtäglich Sorgen wegen dem Haarausfall, fühle mich unglücklich und habe kaum noch Selbstbewusstsein.</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input5" value="Ich möchte einfach nur wieder volles Haar um besser auszusehen, leide deswegen aber nicht." class="one-choice-cb">
                                <div>Ich möchte einfach nur wieder volles Haar um besser auszusehen, leide deswegen aber nicht.</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman no-padding-t" data-step="7">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/w_cover_2.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Welche diese Aussagen trifft auf Sie zu?</h2>
                        <div class="choie-list texting">
                            <label class="choie-list_item">
                                <input type="radio" name="input5" value="Ich mache mir nahezu tagtäglich Sorgen wegen dem Haarausfall, fühle mich unglücklich und habe kaum noch Selbstbewusstsein."  class="one-choice-cb">
                                <div>Ich mache mir nahezu tagtäglich Sorgen wegen dem Haarausfall, fühle mich unglücklich und habe kaum noch Selbstbewusstsein.</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input5" value="Ich möchte einfach nur wieder volles Haar um besser auszusehen, leide deswegen aber nicht." class="one-choice-cb">
                                <div>Ich möchte einfach nur wieder volles Haar um besser auszusehen, leide deswegen aber nicht.</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item for-man no-padding-t" data-step="8">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/m_cover_3.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Seit wann leiden Sie unter Haarausfall?</h2>
                        <div class="choie-list boxing">
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="Weniger als 1 Jahr" class="one-choice-cb">
                                <div>Weniger
                                    als 1 Jahr</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="1 - 3 Jahre" class="one-choice-cb">
                                <div>1 - 3 Jahre</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="4 - 5 Jahre" class="one-choice-cb">
                                <div>4 - 5 Jahre</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="Mehr als 5 Jahre" class="one-choice-cb">
                                <div>Mehr als
                                    5 Jahre</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman no-padding-t" data-step="8">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/w_cover_3.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Seit wann leiden Sie unter Haarausfall?</h2>
                        <div class="choie-list boxing">
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="Weniger als 1 Jahr" class="one-choice-cb">
                                <div>Weniger
                                    als 1 Jahr</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="1 - 3 Jahre" class="one-choice-cb">
                                <div>1 - 3 Jahre</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="4 - 5 Jahre" class="one-choice-cb">
                                <div>4 - 5 Jahre</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input6" value="Mehr als 5 Jahre" class="one-choice-cb">
                                <div>Mehr als
                                    5 Jahre</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item second-result for-man for-woman" data-step="9">
                    <div class="box-circle">
                        <span>
                            <b>Elithair</b><br>
                        verhilft Menschen
                        mit Haarausfall zu
                        mehr Freude am
                        Aussehen und
                        bietet Ihnen die einzigartige
                        <b>NEO-FUE.</b>
                        </span>
                    </div>
                    <div class="box-md">
                        <img src="<?= $build_link ?>/images/result-dc-2.jpg" alt="">
                    </div>
                    <button type="button" id="secondResultButton">Alles klar</button>
                </div>
                <!--  -->
                <div class="item for-man no-padding-t" data-step="10">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/m_cover_41-1.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Hatten Sie bereits eine Haartransplantation?</h2>
                        <div class="choie-list boxing">
                            <label class="choie-list_item">
                                <input type="radio" name="input7" value="Ja" class="one-choice-cb">
                                <div>Ja</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input7" value="Nein" class="one-choice-cb">
                                <div>Nein</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman no-padding-t" data-step="10">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/w_cover_4.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Hatten Sie bereits eine Haartransplantation?</h2>
                        <div class="choie-list boxing">
                            <label class="choie-list_item">
                                <input type="radio" name="input7" value="Ja" class="one-choice-cb">
                                <div>Ja</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input7" value="Nein" class="one-choice-cb">
                                <div>Nein</div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="item for-man no-padding-t" data-step="11">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/behandlung-stattfinden.png">
                    </div>
                    <div class="form-choies">
                        <h2>Wann soll die Behandlung stattfinden?</h2>
                        <div class="choie-list texting">
                            <label class="choie-list_item">
                                <input type="radio" name="input8" value="So schnell wie möglich " class="one-choice-cb">
                                <div class="text-center">So schnell wie möglich </div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input8" value="In den nächsten 3 Monaten" class="one-choice-cb">
                                <div class="text-center">In den nächsten 3 Monaten</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input8" value="Ich möchte mich nur informieren" class="one-choice-cb">
                                <div class="text-center">Ich möchte mich nur informieren</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item for-woman no-padding-t" data-step="11">
                    <div class="header-img">
                        <img src="<?= $build_link ?>/images/w_cover_5.jpg">
                    </div>
                    <div class="form-choies">
                        <h2>Wann soll die Behandlung stattfinden?</h2>
                        <div class="choie-list texting">
                            <label class="choie-list_item">
                                <input type="radio" name="input8" value="So schnell wie möglich " class="one-choice-cb">
                                <div class="text-center">So schnell wie möglich </div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input8" value="In den nächsten 3 Monaten" class="one-choice-cb">
                                <div class="text-center">In den nächsten 3 Monaten</div>
                            </label>
                            <label class="choie-list_item">
                                <input type="radio" name="input8" value="Ich möchte mich nur informieren" class="one-choice-cb">
                                <div class="text-center">Ich möchte mich nur informieren</div>
                            </label>
                        </div>
                    </div>
                </div>
                 <!--  -->
                <div class="item third-result for-man for-woman" data-step="12">
                    <div class="load-box loading">
                        <h2>Einen moment ….</h2>
                        <p>Ihre Angaben werden
                            verarbeitet, gleich geht
                            es weiter.</p>
                        <div class="loading-bar"></div>
                        <div class="circle-result">
                            <div><b>Woow! </b><br>
                                Zusätzlich zu Ihrer
                                Haaranalyse erhalten
                                Sie bei erfolgreicher
                                Buchung eine PRP
                                Behandlung im Wert
                                von <b>275€</b>
                                kostenlos dazu!!</div>
                        </div>
                        <button type="button" id="getTheForm">Alles klar</button>
                    </div>
                </div>
                <!--  -->
                <div class="item main-form for-man for-woman" data-step="13">
                    <div class="form-choies">
                        <h2>Ihre kostenlose Haaranalyse wird erstellt!</h2>
                        <p class="desc">Wer soll die Haaranalyse erhalten?</p>
                    </div>
                    <form id="mainForm">
                        <label>
                            <span class="title">Vor- und Nachname</span>
                            <input type="text" name="name" placeholder="Man Mustermann" required minlength="3">
                        </label>
                        <label>
                            <span class="title">Telefonnummer</span>
                            <input type="tel" name="tel" placeholder="+00 000 0000000" required minlength="3">
                        </label>
                        <label>
                            <span class="title">E-Mail</span>
                            <input type="email" name="email" placeholder="Mustermann@gmail.com" required>
                        </label>
                        <label class="checkbox" data-error="Required field">
                            <input type="checkbox" name="legalpolicy" required>
                            <span></span>
                            Ich habe die Datenschutzerklärungen gelesen und akzeptiert
                        </label>
                        <div id="mainformSubmit">Jetzt absenden<div class="lds-dual-ring"></div></div>
                    </form>
                </div>
                <!--  -->
                <div class="item upload-form for-man" id="uploadStep" data-step="14" >
                    <div class="form-choies">
                        <h2>Für eine genaue Haaranalyse jetzt Fotos Hochladen</h2>
                    </div>
                    <div class="upload-box-list">
                        <div class="upload-box_item">
                            <div class="name" id="vorneLabel">Vorne</div>
                            <label>
                                <input type="file" name="Vorne" accept="image/png, image/gif, image/jpeg">
                                <img src="<?= $build_link ?>/images/m_vorne.jpg">
                                <img class="bartimg" src="<?= $build_link ?>/images/vorne-b.png">
                            </label>
                        </div>
                        <div class="upload-box_item">
                            <div class="name" id="obenLabel">Hinten</div>
                            <label>
                                <input type="file" name="Hinten" accept="image/png, image/gif, image/jpeg">
                                <img src="<?= $build_link ?>/images/m_hinten.jpg">
                                <img class="bartimg" src="<?= $build_link ?>/images/rechts-b.png">
                            </label>
                        </div>
                        <div class="upload-box_item">
                            <div class="name" id="hintenLabel">Oben</div>
                            <label>
                                <input type="file" name="Oben" accept="image/png, image/gif, image/jpeg">
                                <img src="<?= $build_link ?>/images/m_oben.jpg">
                                <img class="bartimg" src="<?= $build_link ?>/images/links-b.png">
                            </label>
                        </div>
                    </div>
                    <h3>Ihre Vorteile durch den Bilder-Upload:</h3>
                    <ul>
                        <li>Genauen Behandlungspreis unverbindlich erfahren</li>
                        <li>Berechnung Ihrer benötigten Haarwurzeln</li>
                        <li>Beste Methode für Ihr Haar herausfinden</li>
                    </ul>
                    <div id="uploadFormSubmitM" class="uploadFormSubmit">Fotos jetzt absenden<div class="lds-dual-ring"></div></div>
                    <div class="secure">
                        <img src="<?= $build_link ?>/images/ssl.svg" alt="">
                        Ihre Daten sind sicher und werden nicht an Dritte weitergegeben.
                    </div>
                </div>
                <div class="item upload-form for-woman" data-step="14" >
                    <div class="form-choies">
                        <h2>Für eine genaue Haaranalyse jetzt Fotos Hochladen</h2>
                    </div>
                    <div class="upload-box-list">
                        <div class="upload-box_item">
                            <div class="name">Vorne</div>
                            <label>
                                <input type="file" name="Vorne" accept="image/png, image/gif, image/jpeg">
                                <img src="<?= $build_link ?>/images/w_vorne.jpg">
                            </label>
                        </div>
                        <div class="upload-box_item">
                            <div class="name">Hinten</div>
                            <label>
                                <input type="file" name="Hinten" accept="image/png, image/gif, image/jpeg">
                                <img src="<?= $build_link ?>/images/w_hinten.jpg">
                            </label>
                        </div>
                        <div class="upload-box_item">
                            <div class="name">Oben</div>
                            <label>
                                <input type="file" name="Oben" accept="image/png, image/gif, image/jpeg">
                                <img src="<?= $build_link ?>/images/w_oben.jpg">
                            </label>
                        </div>
                    </div>
                    <h3>Ihre Vorteile durch den Bilder-Upload:</h3>
                    <ul>
                        <li>Genauen Behandlungspreis unverbindlich erfahren</li>
                        <li>Berechnung Ihrer benötigten Haarwurzeln</li>
                        <li>Beste Methode für Ihr Haar herausfinden</li>
                    </ul>
                    <div id="uploadFormSubmitW" class="uploadFormSubmit">Fotos jetzt absenden<div class="lds-dual-ring"></div></div>
                    <div class="secure">
                        <img src="<?= $build_link ?>/images/ssl.svg" alt="">
                        Ihre Daten sind sicher und werden nicht an Dritte weitergegeben.
                    </div>
                </div>
                <!--  -->
                <div class="item final-result for-man for-woman" data-step="15" >
                    <h2>Danke für Ihre Bilder und Ihr vertrauern 
                        <span></span> </h2>
                    <img class="cover" src="<?= $build_link ?>/images/finalheader.jpg" alt="">
                    <p>
                        Unsere Berater werden sich zeitnah mit Ihnen in Verbindung setzen, um einen telefonischen Beratungstermin zu vereinbaren.
                    </p>
                    <p>
                        Ihr persönlicher Elithair Experte erklärt Ihnen alles, was man als Patient vor der Behandlung wissen sollte, inklusive Ihrer ganz individuellen Kosten.
                    </p>
                    <div class="contact">
                        <h3>Kontaktinformationen:</h3>
                        <div>
                            <a href="tel:+49 1579 2376220"><img src="<?= $build_link ?>/images/tel-icon.svg" alt=""> +49 1579 2376220</a>
                        </div>
                        <div>
                            <a href="mailto:info@elithairtransplant.com"><img src="<?= $build_link ?>/images/mail-icon.svg" alt=""> info@elithairtransplant.com</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-inner">
            <a href="https://drbalwi.com/impressum/">Impressum</a>
            <a href="https://drbalwi.com/agb/">AGB</a>
            <a href="https://drbalwi.com/datenschutz/">Datenschutz</a>
            <a href="https://drbalwi.com/kontakt/">Hilfe & Kontakt</a>
        </div>
    </footer>
   

<!-- JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="<?= $build_link ?>/js/main.js"></script>


</body>
</html>