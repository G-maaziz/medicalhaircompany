<?php

/**
 * The Template for displaying Category Archive pages.
 */

get_header();

if (have_posts()) :
	$term_id = get_queried_object()->term_id;

	?>
	<style>
		.serach_blocks {
			margin: 50px 0;
		}

		.blogger-slider {
			box-shadow: 0px 0px 20px rgb(0 0 0 / 12%);
			margin-bottom: 7px;
			height: 100%;
		}

		.float-left {
			float: none !important;
		}

		.blogger-cont {
			padding: 15px;
		}

		a.btn.btn-secondary.btn-lg {
			background: transparent;
			border: 0;
			color: #2569a8;
			font-weight: 400;
			font-size: 14px;
		}

		.btn-secondary:not(:disabled):not(.disabled).active,
		.btn-secondary:not(:disabled):not(.disabled):active,
		.show>.btn-secondary.dropdown-toggle {
			color: #fff;
			background-color: #2569a8;
			border-color: #2569a8;
			padding: 7px;
		}

		@media (min-width: 768px) {
			.col-4 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 33.33333%;
				flex: 0 0 33.33333%;
				max-width: 33.33333%;
				padding: 0 15px;
			}

			.sec_hero {
				height: auto !important;
			}

			.mb-2,
			.my-2 {
				margin-bottom: 30px !important
			}
		}
	</style>
	<section class="sec_hero bg_color">
		<div class="container">
			<div class="row bg_white col_reverse">
				<div class="col-6">
					<div class="hero_content">
						<?php the_field('category_hero_section', 'term_' . $term_id) ?>

					</div>
				</div>
				<div class="col-6">
					<?php 
						$image = get_field('category_image', 'term_' . $term_id);
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php
	get_template_part('archive', 'loop');

else :
	// 404.
	get_template_part('content', 'none');
endif;

wp_reset_postdata(); // End of the loop.

get_footer();
