<?php
ProRMForms::checkbox(
    'data_angebot',
    __('I would like to receive proRM Newsletter.', ProRMTheme::TEXTDOMAIN),
    '1',
    Tpl::get('field_is_required')
);