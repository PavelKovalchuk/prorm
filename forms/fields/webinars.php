<?php
/** @var ProRMForms_Webinar $form */
$form = Tpl::get('form');
Tpl::set('field_label_width', 5);
$options = array('0' => __('select please', ProRMTheme::TEXTDOMAIN))
    + $form->getWebinarOptions() + array( __('Desired Appointment', ProRMTheme::TEXTDOMAIN) => __('Desired Appointment', ProRMTheme::TEXTDOMAIN));

ProRMForms::select(
    'webinar',
    __('Webinar', ProRMTheme::TEXTDOMAIN),
    $options,
    Tpl::get('field_is_required')
);
Tpl::unsetVar('field_label_width');