<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label') . $asterisk;
$name = Tpl::get('field_name');

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
?>
<div class="form-group <?php if ($fetcher->hasError($name)) echo 'has-error'; ?>">
    <label class="sr-only" for="pro_<?php echo $name ?>"><?php echo $label ?></label>
    <textarea id="pro_<?php echo $name ?>" class="form-control" name="pro[<?php echo $name ?>]"
              cols="40" rows="3" placeholder="<?php echo $label ?>"><?php echo $fetcher->getData($name) ?></textarea>
    <?php ProRMForms::field('_error') ?>
</div>