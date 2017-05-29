<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label') . $asterisk;
$name = Tpl::get('field_name');
$is_required =  Tpl::get('field_is_required');
/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
?>
<!--<div class="form-group --><?php //if ($fetcher->hasError($name)) echo 'has-error'; ?><!--">-->
<!--    <label class="sr-only" for="pro_--><?php //echo $name ?><!--">--><?php //echo $label ?><!--</label>-->
<!--    <input id="pro_--><?php //echo $name ?><!--" class="form-control" name="pro[--><?php //echo $name ?><!--]"-->
<!--           type="text" placeholder="--><?php //echo $label ?><!--"-->
<!--           value="--><?php //echo $fetcher->getData($name) ?><!--">-->
<!--    --><?php //ProRMForms::field('_error') ?>
<!--</div>-->

<div class="col <?= ( $is_required )  ? 'required-field' : ''; ?>">
    <input class="contact_<?php echo $name ?>" name="pro[<?php echo $name ?>]" type="text" placeholder="<?php echo $label ?>" >
    <?= ( $is_required )  ? '<label for="before"></label>' : ''; ?>
    <?php ProRMForms::field('_error') ?>
</div>