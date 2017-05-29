<?php
$asterisk = get_query_var('field_is_required') ? '*' : '';
$label = __('Street', ProRMTheme::TEXTDOMAIN) . $asterisk;
?>
<div class="form-group">
    <input type="text" class="form-control" name="pro[street]"
           placeholder="<?php echo $label ?>">
</div>