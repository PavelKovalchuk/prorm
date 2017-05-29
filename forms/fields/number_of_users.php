<?php
Tpl::set('field_label_width', 4);
ProRMForms::input(
    'number_of_users',
    __('Number of users', ProRMTheme::TEXTDOMAIN),
    Tpl::get('field_is_required')
);
Tpl::unsetVar('field_label_width');
