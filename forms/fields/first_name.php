<?php
$asterisk = get_query_var('field_is_required') ? '*' : '';
$label = __('First Name', ProRMTheme::TEXTDOMAIN) . $asterisk;
?>
<div class="form-group">
    <input type="text" class="form-control" name="pro[first_name]"
           placeholder="<?php echo $label ?>">
</div>