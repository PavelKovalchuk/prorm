<?php get_header(); ?>
<?php
$s=get_search_query();

$site_section = $_GET['site_section'];


if ($site_section == 'blog-search') {

    $args = array(
        's' =>$s,
        'posts_per_page'=>'10',
        'cat' => '6,5266'


    );

}

else if ($site_section == 'news-search') {
    $args = array(
        's' =>$s,
        'posts_per_page'=>'10',
        'cat' => '5226,5269'


    );
}

// The Query
$the_query = new WP_Query( $args);



$category = proRMNews::getCategoriesWithoutNews();


?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
