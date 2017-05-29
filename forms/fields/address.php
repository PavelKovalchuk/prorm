<?php
$asterisk = get_query_var('field_is_required') ? '*' : '';
$label = __('Address', ProRMTheme::TEXTDOMAIN) . $asterisk;
?>
<div class="form-group">
    <input type="text" class="form-control" name="pro[address]"
           placeholder="<?php echo $label ?>">
</div>