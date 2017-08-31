<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$name = Tpl::get('field_name');
$options = Tpl::get('field_options');


/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
$fetchedValue = $fetcher->getData($name);
if ($fetcher->hasError($name)) Tpl::set('error_radio', true);
?>
<div class="radio-block blocks required-field col">
<?php $i=0; foreach ($options as $value => $label) { ?>
    <div class="check-row check-variant">
        <label for="ene<?php echo ++$i; ?>">
            <input type="radio" <?php if ($fetchedValue == $value) echo 'checked' ?>
                   class="contact_<?php echo $name ?>" 
                   name="pro[<?php echo $name ?>]"
                   value="<?php echo $value; ?>"
                   id="ene<?php echo $i; ?>">
            <span class="highlight"><?php echo $value; ?></span>
            <span class="radio-text"><?php echo $label ?></span>
        </label>
    </div>

<?php } 
    ProRMForms::field('_error');
    ?>
    </div>

