<?php //wpb_set_post_views(get_the_ID()); 
get_header() ?>

<style>
	h1.blog_content_title {
    font-size: 26px;
    line-height: 30px;
    margin-bottom: 20px;
}
	input.form-control {
    padding: 10px 15px;
    font-size: 14px;
    line-height: 18px;
	width: 80%;
	border-radius: 5px 0 0 5px;
	border: none;
}

button.btn.btn-secondary {
    padding: 10px 15px;
    text-align: center;
    background: #123a66;
    border: none;
	width: 100%;
	border-radius: 0 5px 5px 0;
}

.input-group {
    display: flex;
    justify-content: space-between;
	margin-bottom: 30px;
	box-shadow: 0px 3px 6px #00000029;
}
.input-group-append {
    width: 20%;
}
.haaranalyse_expert {
    background: #133964;
    color: #fff;
    padding: 30px;
}
.haaranalyse_expert h3 {
    color: #fff;
    text-align: center;
    font-size: 24px;
    line-height: 30px;
	margin-top: 0;
}

button.buttonBtn {
    font-size: 16px;
    line-height: 24px;
    text-transform: uppercase;
    padding: 15px 25px;
    border-radius: 10px;
    font-weight: 700;
    min-width: 100%;
    max-width: 100%;
	color: #133A66;
}
.recent_blog h3 {
    color: #1A4E8A !important;
    font-size: 16px !important;
    font-weight: 600;
    line-height: 26px !important;
    margin: 10px 0 !important;
}

.recent_blog_sidebar h3 {
    color: #36393D;
    font-size: 24px;
    font-weight: 600;
    line-height: 26px;
    margin: 20px 0;
}
.comment-respond label {
    display: none;
}

.comment_form {
    background: #FFF5EF;
    padding: 20px;
}

.comment_form input, .comment_form textarea {
    padding: 15px 15px;
    border: none;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 3px;
    opacity: 1;
    width: 100%;
    margin: 10px 0;
}
.comment_form input::placeholder, .comment_form textarea::placeholder {
    font-size: 16px;
    line-height: 26px;
}
p.form-submit input[type=submit] {
    background: #133964;
    width: fit-content;
    color: #fff;
    font-size: 18px;
    line-height: 24px;
    font-weight: 700;
    text-transform: uppercase;
}
span.required {
    display: none;
}
p.comment-form-url {
    display: none;
}

p.comment-form-cookies-consent label {
    display: inline-block;
}

input#wp-comment-cookies-consent {
    width: auto;
    margin-right: 10px;
}

p.comment-form-cookies-consent {
    display: flex;
}
	iframe {
    max-width: 100%;
}
.searchForm {
    width: 100%;
}
section.single_blog_content div#sidebar_post {
    position: sticky;
    top: 100px;
}
.hairanalysis_pitch.btn_transparent {
    background: #123964;
    padding: 30px;
    color: #fff;
    text-align: center;
	margin: 30px 0;
}

.hairanalysis_pitch h2 {
    color: #fff;
}
@media (max-width: 768px) {
	.col-7, .col-4 {
		padding: 0;
	}

	.blog_content_body h1, .blog_content_body h2, .blog_content_body p {
		padding: 0 15px
	}

	div#sidebar_post {
		padding: 40px 15px 0;
	}
}
</style>
<?php

while (have_posts()) : the_post();

	?>

	<div class="all-sections">
		<section class="single_blog_content">

			<div class="container">
				<div class="row">
					<div class="col-7">
						<div class="blog_content_body">
							<div class="body_content">
							<?php
								if (function_exists('yoast_breadcrumb')) {
									yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
								}
								?>
							<h1 class="blog_content_title">
									<?php echo get_the_title(get_the_ID()) ?>
								</h1>
								<?php
									if (has_post_thumbnail()) :
										the_post_thumbnail( '', array( 'loading' => 'eager' ) );
									endif;
									?>
								<?php
									$my_postid = get_the_ID();
									$content_post = get_post($my_postid);
									$content = $content_post->post_content;
									$content = apply_filters('the_content', $content);
									$content = str_replace(']]>', ']]&gt;', $content);
									echo $content;
								?>
							</div>
							<div class="comment_form">
								<?php if (comments_open() || get_comments_number()) :
										comments_template('', true);
									endif; ?>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="blog_content_sidebar" id="sidebar_post">
							<div class="suchoption desk">
								<?php dynamic_sidebar('primary_widget_area'); ?>
							</div>
							<div class="haaranalyse_expert">
								<h3>Jetzt gratis <br>Haaranalyse sichern!</h3>
								<p>Sie möchten endlich wieder volles Haar und neues Selbstbewusstsein? Unser kostenloser Haarkalkulator ist Ihr erster Schritt in ein neues Leben. Jetzt ausprobieren und gratis Haaranalyse von unseren Profis erhalten!</p>
								<button class="buttonBtn" onclick="window.location.href = '/haar-kalkulator/';">Kostenlose Beratung!</button>
							</div>
							<div class="recent_blog_sidebar">
								<h3>Mehr zum Thema</h3>
								<div class="recent_blog">
								<?php $args = array(
										'post_type' => 'post',
										'posts_per_page' => 5,
										'paged' => 1,
										'ignore_sticky_posts' => 1,
										'order'                  => 'DESC',
										'orderby'                => 'date',
										'post_status' => array('publish'),
										'post__not_in' => array($post->ID)
									);
									$the_query = new WP_Query($args);
									$slide_post_id = array();
									if ($the_query->have_posts()) {
										$i = 1;
										while ($the_query->have_posts()) {
											$the_query->the_post();
											array_push($slide_post_id, get_the_ID());
											?>
											<a href="<?php the_permalink(); ?>">
												<h3><?php the_title() ?></h3>
											</a>

								<?php                     }
										wp_reset_postdata();
									} 
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<!-- <?php endwhile; ?> -->

<?php get_footer() ?>