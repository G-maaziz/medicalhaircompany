<?php

/**
 * The Template for displaying Search Results pages.
 */

get_header();

?>


<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/search.css">

<section class="section-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">


					<h1>HAARAUSFALL BEHANDLUNGEN</h1>
					<p>Hier finden Sie hilfreiche Informationen zu unseren Haarausfall Behandlungen. Dr. Balwi und sein Experten-Team haben nur ein Ziel: Betroffenen von Haarausfall mit einer professionellen Eigenhaarbehandlung wieder zu neuem Lebensgefühl und Selbstbewusstsein zu verhelfen.</p>
			

						<?php get_search_form() ?>

				
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part('archive', 'loop');

wp_reset_postdata(); // End of the loop.

get_footer();
