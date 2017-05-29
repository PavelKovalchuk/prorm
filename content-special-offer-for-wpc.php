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
    <link href="<?php echo ProRMTheme::url(); ?>/css/offer-wpc.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
</head>
<body style="background-color:#d5dde3;">
    <div class="container-fluid content main  visible-md visible-lg" >
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-8">
                    <img style="margin-left: 2%;" src="<?php echo ProRMTheme::url(); ?>/images/logo-super-end.png">
                    <span style="position: absolute;margin-left:15%;margin-top:5%;z-index: 2"><span style="font-size:40px">Do you want</span></br><span style="font-size:40px">to get a FREE</span></br><span style="font-size:50px;font-weight:600;">WORKSHOP?</span></span>
                    <div class="imageCelebrate"><center><img style="max-width:100%;height:auto;width:70%;margin-top:-20px;" src="<?php echo ProRMTheme::url(); ?>/images/cloud-landing.png">

                    <div class="col-sm-7" style="left:18%;"><img class="img-responsive" style="width:60%;float:left;margin-left:-15%;" src="<?php echo ProRMTheme::url(); ?>/images/man.png">
                        <!--<div><span class="required">*for Microsoft WPC participants only</span></div> --></div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <?php echo do_shortcode( '[form name=wpc]' ); ?>

                </div>
               <img class="img-responsive"  style="width:100%;position:fixed;left:0;right:0;bottom:0" src="<?php echo ProRMTheme::url(); ?>/images/logo-landing.png">
            </div>
        </div>
    </div>

    <div class="container-fluid content-mobi visible-xs visible-sm" style="margin-bottom:50px;margin-top:0;background-color:#d5dde3;">
        <div class="no">
        <div>

               <div><img style="width:110%;margin-left:-15px;" src="<?php echo ProRMTheme::url(); ?>/images/man-for-mb.png">
                   <span style="position: absolute;top:5%;left:25%;"><span style="font-size:30px;">Do you want</span></br><span style="font-size:30px;">to get a FREE</span></br><span style="font-size:35px;font-weight:600;">WORKSHOP?</span></span>
                   <img style="margin-left: 5%;position:absolute;top:15px;width:30%;height:auto;" src="<?php echo ProRMTheme::url(); ?>/images/wpc-mobile/logo.png"></div>

            <p class="btn-row" style="margin-top:-20%;"><center>
                <a href="#request" ><button class="but-get" style="background-color: #941043;border:0;padding: 10px 15px 10px;font-weight:400;">
                    <span style="text-transform: uppercase;color:#ffffff;">get a gift now</span>
                </button></a></center>
            </p>

        </div>

       <!-- <p class="for-wpc">*for Microsoft WPC participants only</p> -->
        </div>
        <div id="request">
        <?php echo do_shortcode( '[form name=wpcmobile]' ); ?>
            </div>
    </div>



<script type="text/javascript">
    $('.form-success-message p').wrap('<center>')
    $('.form-success-message').before ('<center><img class="ball"  src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/gift-landing.png"></center>');
    if($('.form-success-message').css('display') =='block'){
        $('.no').hide();

    }
    </script>

</body>





