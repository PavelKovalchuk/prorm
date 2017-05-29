<?php

    global $post;



?>

<div class="col-lg-8 col-md-6 blog-load">
    <?php
    if(pll_current_language('slug') == 'en'){
        $args = array(
            'cat' =>6,
            'post_type' => 'post',
            'posts_per_page' => '3',
            'orderby' => 'date',
            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
        );
    } else {
        $args = array(
            'cat' =>5227,
            'post_type' => 'post',
            'posts_per_page' => '3',
            'orderby' => 'date',
            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
        );
    }



    query_posts($args); ?>

    <?php while ( have_posts() ) {

    the_post();

    ?>

    <article id="post-<?php the_ID(); ?>"<?php post_class('post-' . $post->post_name); ?>>
        <div class="row">
            <div class="col-sm-8">
                <h3 class="entry-title blog-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title();?>
                    </a>
                </h3>
            </div>

            <div class="col-sm-4 block-blog-info">
                <img class="block-image-date" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/calendar.png">
                <?php ProRMNews::showPubDate(); ?>
                <div style="margin-left: 5px;">
                    <?php $values = get_post_custom( $post->ID );?>
                    <?php  if ($values['gender_author'][0] == 'woman' || $values['gender_author'][0] == 'frau') { ?>
                        <img  style="padding-right: 6px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/girl.png">
                    <?php } else { ?>
                        <img  style="padding-right: 6px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/man.png">
                    <?php } ?>

                    <?php  if ($values['custom_author'][0] == '') { ?>
                        <span style="top:4px;position:relative;"><?php the_author();  ?></span>
                    <?php } else { ?>
                        <span style="top:4px;position:relative;"><?php echo $values['custom_author'][0]; ?></span>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="excerpt-block">
            <?php the_excerpt();?>
            <div class="read-posts" style="float:right;margin-top:-15px;">
                <a href="<?php the_permalink(); ?>">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        Read more
                    <? } else { ?>
                        Mehr erfahren
                    <? } ?>
                </a>
            </div>
        </div>

    </article>

    <?php }
        wp_reset_query();
    ?>

</div>


<?php get_template_part('parts/newsroom/blog-right-block'); ?>
