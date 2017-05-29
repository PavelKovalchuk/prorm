<?php
$asterisk = get_query_var('field_is_required') ? '*' : '';
$label = __('Company', ProRMTheme::TEXTDOMAIN) . $asterisk;
?>
<div class="form-group">
    <input type="text" class="form-control" name="pro[company]"
           placeholder="<?php echo $label ?>">
</div>