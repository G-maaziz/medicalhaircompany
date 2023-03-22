<div class="navbar">
    <div class="container">
        <?php
            $logo = get_field('header_logo');
            if(!empty($logo)):
        ?>
            <a href="<?= home_url() ?>"><img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>" class="logo"></a>
        <?php endif; ?>
    </div>
</div>

<section class="calculator">
    <div class="container">
        <h3 id="top_title"><?= get_field("title"); ?></h3>
        <div id="progress">
            <div id="progressBar"></div>
        </div>
        <div class="title_container"> 
            <div id="prevBtn"></div>
            <h3 id="dynamic_title">Bitte wählen Sie Ihr Geschlecht</h3>
        </div>
        <div class="calc_content">