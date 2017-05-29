<?php
/** @var ProRMForms_Testing $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getTestPackageOptions();
?>
<div class="form-group">
    <label for="pro_test_package" class="red">
        <?php _e('Select your preferred test package', ProRMTheme::TEXTDOMAIN); ?>
    </label>
    <?php ProRMForms::select('test_package', null, $options) ?>
</div>