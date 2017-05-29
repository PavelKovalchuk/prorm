<?php

$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = $form->getCityMobileOption();




?>
<div class="form-group">

    <select id="pro_city_mobile" class="form-control" name="pro[city_mobile]">
        <option value="0">Stadt</option>

        <?php foreach ($options as $titles =>$title) { ?>

            <option value="<?php echo $title['title'] ?>" date="<?php echo $title['date'] ?>"><?php echo $title['title'] ?></option>

        <?php } ?>


    </select>

</div>