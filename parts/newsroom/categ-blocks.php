<?php
$blogCategoryIds = ProRMTheme::getBlogIds();
$limit = 3;
$categories = ProRMNews::getNewsByCategories($limit, array('exclude' => $blogCategoryIds));
$tabsNewsContent = Tpl::get('tabsNewsContent');

if (count($categories)) {
    if($tabsNewsContent){
            // variant with tabs
?>
        <!--<ul class="tabset">-->

            <?php
//            foreach ($categories as $index => $category) {
                ?>

                <!--<li <?php echo $index == 0 ? 'class="active-tab"' : '' ?>><a href="#tab<?php echo ++$index ?>"><?php echo esc_html($category->name) ?></a></li>-->

                <?php
//            }
            ?>

        <!--</ul>-->


        <div class="tab-content">
            <?php foreach ($categories as $index => $category) : ?>
                <div id="tab<?php echo ++$index ?>">
                    <?php
                        Tpl::set('category', $category);
                        get_template_part('content', 'category');
                    ?>
                </div>
            <?php endforeach; ?>
        </div>



<?php
    } else {
            // variant without tabs
            foreach ($categories as $index => $category) {
                Tpl::set('category', $category);

                if ($index) {
                    if (!($index % 3)) {
                        echo '<div class="clear visible-lg"></div>';
                    }
                    if (!($index % 2)) {
                        echo '<div class="clear visible-md"></div>';
                    }
                }
?>
                <div class="col-lg-4 col-md-6">
                    <?php get_template_part('content', 'category'); ?>
                </div>
<?php
            }
    }
} else {
        get_template_part('content', 'no-posts');
}
?>