<?php
$asterisk = get_query_var('field_is_required') ? '*' : '';
$label = __('E-Mail', ProRMTheme::TEXTDOMAIN) . $asterisk;
?>
<div class="form-group">
    <input type="text" class="form-control" name="pro[email]"
           placeholder="<?php echo $label ?>">
</div>