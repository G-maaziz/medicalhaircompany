<?php

    if(!have_rows("checklist_elements"))
    {
        echo("No element found.");
        return;
    }
    if(!get_field("check_icon"))
    {
        echo("Check icon missing");
        return;
    }
    $icon = get_field("check_icon");
    $checklist_elements = get_field("checklist_elements");

    $break = false;
?>

<section class="sec_checklist"<?php if(get_field('background_color')) { ?> style="background-color: <?= get_field('background_color') ?>"<?php } ?>>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="linie"><?php the_field("title"); ?></h2>
            </div>
        </div>

        <?php
        if(empty(get_field("text")))
        {
            while(have_rows("checklist_elements") && !$break): the_row(); ?>
                <div class="row check_row">
                    <div class="col-6"<?php if(get_field('checklist_item_background_color')) { ?> style="background-color: <?= get_field('checklist_item_background_color') ?>"<?php } ?>>
                        <img src="<?php echo($icon); ?>">
                        <p><?php the_sub_field("text"); ?></p>
                    </div>
                    <?php if(have_rows("checklist_elements")): the_row(); ?>
                        <div class="col-6"<?php if(get_field('checklist_item_background_color')) { ?> style="background-color: <?= get_field('checklist_item_background_color') ?>"<?php } ?>>
                            <img src="<?php echo($icon); ?>">
                            <p><?php the_sub_field("text"); ?></p>
                        </div>
                        <?php else: $break = true; ?>
                    <?php endif; ?>
                </div>
                <?php
            endwhile;
        }
        else
        { ?>
        
        <div class="row check_row2">
            <div class="col-6">
                <?php
                foreach($checklist_elements as $el)
                { ?>
                <div>
                    <img src="<?php echo($icon); ?>">
                    <span><?= $el["text"] ?></span>
                </div>
                <?php
                } ?>
            </div>
            <div class="col-6">
                <?= get_field("text") ?>
            </div>
        </div>
        
        
        <?php } ?>

        <div class="row">
            <div class="col-12">
                <?php if(!empty(get_field("button_text"))): ?>
                    <a class="btn btn-primary" href="<?= get_field("button_link") ?>"<?php if(get_field('new_tab')) { ?> target="_blank"<?php } ?>>
                        <?php the_field("button_text"); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>