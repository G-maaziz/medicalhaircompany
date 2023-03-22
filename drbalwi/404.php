<?php

/**
 * Template Name: Not found
 * Description: Page template 404 Not found
 *
 */

get_header();

$search_enabled = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>
<style>
	h2 {
		font-size: 20rem;
		color: #2569A8;
		line-height: normal;
	}

	main#main {
		min-height: 85vh;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	@media (max-width: 767px) {
		body h2 {
			font-size: 3.2rem;
		}
	}
</style>
<div class="container page-404">
	<div class="row">
		<div class="col-md-12">
			<div id="post-0" class="content error404 not-found" style=" text-align: center;">
				<h2>404</h2>

				<h1 class="entry-title"><?php _e('Not found', 'elit'); ?></h1>
				<div class="entry-content">
					<p><?php _e('It looks like nothing was found at this location.', 'elit'); ?></p>
				</div><!-- /.entry-content -->
			</div><!-- /#post-0 -->
		</div>
	</div>
</div>
<?php
get_footer();
