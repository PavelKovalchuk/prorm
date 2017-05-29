<?php
/** @var ProRMForms_Microsoft $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = $form->getEventsObjects();

ProRMForms::radio('desired_date', $options, true);
    ?>
