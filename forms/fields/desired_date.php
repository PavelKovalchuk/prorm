<?php
Tpl::set('field_label_width', 5);
ProRMForms::select(
    'desired_date',
    __('Desired date', ProRMTheme::TEXTDOMAIN),
    array(
        '0' => __('select please', ProRMTheme::TEXTDOMAIN),
    ),
    Tpl::get('field_is_required')
);
Tpl::unsetVar('field_label_width');