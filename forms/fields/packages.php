<?php
/** @var ProRMForms_PackagesRequest $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getEditionOptions();



?>
<div class="form-group">
    <label for="pro_packages" class="red">
        <?php _e('What packages  you are interested in?', ProRMTheme::TEXTDOMAIN); ?>
    </label>
    <?php
    ProRMForms::select('packages', null, $options);
    ?>
</div>