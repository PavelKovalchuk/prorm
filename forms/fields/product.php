<?php

$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getEditionOptions();


/*$allAppsLink = $form->getAllAppsLink();
$allEditionsLink = $form->getAllEditionsLink();*/

?>
<div class="form-group">
    <label for="pro_edition" class="red">
        <?php _e('What products  you are interested in?', ProRMTheme::TEXTDOMAIN); ?>
    </label>
    <?php
    ProRMForms::select('product', null, $options);
    ?>
</div>