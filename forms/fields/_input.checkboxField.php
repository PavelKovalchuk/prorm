<?php
//$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label');
$name = Tpl::get('field_name');
$value = Tpl::get('field_value', '1');

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
$fetchedValue = $fetcher->getData($name);
?>

<div class="radio-block required-field col">
    <div class="check-row">
        <label>
            <input type="checkbox" class="contact_<?php echo $name ?>" <?php if ($fetchedValue == ProRMFormFetcher::YES) echo 'checked' ?> name="pro[<?php echo $name ?>]" value="<?php echo $value; ?>">
            <?php echo $label ?>
        </label>
    </div>
    <?php ProRMForms::field('_error') ?>
</div>    