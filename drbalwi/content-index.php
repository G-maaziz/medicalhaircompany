<?php

/**
 * The template for displaying content in the index.php template
 */


$excerpt = strip_tags(get_field('einleitungstext'));
if (strlen($excerpt) > 100) {
	$excerpt = substr($excerpt, 0, 100);
	$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
	$excerpt .= '...';
}

if (has_post_thumbnail()) {
	$imge_url = get_the_post_thumbnail_url();
	$img_id = get_post_thumbnail_id(get_the_ID());
	$alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
	$temp = '';
} else {
	$imge_url = 'https://elithairtransplant.com/german/wp-content/uploads/sites/27/2019/04/Haartransplantation-Türkei.png';
	$temp = 'alt';
}

?>

<div class="col-4 <?php echo $cat; ?>">

	<div class="blogger-slider">
		<div class="blogger-img">
			<a href="<?php echo get_permalink() ?>">

				<img src="<?php echo $imge_url ?>" class="<?= $temp ?>" alt="<?php echo $alt_text ?>">
			</a>
		</div>
		<div class="blogger-cont">
			<h3><?php the_title() ?></h3>
			<p class="contetn-post"><?php echo $excerpt; ?></p>
			<span class="float-left blog-socs">
				<?php the_date() ?>
			</span>
			<span class="float-right blog-socs">
				<a href="<?php echo get_permalink() ?>">read more<span class="fa fa-arrow-right color-orange">
						<img src="https://elithairtransplant.com/build/elit-home-v2/images/elite_de/archive/right-arrow-slide.svg" width="20" alt="">
					</span>
				</a>
			</span>
		</div>
	</div>

</div>