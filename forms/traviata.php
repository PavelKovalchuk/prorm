<?php

    ?>
    <form class="pro-form" id="cebit-form" action="" method="post" role="form" style="background-color: transparent;">
        <input type="hidden" name="traviata-form" value="traviata-form">
        <div class="row form-road" style="margin:0 auto;">
            <div class="col-sm-12">
            <div class="col-md-2 col-sm-12 form-col name" style="padding: 20px 10px 0px;">
                <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>
            <div class="col-md-2 col-sm-12 form-col input" style="padding: 20px 10px 0px;">
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>
            <div class="col-md-2 col-sm-12 form-col  input" style="padding: 20px 10px 0px;">
                <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>
            <div class="col-md-2 col-sm-12 form-col  input phone" style="padding: 20px 10px 0px;">
               <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>




            <div class="col-md-4 col-sm-12 form-col button" style="padding: 20px 10px 0px;">
                <button  class="link-road-form" style="text-decoration: none;color:#ffffff;
    background-color: #0179d8;
    padding: 9px 45px;
    font-weight: 500;
    border:none">
                    <span>Termin vereinbaren</span>
                </button>
            </div>
            </div>





        </div>
    </form>
