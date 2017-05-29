<?php
Tpl::set('field_label_width', 4);
ProRMForms::input(
    'crm_organisation',
    __('CRM Organisation', ProRMTheme::TEXTDOMAIN),
    Tpl::get('field_is_required')
);
Tpl::unsetVar('field_label_width');
