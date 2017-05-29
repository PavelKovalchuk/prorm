<?php
ProRMForms::checkbox(
    'subscription',
    __('I would like to have more information about proRM.', ProRMTheme::TEXTDOMAIN),
    '1',
    Tpl::get('field_is_required')
);