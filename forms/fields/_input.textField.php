<?php
$is_required =  Tpl::get('field_is_required');
//$optional = $is_required ? '' : __(' (optional)', ProRMTheme::TEXTDOMAIN);
$asterisk = $is_required ? '*' : '';


//$label = Tpl::get('field_label') . $optional;
$label = Tpl::get('field_label') . $asterisk;

$placeholder = Tpl::get('placeholder');
$name = Tpl::get('field_name');
$type = Tpl::get('field_type');

/** @var ProRMFormFetcher $fetcher */
$form_name = Tpl::get('form_name');

?>


<div class="input-col col <?php echo ( $is_required )  ? 'required-field' : ''; ?>">
    <label class="floated " for="<?php echo $form_name . '-' .$name ?>"><?php echo $label; ?></label>
    
    <input class="contact_<?php echo $name; ?> js-float-label" 
           name="pro[<?php echo $name ?>]" 
           id="<?php echo $form_name . '-' .$name ?>"
           type="<?php echo $type; ?>" 
           <?php if($placeholder){ ?>
           placeholder="<?php echo $placeholder; ?>" 
           <?php } ?>
           >
    <?php echo ( $is_required )  ? '<label></label>' : ''; ?>
    
    <?php ProRMForms::field('_error'); ?>
</div>