</main>

<?php

global $template;
$blank = basename($template) == 'blank-page.php';
if(function_exists("get_field"))
{
	if(get_field("blank-page") === true)
	{
		$blank = true;
	}
}
if(basename($template) == "search.php")
	$blank = false;

	if (!$blank)
	{
		if(get_field("show_footer_cta") === true):
			$footer_cta = get_field("footer_cta", "option");

			$cta_title = $footer_cta["title"];
			$cta_text = $footer_cta["text"];
			$cta_btn_text = $footer_cta["button_text"];
			$cta_icon1 = $footer_cta["background_icon_1"];
			$cta_icon2 = $footer_cta["background_icon_2"];
		?>
			<div class="container">
				<div class="row">
					<div class="col-12 dark">
						<div class="footer_cta">
							<img src="<?php echo($cta_icon1); ?>">
							<img src="<?php echo($cta_icon2); ?>">
							<h2 class="linie"><?php echo($cta_title); ?></h2>
							<p><?php echo($cta_text); ?></p>
							<button class="btn-secondary chevron"><?php echo($cta_btn_text); ?></button>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		

	<footer>
		<div class="top-footer">
			<div class="container">
				<div class="row">

					<div class="col-3">
						<?php
							dynamic_sidebar('widget_area');
							?>
					</div>
					<div class="col-3">
						<?php
							dynamic_sidebar('widget_area2');
							?>
					</div>
					<div class="col-3">
						<?php
							dynamic_sidebar('widget_area3');
							?>
					</div>
					<div class="col-3">
						<?php
							dynamic_sidebar('widget_area4');
							?>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">

				<div class="col-6">
						<?php
							dynamic_sidebar('widget_area_bottom');
							?>
					</div>
					<div class="col-6">
						<?php
							dynamic_sidebar('widget_area_bottom2');
							?>
					</div>

				</div>
			</div>
		</div>
	</footer>

<?php } ?>

</div>

<?php
wp_footer();
?>
</body>
</html>