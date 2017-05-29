<?php

$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getEditionQuickOptions();


/*$allAppsLink = $form->getAllAppsLink();
$allEditionsLink = $form->getAllEditionsLink();*/

?>
<div class="form-group">
     <?php  if(pll_current_language('slug') == 'en'){ ?>
		<label for="pro_edition" class="red">
			<?php _e('Please choose the solution you would like to test:', ProRMTheme::TEXTDOMAIN); ?>
		</label>
   <?php } else { ?>
	   <label for="pro_edition" class="red">
			<?php _e('Bitte wählen Sie die Lösung aus, die Sie ausprobieren möchten:', ProRMTheme::TEXTDOMAIN); ?>
		</label>
	<?php } ?>
    <?php
    ProRMForms::select('products', null, $options);
    ?>
</div>