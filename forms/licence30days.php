<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if(!$formSubmitted){
    $options_r1 = array(
        'Ja' => __('Yes', ProRMTheme::TEXTDOMAIN),
        'Nein' => __('No', ProRMTheme::TEXTDOMAIN),
    );
    $options_r5 = array(
        __('1', ProRMTheme::TEXTDOMAIN) => __('1', ProRMTheme::TEXTDOMAIN),
        __('2', ProRMTheme::TEXTDOMAIN) => __('2', ProRMTheme::TEXTDOMAIN),
        __('3', ProRMTheme::TEXTDOMAIN) => __('3', ProRMTheme::TEXTDOMAIN),
        __('4', ProRMTheme::TEXTDOMAIN) => __('4', ProRMTheme::TEXTDOMAIN),
        __('5', ProRMTheme::TEXTDOMAIN) => __('5', ProRMTheme::TEXTDOMAIN),
    );
    $options_r6 = array(
        __('1-5', ProRMTheme::TEXTDOMAIN) => __('1-5', ProRMTheme::TEXTDOMAIN),
        __('6-10', ProRMTheme::TEXTDOMAIN) => __('6-10', ProRMTheme::TEXTDOMAIN),
        __('11-20', ProRMTheme::TEXTDOMAIN) => __('11-20', ProRMTheme::TEXTDOMAIN),
        __('21-50', ProRMTheme::TEXTDOMAIN) => __('21-50', ProRMTheme::TEXTDOMAIN),
        __('51-100', ProRMTheme::TEXTDOMAIN) => __('51-100', ProRMTheme::TEXTDOMAIN),
        __('>101', ProRMTheme::TEXTDOMAIN) => __('>101', ProRMTheme::TEXTDOMAIN),
    );
    $options_crm = array(
        __('On Premise', ProRMTheme::TEXTDOMAIN) => __('On Premise', ProRMTheme::TEXTDOMAIN),
        __('MS Dynamics CRM Online', ProRMTheme::TEXTDOMAIN) => __('MS Dynamics CRM Online', ProRMTheme::TEXTDOMAIN),
        __('Partner Cloud', ProRMTheme::TEXTDOMAIN) => __('Partner Cloud', ProRMTheme::TEXTDOMAIN),
    );
    ?>
    <form class="pro-form" action="" method="post" role="form">
        <input type="hidden" name="licence30days-form" value="licence30days">
        <div class="row">
            <div class="col-md-5 form-col">
                <?php // get_template_part('forms/common/address-info'); ?>
                <?php ProRMForms::input('customer_number', __('Customer Number', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::field('crm_organisation', true) ?>
                <?php ProRMForms::field('salutation', true) ?>

                <?php ProRMForms::input('first_name', __('First Name', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::input('last_name', __('Last Name', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
                <br/>
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('street1', __('Company Address', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('street2', __('Company Address 2', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::input('zipcode', __('Zip Code', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('city', __('City', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::field('country', true) ?>
                <?php ProRMForms::field('phone_valid', __('Phone', ProRMTheme::TEXTDOMAIN), true); ?>
                <br/>
                <?php ProRMForms::field_radio('radiovitem', 'crm_installation', __('CRM Installation', ProRMTheme::TEXTDOMAIN), $options_crm, true); ?>
                <div class="form-v-space-21px"></div>
                <?php ProRMForms::field_radio('radio2item', 'ms_partner', __('Are you a Microsoft CRM Partner?', ProRMTheme::TEXTDOMAIN), $options_r1, true); ?>
                <?php ProRMForms::field_radio('radio2item', 'ms_partner_dedicated', __('Do you have a dedicated MS CRM Partner?', ProRMTheme::TEXTDOMAIN), $options_r1, true); ?>
                <?php ProRMForms::textarea_cust('anschrift_partner', __('If “yes”, what is the name and address of your Partner?', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::field_radio('radio6item', 'number_prorm_users', __('Number of potential proRM Users', ProRMTheme::TEXTDOMAIN), $options_r6, true); ?>
                <?php ProRMForms::field_radio('radio6item', 'number_mscrm_users', __('Number of Microsoft Dynamics CRM User', ProRMTheme::TEXTDOMAIN), $options_r6, true); ?>
            </div>
            <div class="col-md-7 form-col">
                <?php // ProRMForms::field('notes', false) ?>
                <div class="form-group-label">
                    <?php _e('How would you rate proRM Business Solutions on a scale from 1 (poor) to 5 (very good)?', ProRMTheme::TEXTDOMAIN); ?>
                </div>
                <div class="form-v-space-10px"></div>
                <?php ProRMForms::field_radio('radio5item', 'price', __('Price:', ProRMTheme::TEXTDOMAIN), $options_r5, true); ?>
                <?php ProRMForms::field_radio('radio5item', 'deployment_time', __('Time of Installation:', ProRMTheme::TEXTDOMAIN), $options_r5, true); ?>
                <?php ProRMForms::field_radio('radio5item', 'functionality', __('Functionality:', ProRMTheme::TEXTDOMAIN), $options_r5, true); ?>
                <?php ProRMForms::field_radio('radio5item', 'compatibility', __('Compatibility:', ProRMTheme::TEXTDOMAIN), $options_r5, true); ?>
                <?php ProRMForms::field_radio('radio5item', 'performance', __('Performance:', ProRMTheme::TEXTDOMAIN), $options_r5, true); ?>
                <?php ProRMForms::textarea('your_pros', __('Please give us proRM’s pros', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::textarea('your_cons', __('Please give us proRM’s cons', ProRMTheme::TEXTDOMAIN), false); ?>
                <div class="form-v-space-10px"></div>
                <?php ProRMForms::field_radio('radio2item', 'buy_prorm_licenses', __('Do you want to buy proRM licenses?', ProRMTheme::TEXTDOMAIN), $options_r1, false); ?>
                <?php ProRMForms::input('number_prorm_licenses', __('If “yes”, how many?', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::field_radio('radio2item', 'get_info_upcoming', __('Do you want to be informed for upcoming proRM Applications and proRM Editions?', ProRMTheme::TEXTDOMAIN), $options_r1, true); ?>
                <?php ProRMForms::field_radio('radio2item', 'receive_further_info', __('Do you want to receive further information about other proRM products?', ProRMTheme::TEXTDOMAIN), $options_r1, false); ?>
                <?php // ProRMForms::field('receive_further_info2', true) ?>
                <?php ProRMForms::field('data_usage', true) ?>
                <br>
                <?php // ProRMForms::field('subscription', false) ?>
                <br>
                <?php ProRMForms::field('form_comment') ?>
                <?php ProRMForms::field('send_button') ?>

            </div>
        </div>
    </form>
<?php } ?>
