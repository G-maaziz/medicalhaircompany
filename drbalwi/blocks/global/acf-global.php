<?php

if (!function_exists('acf_register_block_type'))
    return;


/**************************************************************************** */
/**
 * @since 4.1
 */

add_action('acf/init', 'init_global_blocks');

function init_global_blocks()
{
    acf_register_block_type(array(
        'name'              => "title-content",
        'title'             => 'GLOBAL | Title + Content',
        'render_template'   =>  get_template_directory() . '/blocks/global/title-content.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "faq-blocks",
        'title'             => 'GLOBAL | Title + FAQ',
        'render_template'   =>  get_template_directory() . '/blocks/global/faq.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "faq-page-block",
        'title'             => 'GLOBAL | FAQ Page Block',
        'render_template'   =>  get_template_directory() . '/blocks/global/faq_page_block.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => "separator",
        'title'             => 'GLOBAL | Separator',
        'render_template'   =>  get_template_directory() . '/blocks/global/separator.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => "title-text-image",
        'title'             => 'GLOBAL | Title + Text + Image',
        'render_template'   =>  get_template_directory() . '/blocks/global/title-text-image.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_img_text_icon',
        'title'             => 'GLOBAL | Image + Text + Icons',
        'render_template'   =>  get_template_directory() . '/blocks/global/img_text_icon.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_icon_title',
        'title'             => 'GLOBAL | Icon + Title + Content',
        'render_template'   =>  get_template_directory() . '/blocks/global/icon-title.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_parallax',
        'title'             => 'GLOBAL | Parallax',
        'render_template'   =>  get_template_directory() . '/blocks/global/parallax.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_checklist',
        'title'             => 'GLOBAL | Checklist',
        'render_template'   =>  get_template_directory() . '/blocks/global/checklist.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_page_header',
        'title'             => 'GLOBAL | Page Header',
        'render_template'   =>  get_template_directory() . '/blocks/global/page-header.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_hero',
        'title'             => 'GLOBAL | Hero',
        'render_template'   =>  get_template_directory() . '/blocks/global/global-hero.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    acf_register_block_type(array(
        'name'              => 'global_vorher_nachher',
        'title'             => 'GLOBAL | Vorher Nachher Block',
        'render_template'   =>  get_template_directory() . '/blocks/global/vorher-nachher-balwi.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    
    acf_register_block_type(array(
        'name'              => 'global_video_slider',
        'title'             => 'GLOBAL | Video slider Block',
        'render_template'   =>  get_template_directory() . '/blocks/global/video-slider-drbalwi.php',
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
        'name'              => 'global_steps',
        'title'             => 'GLOBAL | Steps',
        'render_template'   =>  get_template_directory() . '/blocks/home/steps.php', /****** HOME STEPS BLOCK DUPLICATE */
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_vorteile',
        'title'             => 'GLOBAL | Vorteile',
        'render_template'   =>  get_template_directory() . '/blocks/home/vorteile.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_icons',
        'title'             => 'GLOBAL | Icons',
        'render_template'   =>  get_template_directory() . '/blocks/global/icons.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));

    acf_register_block_type(array(
        'name'              => 'global_produckt',
        'title'             => 'GLOBAL | Produckts Block',
        'render_template'   =>  get_template_directory() . '/blocks/global/produckt-block-drbalwi.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    
    acf_register_block_type(array(
        'name'              => 'global_title_video',
        'title'             => 'GLOBAL | Title Video',
        'render_template'   =>  get_template_directory() . '/blocks/global/title-text-video.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
    
    acf_register_block_type(array(
        'name'              => 'global_forschung',
        'title'             => 'GLOBAL | Forschung',
        'render_template'   =>  get_template_directory() . '/blocks/global/forschung-balwi.php',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));
}