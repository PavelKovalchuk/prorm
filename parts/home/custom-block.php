<?php
$blogCategoryIds = ProRMTheme::getBlogIds();

$blogs = ProRMNews::getCategories(array('include' => $blogCategoryIds));
$blog = current($blogs);
$blog->name = sprintf(__('To %s %s', ProRMTheme::TEXTDOMAIN), get_bloginfo('name'), $blog->name);

?>
<div class="col-lg-4 col-md-6">
    <div class="category-block" id="category-<?php echo $blog->term_id ?>">
        <h3>
            <a class="to-blog-link" href="<?php echo get_category_link($blog->term_id) ?>"><?php echo esc_html($blog->name) ?></a>
        </h3>
    </div>
    <div class="category-block" id="category-subscribe">
        <h3><?php _e('Subscribe to newsletter', ProRMTheme::TEXTDOMAIN) ?></h3>
        <div class="cat-news-holder">
            <form class="subscribe-form">
                <p class="btn-row">
                    <button class="pro-btn"><span><?php _e('Subscribe', ProRMTheme::TEXTDOMAIN) ?></span></button>
                </p>
            </form>
        </div>
    </div>
</div>