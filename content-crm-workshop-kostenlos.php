<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>

    <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/crm-workshop-kostenlos.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid content main  visible-md visible-lg">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-8">
                    <img class="logo-workshop"  src="<?php echo ProRMTheme::url(); ?>/images/logo-super-end.png">
                    <span class="cloud-workshop-span" style="position: absolute;z-index: 2"><span class="first-cloud-words">Noch nichts vom kostenlosen</span></br><span class="first-cloud-words">Workshop von den CRM-Experten</span></br><span class="third-cloud-words" style="font-weight:600;">der proMX GmbH gehört?</span></span>
                    <div class="imageCelebrate"><center><img class="cloud-workshop" style="max-width:100%;height:auto;" src="<?php echo ProRMTheme::url(); ?>/images/cloud-landing.png">

                    <div class="col-sm-7" style="left:18%;"><img class="img-responsive man-workshop"  src="<?php echo ProRMTheme::url(); ?>/images/man.png">
                    </div>

                    </div>

                </div>
                <div class="col-sm-4 col-sm-pull-1">
                    <?php echo do_shortcode( '[form name=workshop]' ); ?>
                </div>
               <img class="img-responsive"  style="width:100%;position:fixed;left:0;right:0;bottom:0;" src="<?php echo ProRMTheme::url(); ?>/images/logo-landing.png">
            </div>
        </div>
    </div>

    <div class="container-fluid content-mobi visible-xs visible-sm" style="margin-bottom:50px;margin-top:0;background-color:#d5dde3;">
        <div class="no">
        <div>

                 <div style="width:110%;height:250px;background-color: #ffffff;margin-left:-15px;">
            <img class="logo-landing" style="position:absolute;top:15px;width:30%;height:auto;" src="<?php echo ProRMTheme::url(); ?>/images/logo.png">
            <div class="span-last-landing" style="position: absolute;"><span style="font-size:20px;">Noch nichts vom kostenlosen</span></br><span style="font-size:20px;">Workshop von den CRM-Experten</span></br><span style="font-size:25px;font-weight:600;">der proMX GmbH gehört?</span></div>

            <center><div class="btn-row btn-last-landing" style="position:absolute;">
                    <a href="#request" ><button class="but-get" style="background-color: #941043;border:0;padding: 10px 15px 10px;font-weight:400;">
                            <span style="text-transform: uppercase;color:#ffffff;">Jetzt anmelden</span>
                        </button></a></div></center>
                </div>

            <div>
                <img style="width:110%;margin-left:-15px;" src="<?php echo ProRMTheme::url(); ?>/images/man-mb-two.jpg">



            </div>

        </div>

       <!-- <p class="for-wpc">*for Microsoft WPC participants only</p> -->
        </div>
        <div id="request">
        <?php echo do_shortcode( '[form name=workshopmobile]' ); ?>
            </div>
    </div>



<script type="text/javascript">
    $('.form-success-message p').wrap('<center>')
    $('.form-success-message').before ('<center><img class="ball"  style="margin-top:20px;margin-bottom: 20px;" src="http://prorm.webdev.acceptic.com/wp-content/themes/prorm/images/gift-landing.png"></center>');
    if($('.form-success-message').css('display') =='block'){
        $('.no').hide();

    }
    </script>

</body>





