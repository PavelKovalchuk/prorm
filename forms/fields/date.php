<?php

$form = Tpl::get('form');
Tpl::set('field_label_width', 5);


$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getDateOption();







?>
<div class="form-group">


        <input id="pro_date" class="form-control" name="pro[date]" type="text" placeholder="Datum"  value="<?php echo $option;?>">


</div>

