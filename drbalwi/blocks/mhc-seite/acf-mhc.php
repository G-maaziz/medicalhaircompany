<?php

if (!function_exists('acf_register_block_type'))
    return;


/**************************************************************************** */
/**
 * @since 4.1
 */

add_action('acf/init', 'init_mhc_blocks');

function init_mhc_blocks()
{
    acf_register_block_type(array(
        'name'              => "mhc_hero",
        'title'             => 'MHC | MHC Hero',
        'render_template'   =>  get_template_directory() . '/blocks/mhc-seite/mhc-hero.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "mhc_slide",
        'title'             => 'MHC | MHC Slide',
        'render_template'   =>  get_template_directory() . '/blocks/mhc-seite/mhc-slide.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "mhc_articles",
        'title'             => 'MHC | MHC Articles',
        'render_template'   =>  get_template_directory() . '/blocks/mhc-seite/mhc-articles.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "mhc_form",
        'title'             => 'MHC | MHC Form',
        'render_template'   =>  get_template_directory() . '/blocks/mhc-seite/form.php',
        'enqueue_assets' => function () {
            wp_enqueue_script('libphonenumber-script', get_template_directory_uri() . '/assets/js/libphonenumber-js.min.js', false);
            wp_enqueue_script('web-script', get_template_directory_uri() . '/assets/js/web.js', false);

        },
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "mhc_cards",
        'title'             => 'MHC | MHC Cards',
        'render_template'   =>  get_template_directory() . '/blocks/mhc-seite/mhc-cards.php',
        'enqueue_assets' => function () {
            wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-slider.js', false);
        },
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

}