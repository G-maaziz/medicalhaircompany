<style>
     .blog_hero {
         background: #F7F7F7;
     }

     .blog_hero h3 {
         color: #005A64;
         font-size: 28px;
         font-weight: 300;
         margin: 10px 0;
         line-height: 40px;
     }

     .blog_hero h1 {
         color: #283B3D;
     }

     .blog_hero p {
         font-size: 20px;
         font-weight: 300;
         line-height: 30px;
     }

     /* .blog_hero .hero_content {
         padding: 3rem 3.5rem;
     } */

     .blog_hero img {
         width: 100%;
     }

     input#wp-block-search__input-1 {
         width: 100%;
         padding-left: 50px;
         min-height: 52px;

     }

     .wp-block-search__inside-wrapper {
         position: relative;
     }

     svg#search-icon {
         fill: #25747D;
         width: 40px;
         height: 40px;
     }

     button.wp-block-search__button.has-icon {
         width: auto;
         position: absolute;
         border: 0;
         background: transparent;
         left: 0;
         top: 6px;
         padding: 0;
     }

     ::placeholder {
         color: #005A64;
         opacity: 1;
         font-weight: 600;
     }

     :-ms-input-placeholder {
         color: #005A64;
         font-weight: 600;

     }

     ::-ms-input-placeholder {
         color: #005A64;
         font-weight: 600;

     }

     .mobile {
         display: none;
     }
     .search_result {
    max-height: 250px;
    width: 100%;
    overflow: auto;
    margin-top: 30px;
}

.search_result ul {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.search_result ul li {
    width: 30%;
}

input#keyword {
    width: 100%;
}
div.search_result {
  display: none;
}
     @media (max-width: 768px) {
        section.blog_hero .row {
    flex-direction: column-reverse;
}
         .col-7.order2 {
             order: 2;
         }

         .mobile {
             display: block;
         }

         .desk {
             display: none;
         }


         .blog_hero .hero_content {
             padding: 20px 0 40px;
             background: transparent;
         }


         .blog_hero h1 {
             font-size: 28px;
         }

         .blog_hero h3 {

             font-size: 28px;

             line-height: normal;
         }

         .p-m-0 {
             padding: 0;
         }

         section.blog_hero.bg_color {
             padding: 0 !important;
             background: transparent;
         }

         body input#wp-block-search__input-1 {
             background: #F2F2F2;
             border: 0;
             padding-left: 45px;
         }

         button.wp-block-search__button.has-icon {

             top: 8px;
         }
         .search_result ul li {
             width: 100%;
         }
     }
 </style>


 <section class="blog_hero bg_color">
     <div class="container">
         <div class="row has_bg ">
             <div class="col-6 order2">
                 <div class="hero_content">
                     <h1><?php the_field('title') ?>
                     </h1>
                     <h3><?php the_field('subtitle') ?></h3>
                    <?php the_field('text') ?>
                 </div>
             </div>
             <div class="col-6 p-m-0">
                 <?php echo wp_get_attachment_image(get_field('image')['id'], 'wp_image_size', false); ?>

             </div>
         </div>
     </div>
 </section>
 <section>
 <div class="search_bar">
    <form action="/" method="get" autocomplete="off">
        <input type="text" name="s" placeholder="Beiträge durchsuchen..." id="keyword" class="input_search" onkeyup="fetch()">
    </form>
    <div class="search_result" id="datafetch">
        <ul>
            <li>Please wait..</li>
        </ul>
    </div>
</div>
 </section>
 <?php
 /*
 ==================
 Ajax Search
======================	 
*/
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}
?>

