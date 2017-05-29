<?php

$form = Tpl::get('form');
Tpl::set('field_label_width', 5);


$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getDateMobileOption();







?>
<div class="form-group">


    <input id="pro_date_mobile" class="form-control" name="pro[date_mobile]" type="text" placeholder="Datum"  value="<?php echo $option;?>">




</div>

