<?php

if (!function_exists('acf_register_block_type'))
    return;


/**************************************************************************** */
/**
 * @since 4.1
 */

add_action('acf/init', 'init_calculator_blocks');

function init_calculator_blocks()
{
    acf_register_block_type(array(
        'name'              => "kalkulator_form",
        'title'             => 'KALKULATOR | Form',
        'render_template'   =>  get_template_directory() . '/blocks/calc/slide-form.php',
        'category'          => 'common',
        'icon'              => 'awards'
    ));

    acf_register_block_type(array(
        'name'              => "kalkulator_header",
        'title'             => 'KALKULATOR | Header',
        'render_template'   =>  get_template_directory() . '/blocks/calc/calc-header.php',
        /* enqueue style was moved to page-calculator.php to get the stylesheet in header instead of in footer */
        /* 'enqueue_style'     =>  get_template_directory_uri() . '/assets/css/calc.css', */
        'enqueue_assets' => function(){
            wp_enqueue_script( 'block-calculator-phone', get_template_directory_uri() . '/assets/js/libphonenumber-js.min.js');
            wp_enqueue_script( 'block-calculator-header', get_template_directory_uri() . '/assets/js/calc.js');
          },
        'category'          => 'common',
        'icon'              => 'awards'
    ));

    acf_register_block_type(array(
        'name'              => "kalkulator_footer",
        'title'             => 'KALKULATOR | Footer',
        'render_template'   =>  get_template_directory() . '/blocks/calc/calc-footer.php',
        'category'          => 'common',
        'icon'              => 'awards'
    ));

    acf_register_block_type(array(
        'name'              => "kalkulator_options",
        'title'             => 'KALKULATOR | Options',
        'render_template'   =>  get_template_directory() . '/blocks/calc/slide-option.php',
        'category'          => 'common',
        'icon'              => 'awards'
    ));

    acf_register_block_type(array(
        'name'              => "kalkulator_upload",
        'title'             => 'KALKULATOR | Upload',
        'render_template'   =>  get_template_directory() . '/blocks/calc/slide-upload.php',
        'category'          => 'common',
        'icon'              => 'awards'
    ));

    acf_register_block_type(array(
        'name'              => "kalkulator_thanks",
        'title'             => 'KALKULATOR | Thank you',
        'render_template'   =>  get_template_directory() . '/blocks/calc/slide-thanks.php',
        'category'          => 'common',
        'icon'              => 'awards'
    ));

}

$forms = array();
$liste = array();
$listeWithInputs = array();

/**
 * For calculator options
 * Fills the Gravity Form ID field choices automatically
 * @since 4.1
 */
function select_input($field)
{
    global $listeWithInputs;

    loadForms();
    
    $field["choices"] = $listeWithInputs;

    return $field;
}
add_filter('acf/load_field/name=select_input', "select_input");
add_filter('acf/load_field/name=fronthead', "select_input");
add_filter('acf/load_field/name=backhead', "select_input");
add_filter('acf/load_field/name=tophead', "select_input");
add_filter('acf/load_field/name=upload_name', "select_input");
add_filter('acf/load_field/name=upload_email', "select_input");
add_filter('acf/load_field/name=upload_phone', "select_input");

add_filter('acf/load_field/name=gravity_form', function($field)
{
    global $liste;

    loadForms();
    
    $field["choices"] = $liste;

    return $field;
});

function loadForms()
{
    global $forms, $liste, $listeWithInputs;
    
    if(count($forms) == 0)
    {
        $forms = GFAPI::get_forms();

        foreach($forms as $form)
        {
            $liste[$form["id"]] = "(".$form["id"].") ".$form["title"];
            $listeWithInputs[$form["id"]] = $form["title"];
            foreach($form["fields"] as $f)
            {
                $listeWithInputs[$form["id"]."-".$f["id"]] = "--- (".$f["id"].") ".$f["label"];
            }
        }
    }
}