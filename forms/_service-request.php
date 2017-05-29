<?php
$formSubmitted = get_query_var('form_submitted');
$formErrorMessage = get_query_var('form_error_message');
$topics = array();
?>
<?php if ($formSubmitted === true) { ?>
<p class="form-success-message"><?php _e('Thank you for your request.', ProRMTheme::TEXTDOMAIN); ?></p>
<?php } elseif ($formSubmitted === false) { ?>
    <p class="form-error-message"><?php echo $formErrorMessage ?></p>
<?php } else { ?>
<form class="pro-form" action="" method="post" role="form">
    <input type="hidden" name="service-request" value="service-request">
    <div class="row">
        <div class="col-md-5 form-col">
            <div class="form-group">
                <label for="sr-topic" class="red">
                    <?php _e('What topic do you<br>have question about?', ProRMTheme::TEXTDOMAIN); ?>
                </label>
                <select id="sr-topic" class="form-control" name="pro[topic]">
                    <option><?php _e('select please', ProRMTheme::TEXTDOMAIN) ?></option>
                    <option value="topic-1">Topic 1</option>
                    <option value="topic-2">Topic 2</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[company]"
                       placeholder="<?php _e('Company', ProRMTheme::TEXTDOMAIN) ?>*">
            </div>
            <div class="form-group row">
                <label for="title" class="col-md-2 control-label"><?php _e('Title', ProRMTheme::TEXTDOMAIN) ?></label>
                <div class="col-md-10">
                    <select id="title" class="form-control" name="pro[title]">
                        <option value="<?php _e('Mr.', ProRMTheme::TEXTDOMAIN) ?>"><?php _e('Mr.', ProRMTheme::TEXTDOMAIN) ?></option>
                        <option value="<?php _e('Ms.', ProRMTheme::TEXTDOMAIN) ?>"><?php _e('Ms.', ProRMTheme::TEXTDOMAIN) ?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[first_name]"
                       placeholder="<?php _e('First Name', ProRMTheme::TEXTDOMAIN) ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[last_name]"
                       placeholder="<?php _e('Last Name', ProRMTheme::TEXTDOMAIN) ?>*">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[position]"
                       placeholder="<?php _e('Position', ProRMTheme::TEXTDOMAIN) ?>">
            </div>
            <div class="form-group row">
                <label for="number_of_users" class="col-md-6 control-label"><?php _e('Number of users', ProRMTheme::TEXTDOMAIN) ?>*</label>
                <div class="col-md-6">
                    <select id="number_of_users" class="form-control" name="pro[number_of_users]">
                        <option><?php _e('select please', ProRMTheme::TEXTDOMAIN) ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[city]"
                       placeholder="<?php _e('City', ProRMTheme::TEXTDOMAIN) ?>">
            </div>
            <div class="form-group row">
                <label for="country" class="col-md-3 control-label"><?php _e('Country', ProRMTheme::TEXTDOMAIN) ?></label>
                <div class="col-md-9">
                    <select id="country" class="form-control" name="pro[country]">
                        <option><?php _e('select please', ProRMTheme::TEXTDOMAIN) ?></option>
                        <option value="Deutschland">Deutschland</option>
                        <option value="Ukraine">Ukraine</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[phone]"
                       placeholder="<?php _e('Phone', ProRMTheme::TEXTDOMAIN) ?>*">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pro[email]"
                       placeholder="<?php _e('E-Mail', ProRMTheme::TEXTDOMAIN) ?>*">
            </div>
        </div>
        <div class="col-md-7 form-col">
            <div class="form-group">
                <textarea class="form-control" name="pro[notes]" cols="40" rows="8"
                       placeholder="<?php _e('Notes', ProRMTheme::TEXTDOMAIN) ?>*"></textarea>
            </div>
            <br>
            <br>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="pro[ich-stimme]" value="1"> <?php _e('Ich stimme zu, dass meine Die Kombination aus Microsoft Dynamics CRM mit proRM ist die Revolution fur Ihr Unternehmen. Proin gravida elit non orci consequat, in rhoncus orci eleifend.', ProRMTheme::TEXTDOMAIN) ?>
                </label>
            </div>
            <br>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="pro[ich-mochte]" value="1"> <?php _e('Ich mochte weitere ...', ProRMTheme::TEXTDOMAIN) ?>
                </label>
            </div>
            <br>
            <br>
            <p class="form-comment"><?php _e('Fields marked with * must be filled', ProRMTheme::TEXTDOMAIN) ?></p>
            <br>
            <button class="pro-btn" type="submit"><span>Send</span></button>
        </div>
    </div>
</form>
<?php } ?>