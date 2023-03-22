<?php
$mobileBg = get_field('hero_background_mobile');
$desktopBg = get_field('hero_background_desk');
?>

<style>
	@media (min-width: 577px) {
		.sec_hero_home {
			background-image: url(<?php echo ($desktopBg) ?>)
		}
	}

	@media (max-width:768px) {
		.sec_hero_home .has-image {
			background-image: url(<?php echo ((($mobileBg) ? $mobileBg : $desktopBg)) ?>)
		}

	}
</style>

<section class="sec_hero_home">
	<div class="container">
		<div class="row">
			<div class="col-6 has-text">
				<h1><?= get_field("title") ?></h1>
				<?= get_field("content") ?>
				<a href="<?= get_field("button_link") ?>" class="btn btn-primary">
					<?php the_field("button_text"); ?>
				</a>
			</div>
			<!-- <div class="col-6 has-image">
				<h1><?php the_field("text"); ?></h1>
			</div> -->
		</div>
	</div>

</section>