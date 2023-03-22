<?php
/*
Template Name: Calculator
 */


/**
 * We enqueue the stylesheet here instead of in block,
 * because we need it in header instead of in footer..
 * 
 * @since 4.1
 */
function enqueue_calc_style()
{
    wp_enqueue_style( "calculator", get_template_directory_uri() . '/assets/css/calc.css');
}
add_action('wp_enqueue_scripts', 'enqueue_calc_style');




/**********************************************/

get_header();


the_post();

$content = get_the_content();

$content = apply_filters('the_content', $content);
echo $content;



get_footer();

