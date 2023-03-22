<?php
	$dark = !get_field("theme");

    $enableOverlay = get_field("enable_overlay");
	$overlayCode = get_field("overlay");
	$overlayBg = ($enableOverlay && $overlayCode) ? $overlayCode : "none";
	
	$mobileBg = get_field('background_mobile');
	$desktopBg = get_field('background_desk');
    
    $margins = get_field("margin_top_bottom");
    $mobile_margins = $margins > 80 ? $margins-45 : $margins;
?>

<style>
	.sec_parallax
	{
		background-image: url(<?php echo($mobileBg) ?>);
        <?php echo($margins ? "margin: ". $mobile_margins . "px 0" : ""); ?>
	}
	@media (min-width: 577px)
	{
		.sec_parallax
		{
			background-image: url(<?php echo($desktopBg) ?>);
            <?php echo($margins ? "margin: ". $margins . "px 0" : ""); ?>
		}
	}
</style>


<section class="sec_parallax">
    <div class="overlay" style="background: <?php echo($overlayBg) ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-12<?php echo($dark ? " dark" : ""); ?>">
                <h2 class="linie"><?php the_field("title"); ?></h2>
                <?php the_field("text"); ?>
                <?php if(get_field("add_button")): ?>
                    <a href="<?= get_field("button_link") ?>" class="btn btn-secondary chevron">
                        <?php the_field("button_text"); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>