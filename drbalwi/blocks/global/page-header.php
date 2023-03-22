<?php
    $light_theme = (get_field("theme") === true);
    if(array_key_exists("className", $block))
        $classes = explode(" ", $block["className"]);

    $title = get_field("title");
    $posttitle = single_post_title("", false);
    $subtitle = get_field("subtitle");
    
    $enableOverlay = get_field("enable_overlay");
	$overlayCode = get_field("background_overlay_code");
	$overlayBg = ($enableOverlay && $overlayCode) ? $overlayCode : "none";
	
	$mobileBg = get_field('background_mobile');
	$desktopBg = get_field('background_desktop');
?>

<style>
	.page_header
	{
		background-image: url(<?php echo((($mobileBg) ? $mobileBg : $desktopBg)) ?>)
	}
	@media (min-width: 577px)
	{
		.page_header
		{
			background-image: url(<?php echo($desktopBg) ?>)
		}
	}
</style>

<header class="page_header<?php
if(isset($classes))
{
    foreach($classes as $cl)
    {
        // allow custom classes only
        if(strpos($cl, "wp-block") === false && strpos($cl, "align") === false)
        {
            echo(" " . $cl);
        }
    }
}
    ?>">
    <div class="overlay" style="background: <?php echo($overlayBg) ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-12<?php if(!$light_theme) echo(" dark"); ?>">
                <h1><?php echo(empty($title) ? (!empty($posttitle) ? $posttitle : "[PAGE TITLE]") : $title); ?></h1>
                <p>
                    <?php if(!empty($subtitle)) echo($subtitle); ?>
                </p>
            </div>
        </div>
    </div>
</header>