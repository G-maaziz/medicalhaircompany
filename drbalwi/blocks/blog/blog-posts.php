<style>
    section.posts img {
        max-height: 240px;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    @media (max-width: 980px) {
        section.posts img {
            max-height: 200px;
        }
    }

    ul.pagination.bootpag {
        padding: 0;
        margin-bottom: 60px;
        display: flex;
    }

    section.posts h4 {
        padding: 0;
        font-size: 20px;
        line-height: 28px;
        font-weight: 700;
        min-height: 68px;
        color: #2569A8;
        margin: 0;
    }

    section.posts h2 {
        margin-bottom: 50px;
    }

    section.posts .col-4 {
        margin-bottom: 60px;
    }




    ul.pagination.bootpag li {
        width: 27px;
        height: 27px;
        background: var(--dark);
        display: flex;
        align-items: center;
        margin-right: 5px;
        justify-content: center;
    }

    ul.pagination.bootpag li.active a {
        color: white;
    }

    ul.pagination.bootpag li.active {
        background: #2569a8;
        color: white;
    }

    .posts .loading img {
        width: 25px !important;
        object-fit: contain !important;
        margin-right: 18px;
    }

    .posts .loading {
        display: none;
    }

    section#posts_list {
        padding: 0;
    }

    ul.grid {
        display: flex;
        flex-wrap: wrap;
        align-content: center;
        list-style: none;
        padding-left: 0;
    }

    li.mix {
        width: 33.3%;
        margin: 20px 0;
        height: 100%;
        padding: 0 15px;
    }

    li.mix a {
        color: #2569a8;
    }

    li.mix a:hover {
        text-decoration: none;
    }

    a.page-numbers {
        color: #fff;
        font-weight: 400;
    }

    span.page-numbers.current {
        color: #fff;
        font-weight: 900;
    }

    .input-group {
        display: flex;
    }

    input.form-control {
        border: 1px solid #f7f7f7;
        border-radius: 15px 0 0 15px !important;
    }

    span.page-numbers.dots {
        color: #fff;
    }

    @media (max-width: 767px) {
        li.mix {
            width: 100%;
            margin: 10px 0;
        }
    }


    @media (min-width: 768px) {
        img.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
            min-height: 260px;
        }
    }

    @media (max-width: 767px) {
        section.posts .col-4 {
            margin-bottom: 0;
        }

        section.posts h4 {
            padding: 0 0;
        }

    }
</style>

<section class="posts" id="posts_list">
    <div class="container">
        <div id="ajax_content">
            <?php get_block_blog_posts(); ?>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function() {
        jQuery('.category_filter').on('click', function(event) {
            event.preventDefault();
            var cat = jQuery(this).attr('data-target');
            var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>"
            jQuery.ajax({
                type: "POST",
                url: ajax_url,
                data: {
                    action: "get_block_blog_posts",
                    cat: cat
                },
                success: function(response) {

                    jQuery('#ajax_content').html(response);
                }
            });
        });

        jQuery('body').on('click', '.page-numbers', function(event) {
            event.preventDefault();
            var cat = jQuery(this).parent().attr('data-cat');
            var paged = jQuery(this).parent().attr('data-target');
            console.log(cat);
            console.log(paged);
            var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>"
            jQuery.ajax({
                type: "POST",
                url: ajax_url,
                data: {
                    action: "get_block_blog_posts",
                    cat: cat,
                    paged: paged
                },
                success: function(response) {

                    jQuery('#ajax_content').html(response);

                    jQuery("html, body").animate({
                        scrollTop: jQuery('#posts_list').offset().top
                    }, 1000);

                }
            });

        });
    });
</script>