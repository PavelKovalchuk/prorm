<?php
/** @var ProRMForms_Microsoft $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = $form->getEventOptions();
?>
<!--<div class="form-group">-->
<!--    <label class="red">-->
<!--        --><?php //_e('Please select desired date', ProRMTheme::TEXTDOMAIN); ?>
<!--    </label>-->
    <?php
    ProRMForms::radio('desired_date', $options, true);
    ?>
<!--</div>-->