<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label') . $asterisk;
$name = Tpl::get('field_name');
$value = Tpl::get('field_value', '1');

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
$fetchedValue = $fetcher->getData($name);
?>
<!--<div class="checkbox --><?php //if ($fetcher->hasError($name)) echo 'has-error';  ?><!--">-->
<!--    <label>-->
<!--        <input id="pro_--><?php //echo $name  ?><!--" type="checkbox"-->
<!--               --><?php //if ($fetchedValue == ProRMFormFetcher::YES) echo 'checked'  ?>
<!--               name="pro[--><?php //echo $name  ?><!--]" value="--><?php //echo $value;  ?><!--"> --><?php //echo $label  ?>
<!--    </label>-->
<!--    --><?php //ProRMForms::field('_error')  ?>
<!--</div>-->
<div class="radio-block required-field col">
    <div class="check-row">
        <label>
            <input type="checkbox" class="contact_<?php echo $name ?>" <?php if ($fetchedValue == ProRMFormFetcher::YES) echo 'checked' ?> name="pro[<?php echo $name ?>]" value="<?php echo $value; ?>">
            <?php echo $label ?>
        </label>
    </div>
    <?php ProRMForms::field('_error') ?>
</div>    