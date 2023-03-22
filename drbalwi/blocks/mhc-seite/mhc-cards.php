<?php
    $section_title = get_field('section_title');
    $text = get_field('text');
    $cards = get_field('cards');
    $image = get_field('image');
    $logo = get_field('logo');
    $card_title = get_field('card_title');
    $card_text = get_field('card_text');
?>

<section class="cards-section">
    <div class="container">
        <h2><?= $section_title ?></h2>
        <div class="cards">
            <?php
                foreach ($cards as $key => $value) { ?>  
                    <div class="card">
                        <div class="cardTitle">
                            <h3><?= $value['card_title'] ?></h3>
                        </div>
                        <div class="cardBody">
                            <div class="relative">
                                <?php
                                echo wp_get_attachment_image($value['logo']['id'], 'wp_image_size', false, array('class' => "cardLogo"));
                            ?>
                            
                            <?php
                                echo wp_get_attachment_image($value['image']['id'], 'wp_image_size', false, array('class' => "cardImage"));
                            ?>                        
                            </div>
                            <div class="cardContent">
                                <p><?= $value['card_text'] ?></p>
                                <input type="checkbox" class="plusMinus">
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>