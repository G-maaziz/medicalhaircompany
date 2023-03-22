<?php

/**
 * Template Name: Page (Default)
 */

get_header();

the_post();

$content = get_the_content();

$content = apply_filters('the_content', $content);
echo $content;




get_footer();

