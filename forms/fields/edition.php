<?php
/** @var ProRMForms_Request $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('Default' => __('select please', ProRMTheme::TEXTDOMAIN))+ $form->getEditionOptions();
$allAppsLink = $form->getAllAppsLink();
$allEditionsLink = $form->getAllEditionsLink();

?>
<div class="form-group">
    <label for="pro_edition" class="red">
        <?php _e('What proRM editions you are interested in?', ProRMTheme::TEXTDOMAIN); ?>
    </label>
    <?php
    ProRMForms::select('edition', null, $options);
    ?>
    <a href="<?php echo $allEditionsLink ?>" class="alignright"><?php _e('All Editions at a glance &gt;', ProRMTheme::TEXTDOMAIN); ?></a><br />
    <a href="<?php echo $allAppsLink ?>" class="alignright"><?php _e('All Apps at a glance &gt;', ProRMTheme::TEXTDOMAIN); ?></a>
</div>