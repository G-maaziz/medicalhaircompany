<?php

/**
 * The template for displaying the archive loop
 */


if (have_posts()) :
	?>

	<div class="serach_blocks">
		<div class="container">


			<div class="row">
			
					<?php
						while (have_posts()) :
							the_post();
							if ('post' != get_post_type()) {
								continue;
							}
							/**
							 * Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part('content', 'index'); // Post format: content-index.php
						endwhile;
						?>
			
			</div>
		</div>
	</div>
<?php
endif;

wp_reset_postdata();

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">


			<?php

			//elit_content_nav('nav-below');

			?>
		</div>
	</div>
</div>