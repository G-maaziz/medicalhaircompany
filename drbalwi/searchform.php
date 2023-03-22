<?php

/**
 * The template for displaying search forms
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
	<!--label for="s" class="assistive-text"><?php _e('Search', 'elit'); ?></label-->
	<div class="row">
		<div class="col-12">
			<div class="searchForm">
				<div class="input-group">
					<input type="text" name="s" class="form-control" placeholder="<?php _e('Beiträge durchsuchen…', 'elit'); ?>" />
					<div class="input-group-append">
						<button type="submit" class="btn btn-secondary" name="submit"> <svg style="height:1em;" viewBox="0 0 12 13">
								<g stroke-width="2" stroke="#fff" fill="none">
									<path d="M11.29 11.71l-4-4" />
									<circle cx="5" cy="5" r="4" />
								</g>
							</svg></button>
					</div><!-- /.input-group-append -->
				</div><!-- /.input-group -->
			</div><!-- /.col -->
		</div>
	</div><!-- /.row -->
</form>