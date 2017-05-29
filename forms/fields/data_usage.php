<?php
ProRMForms::checkbox(
    'data_usage',
    __('I agree that proMX collects, processes and uses my personal data.<br> I can revoke this permission at any time.', ProRMTheme::TEXTDOMAIN),
    '1',
    Tpl::get('field_is_required')
);