<?php

if (!function_exists('acf_register_block_type'))
    return;


/**************************************************************************** */
/**
 * @since 4.1
 */

add_action('acf/init', 'init_contact_blocks');

function init_contact_blocks()
{
    acf_register_block_type(array(
        'name'              => "contact",
        'title'             => 'CONTACT | Contact form',
        'render_template'   =>  get_template_directory() . '/blocks/contact/contact-form.php',
        'enqueue_style'     =>  get_template_directory_uri() . '/assets/blocks/contact/contact-form.css',
        'category'          => 'common',
        'icon'              => 'awards',
        'supports'          => [
            'anchor'        => true
        ]
    ));


}