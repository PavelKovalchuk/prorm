<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label') . $asterisk;
$name = Tpl::get('field_name');

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
?>
<!--<div class="form-group --><?php //if ($fetcher->hasError($name)) echo 'has-error'; ?><!--">-->
<!--    <label class="sr-only" for="pro_--><?php //echo $name ?><!--">--><?php //echo $label ?><!--</label>-->
<!--    <input id="pro_--><?php //echo $name ?><!--" class="form-control" name="pro[--><?php //echo $name ?><!--]"-->
<!--           type="email" placeholder="--><?php //echo $label ?><!--"-->
<!--           value="--><?php //echo $fetcher->getData($name) ?><!--">-->
<!--    --><?php //ProRMForms::field('_error') ?>
<!--</div>-->

<!--<div class="col <?php // if ($fetcher->hasError($name)) echo 'input-error'; ?>">-->
<div class="col required-field">
    <input class="contact_<?php echo $name ?>" type="email" placeholder="<?php echo $label ?>" name="pro[<?php echo $name ?>]">
    <?= ( $asterisk )  ? '<label for="before"></label>' : ''; ?>
    <?php ProRMForms::field('_error') ?>
</div>