<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$name = 'phone';    // field name
$phone_label = __('Phone', ProRMTheme::TEXTDOMAIN) . $asterisk;
$phone_label_digit = 'digits'; // digits -  zahlen
$phone_label_last_inp = 'not mandatory (1-3 digits)'; // not mandatory - nicht obligatorisch

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
$value = $fetcher->getData($name);

?>

<div class="input-phone">
    <div class="input-phone-label"><?php echo $phone_label; ?></div>
    <div class="input-phone-fields">
        <span class="control-label">+</span>
        <input type="text" name="pro[<?php echo $name ?>][country_code]" class="pn-control-inp-cc"  title="<?php echo '1 - 3 '; _e($phone_label_digit, ProRMTheme::TEXTDOMAIN) ?>" value="<?php echo $value['country_code']; ?>">
        <span class="control-label">(</span>
        <input type="text" name="pro[<?php echo $name ?>][town_code]" class="pn-control-inp-tc" title="<?php echo '1 - 5 '; _e($phone_label_digit, ProRMTheme::TEXTDOMAIN) ?>" value="<?php echo $value['town_code']; ?>">
        <span class="control-label">)</span>
        <input type="text" name="pro[<?php echo $name ?>][main_part]" class="pn-control-inp-mp"  title="<?php echo '3 - 8 ';  _e($phone_label_digit, ProRMTheme::TEXTDOMAIN) ?>" value="<?php echo $value['main_part']; ?>">
        <span class="control-label">-</span>
        <input type="text" name="pro[<?php echo $name ?>][add_part]" class="pn-control-inp-ap"  title="<?php  _e($phone_label_last_inp, ProRMTheme::TEXTDOMAIN) ?>" value="<?php echo $value['add_part']; ?>">
    </div>
</div>
<div class="input-phone-end"></div>
<div class="<?php if ($fetcher->hasError($name)) echo 'has-error'; ?>">
    <span class="help-block">
        <?php  _e($fetcher->getError($name), ProRMTheme::TEXTDOMAIN) ?>
    </span>
</div>
<div class="form-v-space-21px"></div>
