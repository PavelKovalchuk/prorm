<?php
$currentCategory = get_queried_object();
$categories = ProRMNews::getCategoriesWithoutBlog();
$controlId = 'car-filter' . rand(100, 999);
$urlTpl = str_replace($currentCategory->slug .'/', '', get_category_link($currentCategory->term_id));
?>

<form action="#" class="form-filter">
    <label for="<?php echo $controlId ?>" class="col-sm-2 control-label"><?php _e('Category filter', ProRMTheme::TEXTDOMAIN); ?></label>
    <select onchange="location.href = $(this).data('url-tpl')+$(this).val()" id="<?php echo $controlId ?>" data-url-tpl="<?php echo esc_attr($urlTpl); ?>">

        <?php foreach ($categories as $category) { ?>
            <option value="<?php echo $category->slug; ?>"
                <?php if ($currentCategory->term_id == $category->term_id) echo 'selected' ?>
            ><?php echo $category->name; ?></option>
        <?php } ?>

    </select>
</form>