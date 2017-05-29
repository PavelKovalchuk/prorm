<?php
/** @var ProRMForms_PackagesRequest $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getTestPackageOptions();
?>
<div class="form-group">
    <label for="pro_package" class="red">
        <?php _e('Select your preferred package', ProRMTheme::TEXTDOMAIN); ?>
    </label>
    <?php ProRMForms::select('package', null, $options) ?>
</div>