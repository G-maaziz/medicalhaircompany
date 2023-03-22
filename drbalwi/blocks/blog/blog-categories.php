<style>
    section.Kategorien button {
        border: none;
        background: transparent;
        margin-right: 30px;
        font-size: 20px;
        margin-bottom: 6px;
        padding-left: 0;
    }

    section.Kategorien {
        padding: 20px 0 66px;
        margin-bottom: 40px;
    }

    section.Kategorien h2 {
        font-size: 25px;
        margin-bottom: 15px;
    }

    .button-group.filters-button-group {
        display: flex;
        flex-wrap: wrap;
    }

    section.Kategorien .row {
        padding: 0 40px;
    }

    section.Kategorien input[type='radio'] {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        border: 1px solid #fff;
        border-radius: 50%;
        outline: none;
    }

    section.Kategorien input[type='radio']:before {
        content: '';
        display: block;
        width: 60%;
        height: 60%;
        margin: 20% auto;
        border-radius: 50%;
    }

    section.Kategorien input:not([type=button]):not([type=submit]) {
        padding: 0 !important;
        border-radius: 50%;
        margin-left: 0;
    }

    section.Kategorien input[type='radio']:checked:before {
        background: #133a66;
    }

    @media (max-width: 767px) {
        section.Kategorien button {
            display: block;
            margin-right: 0;
            text-align: left;
            padding: 10px 0 0;
        }

        .button-group.filters-button-group {
            padding-left: 15px;
            margin: auto;
        }

        section.Kategorien h2 {

            text-align: center;
        }
    }

    @media (max-width: 767px) {
        section.sec_global_hero .grid-container {
            display: block !important;
        }

        .grid-container.hero_less_padding img {
            margin-top: 0;
            margin-bottom: 20px
        }

        input#wp-block-search__input-1 {
            background: #fff;
        }

        section.Kategorien {
            padding: 0 15px 40px !important;
            background: #ffffff;
        }

        section.Kategorien .row {
            padding: 30px 0;
        }
    }
</style>



<!--  -->
<section class="Kategorien" style="background-color: <?php the_field('background_color') ?>;">
    <div class="container">
        <div class="row" style="justify-content: normal">
            <div class="col-12">
                <div class="title">
                    <h2><?php the_field('main_title') ?></h2>
                </div>

                <div class="button-group filters-button-group">
                    <button class="button is-checked category_filter" data-filter="*" data-target="*">
                        <input type="radio" checked name="tab-menu" class="tab-menu-radio" />
                        Alle
                    </button>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $key => $categoric) {

                        ?>
                        <button class="button category_filter" data-filter=".<?= $categoric->slug ?>" data-target="<?= $categoric->term_id; ?>">
                            <input type="radio" name="tab-menu" class="tab-menu-radio" />
                            <?= $categoric->name ?>
                        </button>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('.filters-button-group button').on('click', '', function() {
                $(this).find('input').prop('checked', 'checked');
            });
        });
    })(jQuery)
</script>