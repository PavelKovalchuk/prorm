<?php
$options = array(
    __('Mr.', ProRMTheme::TEXTDOMAIN) => __('Mr.', ProRMTheme::TEXTDOMAIN),
    __('Mr.', ProRMTheme::TEXTDOMAIN) => __('Mr.', ProRMTheme::TEXTDOMAIN),
    __('Ms.', ProRMTheme::TEXTDOMAIN) => __('Ms.', ProRMTheme::TEXTDOMAIN),
);
ProRMForms::select('salutation', __('Salutation', ProRMTheme::TEXTDOMAIN), $options, Tpl::get('field_is_required'));
