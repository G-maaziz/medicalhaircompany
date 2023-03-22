<?php


if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_type_blog');
}

function register_acf_block_type_blog()
{


    acf_register_block_type(array(
        'name'              => 'blog-hero',
        'title'             => __('blog | Hero'),
        'description'       => __('a blog | Hero block.'),
        'render_template'   =>   get_template_directory() . '/blocks/blog/blog-hero.php',
        // 'enqueue_style'     =>   get_template_directory_uri() . '/assets/blocks/blog/blog-hero.css',

        'category'          => 'common',
        'icon'              => 'awards',
        'mode'          => 'preview',
        'keywords'          => array('recognition', 'honors'),
        'align'       => 'full',
        'example' => [
            'attributes' => [
                'mode' => 'preview',
                'data' => ['is_example' => true],
            ]
        ],
        'supports'        => [
            'anchor'        => true,
            'align' => ['full'], 'mode' => false,


        ]
    ));
}

/************************* */

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_type_categories');
}

function register_acf_block_type_categories()
{


    acf_register_block_type(array(
        'name'              => 'blog-categories',
        'title'             => __('blog | categories'),
        'description'       => __('a blog | categories block.'),
        'render_template'   =>   get_template_directory() . '/blocks/blog/blog-categories.php',
        // 'enqueue_style'     =>   get_template_directory_uri() . '/assets/blocks/blog/blog-categories.css',

        'category'          => 'common',
        'icon'              => 'awards',
        'mode'          => 'preview',
        'keywords'          => array('recognition', 'honors'),
        'align'       => 'full',
        'example' => [
            'attributes' => [
                'mode' => 'preview',
                'data' => ['is_example' => true],
            ]
        ],
        'supports'        => [
            'anchor'        => true,
            'align' => ['full'], 'mode' => false,


        ]
    ));
}






/************************* */

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_type_blog_post');
}

function register_acf_block_type_blog_post()
{


    acf_register_block_type(array(
        'name'              => 'blog-posts',
        'title'             => __('blog | posts'),
        'description'       => __('a blog | posts block.'),
        'render_template'   =>   get_template_directory() . '/blocks/blog/blog-posts.php',
        // 'enqueue_style'     =>   get_template_directory_uri() . '/assets/blocks/blog/blog-posts.css',

        'category'          => 'common',
        'icon'              => 'awards',
        'mode'          => 'preview',
        'keywords'          => array('recognition', 'honors'),
        'align'       => 'full',
        'example' => [
            'attributes' => [
                'mode' => 'preview',
                'data' => ['is_example' => true],
            ]
        ],
        'supports'        => [
            'anchor'        => true,
            'align' => ['full'], 'mode' => false,


        ]
    ));
}