<section class="sec_faq full_faq">
<?php 
            $questions_block = get_field('faq_page_block');
            if ($questions_block) {
                        foreach ($questions_block as $key => $block) {
                            ?>
    <div class="container" <?php if ($block['background_color']) : ?> style="background-color: <?= $block['background_color'] ?>;" <?php endif; ?>>
        <div class="row">
            <div class="col-12">
                <div class="faq_image_title">
                    <?php
                    $faq_subtit = $block['faq_subtit'];
                    if ($faq_subtit) : ?>
                        <h2 class="faq_subtitle"><?= $faq_subtit ?></h2>
                    <?php
                        endif;
                            if (!empty($block['image'])) {
                                echo wp_get_attachment_image($block['image']['id'], 'wp_image_size', false);
                            }
                        ?>
                </div>
                <div class="tabs">
                    <?php 
                        $questions = $block['questions_answer'];
                    if ($questions) {
                        foreach ($questions as $key => $value) {
                            ?>
                            <details>
                                <summary><?= $value['question'] ?></summary>
                                <p><?= $value['answer'] ?></p>
                            </details>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
    <?php }} ?>
</section>