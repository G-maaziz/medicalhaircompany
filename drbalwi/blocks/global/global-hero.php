<section class="sec_global_hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title_hero">
					<h1><?= get_field("title") ?></h1>
					<?php if(get_field("subtitle")) { ?>
						<p class="subtitle"><?= get_field("subtitle") ?></p>
					<?php } ?>
				</div>
				<div class="image_hero">
					<?php
						if (!empty(get_field('image_hero'))) {
							echo wp_get_attachment_image(get_field('image_hero')['id'], 'wp_image_size', false, array('loading' => 'eager'));
						}
					?>
				</div>
				<div class="content_hero">
					<?= get_field("content") ?>
					<?php if(get_field("button_link")) { ?>
						<a href="<?= get_field("button_link") ?>" class="btn btn-primary"<?php if(get_field('open_in_a_new_tab')) { ?> target="_blank"<?php } ?>>
							<?php the_field("button_text"); ?>
						</a>
					<?php } ?>
				</div>
            </div>
        </div>
    </div>
</section>