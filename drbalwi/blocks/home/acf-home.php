<?php

if (!function_exists('acf_register_block_type'))
    return;


/**************************************************************************** */
/**
 * @since 4.1
 */

add_action('acf/init', 'init_home_blocks');

function init_home_blocks()
{
    acf_register_block_type(array(
        'name'              => 'home_hero',
        'title'             => 'HOME | Hero',
        'render_template'   =>  get_template_directory() . '/blocks/home/hero.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'home_before_after',
        'title'             => 'HOME | Before-After Slider',
        'render_template'   =>  get_template_directory() . '/blocks/home/before-after.php',
        'enqueue_assets' => function(){
            wp_enqueue_script( 'embla-script', get_template_directory_uri() . '/assets/js/embla-carousel.umd.js');
          },
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'home_features',
        'title'             => 'HOME | Features',
        'render_template'   =>  get_template_directory() . '/blocks/home/features.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'home_steps',
        'title'             => 'HOME | Steps',
        'render_template'   =>  get_template_directory() . '/blocks/home/steps.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'home_price',
        'title'             => 'HOME | Price',
        'render_template'   =>  get_template_directory() . '/blocks/home/price.php',

        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'home_vorteile',
        'title'             => 'HOME | Vorteile',
        'render_template'   =>  get_template_directory() . '/blocks/home/vorteile.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));


}