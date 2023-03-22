<?php
    $gender_step    = get_field("step_group")["gender_step"];
    $show_for       = get_field("show_for");
    $title          = get_field("title");
    $gravity_id     = get_field("select_input");
    $selections     = get_field("selections");
    
?>

<?php if(($show_for && count($show_for) > 0) || $gender_step): ?>
<div class="selections<?= count($selections) > 3 ? " multi" : "" ?>"
    data-title="<?= $title ?>"
    <?= !empty($show_for)  ? ' data-show-for="' . implode(",", $show_for) . '"' : '' ?>
    <?= $gender_step === true ? ' data-gender-step' : '' ?>
    <?= 'data-input-id="' . $gravity_id . '"' ?>>
    <?php

        foreach($selections as $sel)
        { ?>
            <div class="sel<?= empty($sel['icon']) ? ' noicon' : '' ?>"
            <?= $gender_step === true ? 'data-gender="'. $sel["which_gender"] . '"' : '' ?>
            data-value="<?= $sel["label"] ?>">
                <?php if($sel["icon"]): ?><img src="<?= $sel["icon"]["url"] ?>"><?php endif; ?>
                <span><?= $sel["label"] ?></span>
            </div>
        <?php
        }

    ?>
</div>
<?php endif; ?>