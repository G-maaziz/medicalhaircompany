<?php
$bg_image = get_field('bg_image');
$text = get_field('text');
$image = get_field('image');

?>

<section class="hero-section">
    <div class="bg-image" <?= !empty($bg_image) ? ' style="background-image: url(' . $bg_image['url'] . ')"' : '' ?>></div>
    <div class="no-scroll-menu">
							<div><a href="#"></a>Partner werden</div>
							<div><a href="#"></a>Services</div>
							<div><a href="#"></a>Referenzen</div>
						</div>
    <div>
        <div class="hero-text container">
            <h1 class="text"><?= $text ?></h1>
        </div>
        <div class="logo">
            <img decoding="async" class="logo" src="https://sharp-kirch.85-214-246-2.plesk.page/wp-content/uploads/2023/03/MHC-Logo-2023-Primary.svg">
        </div>
    </div>
</section>