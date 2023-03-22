<?php


define('theme_url', get_stylesheet_directory_uri());

$includes = array(
    'inc/customizer/theme-functions.php',
    'blocks/acf-inc.php'
);

foreach ($includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
    }
    require_once $filepath;
}

/*************get_block_blog_posts***************** */


function get_block_blog_posts()
{

    $paged = 1;
    if (isset($_REQUEST['paged'])) {
        $paged = ($_REQUEST['paged']) ? $_REQUEST['paged'] : 1;
    }
    $cat = '';
    if (isset($_REQUEST['cat'])) {
        $cat = $_REQUEST['cat'];
    }

    if (!empty($cat)) {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'post_status' => array('publish'),
            'paged' => $paged,
            'cat' => $cat
        );
    } else {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'post_status' => array('publish'),
            'paged' => $paged
        );
    }

    $block_blog_posts = new WP_Query($args);

    if ($block_blog_posts->have_posts()) :
        ?>
    <div class="row">
        <div class="col-12">
            <?php
                    echo '<ul class="grid">';
                    while ($block_blog_posts->have_posts()) : $block_blog_posts->the_post();
                        $terms = get_the_terms(get_the_ID(), 'category');
                        $temp = array();
                        if ($terms != null) {
                            foreach ($terms as $term) {
                                array_push($temp, $term->slug);
                            }
                        }
                        unset($terms);
                        ?>
                <li class="mix <?= implode(' ', $temp) ?>">
                    <a href="<?php the_permalink() ?>">

                        <?= (get_the_post_thumbnail()) ? get_the_post_thumbnail() : '' ?>
                        <h4><?php the_title() ?></h4>
                    </a>
                </li>
            <?php
                    endwhile;
                    ?>
        <?php
                echo '</ul>';
            endif; ?>
        </div>
    </div>
<?php

    $big = 999999999;

    $base = trailingslashit('/blog/') . "page/%#%/";
    $pages = paginate_links(array(
        'base'    => $base,
        'format'  => '?paged=%#%',
        'current' => max(1, $paged),
        'total'   => $block_blog_posts->max_num_pages,
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
        'type' => 'array'
    ));

    if (is_array($pages)) {

        echo '<div class="row"><div class="col-12"><ul class="pagination bootpag">';
        foreach ($pages as $page) {
            $new_page = explode('page/', $page);
            $new_page = $new_page[1];

            $new_page = explode('/"', $new_page);
            $new_page = $new_page[0];


            echo "<li data-target='" . $new_page . "' data-cat='" . $cat . "'>$page</li>";
        }
        echo '</ul></div></div>';
    }


    if (isset($_REQUEST['cat']) || isset($_REQUEST['paged'])) {
        die();
    }
}

add_action('wp_ajax_get_block_blog_posts', 'get_block_blog_posts');
add_action('wp_ajax_nopriv_get_block_blog_posts', 'get_block_blog_posts');

add_filter('wpseo_breadcrumb_links', 'yoast_seo_breadcrumb_append_link');

function yoast_seo_breadcrumb_append_link($links)
{
    global $post;

    if (is_single()) {
        $breadcrumb[] = array(
            'url' => site_url('/blog/'),
            'text' => 'Blog',
        );

        array_splice($links, 1, -2, $breadcrumb);
    }

    return $links;
}

add_filter('the_content', 'picth_before_2nd_h2');

function picth_before_2nd_h2($content)
{

    $html = '<div class="hairanalysis_pitch btn_transparent">
<h2>Jetzt gratis Haaranalyse sichern!</h2>
<p>Sie möchten endlich wieder volles Haar und neues Selbstbewusstsein? Unser kostenloser Haarkalkulator ist Ihr erster Schritt in ein neues Leben. Jetzt ausprobieren und gratis Haaranalyse von unseren Profis erhalten!</p>
<button class="cta_button" onclick="window.location.href=/haar-kalkulator/">KOSTENLOSE HAARANALYSE</button>
</div>';

    if (is_single() && !is_admin()) {
        return prefix_insert_after_paragraph($html, 1, $content);
    }

    return $content;
}
function prefix_insert_after_paragraph($insertion, $paragraph_id, $content)
{
    $closing_p = '<h2>';
    $paragraphs = explode($closing_p, $content);
    if ($paragraphs) {
        $paragraphs[1] = $paragraphs[1] . $insertion;
    }
    return implode('<h2>', $paragraphs);
}

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => array('page','post') ) );
    if( $the_query->have_posts() ) :
        echo '<ul>';
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <li><a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a></li>

        <?php endwhile;
       echo '</ul>';
        wp_reset_postdata();  
    endif;

    die();
}
/********************** */

add_action('template_redirect', 'redirect_to_blog_post', 5);

function redirect_to_blog_post()
{
    $the_slug = str_replace('/', '', $_SERVER["REQUEST_URI"]);
    $args = array(
        'name'        => $the_slug,
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);

    if ($my_posts[0]->ID && $the_slug) {
        wp_redirect(get_the_permalink($my_posts[0]->ID), 301);
        exit();
    }

    if (is_404()) {

        wp_redirect(get_site_url(), 301);
        exit();
    }
}
