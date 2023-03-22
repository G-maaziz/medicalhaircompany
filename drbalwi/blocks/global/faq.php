   <?php


    $layout = get_field('number_of_columns');

    $questions = get_field('questions_answer');


    $count = ceil(count($questions) / 2);

    if ($layout == 'one') {
        $count = 0;
        $class = 'col-9';
        $section_class = 'full_faq';
    }
    ?>
   <section class="sec_faq <?= !empty($block["className"]) ? " ".$block["className"] : "" ?>"<?php if (get_field('background_color')) : ?> style="background-color: <?php the_field('background_color') ?>;" <?php endif; ?>>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <?php
                    $faq_section_title = get_field('faq_section_title');
                    if ($faq_section_title) : ?>
                       <h2><?= $faq_section_title ?></h2>
                   <?php endif; ?>
               </div>


               <div class="col-12">
                   <?php
                    $faq_subtit = get_field('faq_subtit');
                    if ($faq_subtit) : ?>
                       <h3 class="faq_subtitle"><?= $faq_subtit ?></h3>
                   <?php endif; ?>

                   <div class="tabs">

                       <?php if ($questions) {
                            foreach ($questions as $key => $value) {

                                ?>

                               <div class="tab">
                                   <details>
                                       <summary><?= $value['question'] ?></summary>
                                       <p><?= $value['answer'] ?></p>
                                   </details>
                               </div>

                       <?php
                                if ($count == ($key + 1) && $layout == 'two') {
                                    echo '</div> </div> <div class="col-12"> <div class="tabs">';
                                }
                            }
                        } ?>
                   </div>


               </div>

           </div>
       </div>
   </section>
   <?php 

global $schema;

$schema = array(
'@context'   => "https://schema.org",
'@type'      => "FAQPage",
'mainEntity' => array()
);
if ($questions) {

    foreach ($questions as $key => $value) {

      $questions = array(
        '@type'          => 'Question',
        'name'           => $value['question'],
        'acceptedAnswer' => array(
        '@type' => "Answer",
        'text' => $value['answer']
          )
          );

          array_push($schema['mainEntity'], $questions);
  }
}
if (!function_exists('bakemywp_generate_faq_schema')) {
function bakemywp_generate_faq_schema ($schema) {

  global $schema;

  echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';

}
}
add_action( 'wp_footer', 'bakemywp_generate_faq_schema', 100 );

?>