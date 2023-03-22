<?php
$section_title = get_field('section_title');
$section_image = get_field('section_image');
$article_main_title = get_field('article_main_title');
$text = get_field('text');
$articles = get_field('articles');
$image = get_field('image');
$article_title = get_field('article_title');
$article_text = get_field('article_text');
$button_label = get_field('button_label');
$button_link = get_field('button_link');
?>

<section class="articles">
    <div class="container">
        <h3><?= $section_title ?></h3>
        <img class="section-image" src="<?= $section_image ?>" alt="">
        <p><?= $text ?></p>
        <h3><?= $article_main_title ?></h3>
        <div class="articles-images">

            <?php
            foreach ($articles as $key => $value) {
                ?>
                <div class="article-images">
                    <img src="<?= $value['image'] ?>" alt="">
                    <h4><span><?= $key + 1 ?>.</span> <?= $value['article_title'] ?></h4>
                    <?= $value['article_text'] ?>
                </div>
            <?php
            }

            ?>
        </div>

        <button onclick="window.location.href='<?= $button_link ?>';"><?= $button_label ?></button>
    </div>
</section>