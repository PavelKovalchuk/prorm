<?php

$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getEditionOptions();


/*$allAppsLink = $form->getAllAppsLink();
$allEditionsLink = $form->getAllEditionsLink();*/

?>
<div class="form-group">
 <?php  if(pll_current_language('slug') == 'en'){ ?>
		<label for="pro_edition" class="red">
			<?php _e('Webcast on the topic:', ProRMTheme::TEXTDOMAIN); ?>
		</label>
   <?php } else { ?>
	   <label for="pro_edition" class="red">
			<?php _e('Webinar zum Thema:', ProRMTheme::TEXTDOMAIN); ?>
		</label>
	<?php } ?>
    <?php
    ProRMForms::select('productswebinar', null, $options);
    ?>
</div>