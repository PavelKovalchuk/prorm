<?php
//$optional = Tpl::get('field_is_required') ? '' : __(' (optional)', ProRMTheme::TEXTDOMAIN);
$asterisk = $is_required ? '*' : '';


//$label = Tpl::get('field_label') . $optional;
$label = Tpl::get('field_label') . $asterisk;

$placeholder = Tpl::get('placeholder');
$name = Tpl::get('field_name');
$is_required =  Tpl::get('field_is_required');
$fetcher = Tpl::get('fetcher');
$form_name = Tpl::get('form_name');


?>

<div class="textarea-holder input-col  col">
    <label class="floated" for="<?php echo $form_name . '-' .$name ?>"><?php echo $label; ?></label>
    <textarea class="contact_<?php echo $name ?> js-float-label"  id="<?php echo $form_name . '-' .$name ?>" name="pro[<?php echo $name ?>]" cols="30" rows="3"  <?php if($placeholder){ ?>  placeholder="<?php echo $placeholder; ?>" <?php } ?> ><?php echo $fetcher->getData($name) ?></textarea>
    <?php echo ( $is_required )  ? '<label for="before"></label>' : ''; ?>
    <?php ProRMForms::field('_error') ?>
</div>