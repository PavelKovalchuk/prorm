<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label');
$name = Tpl::get('field_name');
$options = Tpl::get('field_options');
$labelWidth = Tpl::get('field_label_width', 4);
$fieldWidth = Tpl::get('field_input_width', 12 - $labelWidth);


$is_required =  Tpl::get('field_is_required');

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
$fetchedValue = $fetcher->getData($name);

if(is_null($fetcher->getData($name))) {
    // preselect
    // todo: refactor this

    $fetchedValue = $_SESSION['preselected_product'];
    if(strpos($_SERVER['HTTP_REFERER'], 'en/prorm-shop') !== false || strpos($_SERVER['HTTP_REFERER'], 'de/kaufen') !== false) {
        if($fetchedValue == 'proRM License has expired' AND pll_current_language('slug') == 'de') {
            $fetchedValue = 'proRM Lizenz ist abgelaufen';
        }
    }
}

?>

<?php if ($label) { ?>
<div class="form-group select-group col <?= ( $is_required )  ? 'required-field' : ''; ?> <?php //if ($fetcher->hasError($name)) echo 'has-error'; ?>">
    <label for="pro_<?php echo $name ?>" class="col-md-<?php echo $labelWidth; ?> control-label"><?php echo $label . $asterisk ?></label>
    <div class="col-md-<?php echo $fieldWidth; ?>">
<?php } else { ?>
    <div class="form-group select-group col <?= ( $is_required )  ? 'required-field' : ''; ?> <?php //if ($fetcher->hasError($name)) echo 'has-error'; ?>">
<?php } ?>

        <select id="pro_<?php echo $name ?>" class="form-control" name="pro[<?php echo $name ?>]">
            <?php foreach ($options as $value => $title) { ?>
                        <?php if($value == '0'){ ?>
                                <option value="<?php echo $value ?>" class="hideme"><?php echo $title ?></option>
                        <?php } else{ ?>
                                <option <?php if (trim($fetchedValue) == trim($value)) echo 'selected' ?> value="<?php echo $value ?>"><?php echo $title ?></option>
                        <?php } ?>
            <?php } ?>
        </select>
        <?php
            //$variable = $_SESSION['preselected_product'];
            //unset( $_SESSION['preselected_product'], $variable );
        ?>
        <?php ProRMForms::field('_error') ?>

<?php if ($label) { ?>
    </div>
</div>
<?php } else { ?>
</div>
<?php } ?>