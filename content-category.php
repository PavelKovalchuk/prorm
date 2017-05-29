<?php
global $post;
/** @var stdClass $category */
$category = Tpl::get('category');
$tabsNewsContent = Tpl::get('tabsNewsContent');
?>


<?php if (isset($category->posts) && count($category->posts)) { ?>
    <?php
        foreach ($category->posts as $post) {
            setup_postdata($post);
            ProRMNews::showNewsItem(array(
                'title' => false,
                'categories' => false,
                'thumbnail' => 'right',
                'read_more' => true,
                'read_more_text' => ''
            ));
        }
    ?>

    <div class="btn-holder">
        <a href="<?php echo get_category_link($category->term_id) ?>" class="btn btn-news">
            <?php  $cat = esc_html($category->name);
            if ($cat == 'Aktuelle Meldungen') {
                $cats = replace_text('Aktuelle Meldungen', 'Meldungen', $cat);
            } elseif ($cat == 'Latest News') {
                $cats = replace_text('Latest News', 'News', $cat);
            }
            $result = isset($cats) ? $cats : $cat;
            ?>
            <?php echo __('all', ProRMTheme::TEXTDOMAIN) . ' ' .  $result ; ?>
        </a>
    </div>

<?php } ?>
