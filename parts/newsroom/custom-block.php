<?php
//$blogCategoryIds = ProRMTheme::getBlogIds();

//$blogs = ProRMNews::getCategories(array('include' => $blogCategoryIds));
//$blog = current($blogs);
//$blogId = $blog->term_id;
//$blogName = sprintf(__('To %s %s', ProRMTheme::TEXTDOMAIN), get_bloginfo('name'), $blog->name);
//$blogLink = get_category_link($blog->term_id);

$blogId = 'promx-wp-blog';
$blogName = sprintf(__('To %s %s', ProRMTheme::TEXTDOMAIN), get_bloginfo('name'), 'Blog');
$blogLink = 'http://promx.wordpress.com';

?>
<div class="col-lg-4 col-md-6" id="newsroom-rightcol">
    <div class="category-block" id="category-subscribe">
        <div class="category-subscribe-title"><h3><?php _e('Subscribe to newsletter', ProRMTheme::TEXTDOMAIN) ?></h3></div>
        <div class="cat-news-holder">
            <?php echo ProRMForms::handleForm('subscribe', __('<p>Thank you for subscription.</p>', ProRMTheme::TEXTDOMAIN)) ?>
        </div>
    </div>
    <div class="category-block" id="category-<?php echo $blogId ?>">
        <h3>
            <a class="to-blog-link" href="<?php echo $blogLink ?>"
               target="_blank"><?php echo esc_html($blogName) ?></a>
        </h3>
    </div>
    <div class="tabs-categ-after">&nbsp;</div>
</div>