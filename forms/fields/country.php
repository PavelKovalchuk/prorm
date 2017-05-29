<?php
/** @var ProRMForms_Abstract $form */
$form = Tpl::get('form');
ProRMForms::select(
    'country',
    __('Country', ProRMTheme::TEXTDOMAIN),
    $form->getCountries(),
    Tpl::get('field_is_required')
);
