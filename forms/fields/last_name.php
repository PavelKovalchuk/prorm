<?php
$asterisk = get_query_var('field_is_required') ? '*' : '';
$label = __('Last Name', ProRMTheme::TEXTDOMAIN) . $asterisk;
?>
<div class="form-group">
    <input type="text" class="form-control" name="pro[last_name]"
           placeholder="<?php echo $label ?>">
</div>