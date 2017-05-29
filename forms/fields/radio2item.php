<?php
$name = Tpl::get('field_name');
$group_label = Tpl::get('field_group_label');
$options = Tpl::get('field_options');
$asterisk = Tpl::get('field_is_required') ? '*' : '';

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
$fetchedValue = $fetcher->getData($name);
?>
<div class="form-group-label">
        <?php _e($group_label . $asterisk, ProRMTheme::TEXTDOMAIN); ?>
</div>
<div class="radio">
<?php foreach ($options as $value => $label) { ?>
 <div class="radio2item">
   <label>
        <input type="radio" <?php if ($fetchedValue == $value) echo 'checked' ?>
              name="pro[<?php echo $name ?>]" value="<?php echo $value; ?>"> <?php echo $label ?>
   </label>
 </div>
<?php } ?>
</div>
<div class="radio2item-end"></div>
<div class="<?php if ($fetcher->hasError($name)) echo 'has-error'; ?>">
    <?php ProRMForms::field('_error') ?>
</div>
<div class="form-v-space-21px"></div>
