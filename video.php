<?php
global $post;


ProRMHelper::handleLangRedirection();

$frontpageCategories = ProRMFrontPage::getCategories($post->ID);

$recentNewsDisplayOptions = array(
    'read_more' => true,
    'read_more_text' => __('more', ProRMTheme::TEXTDOMAIN),
);
get_header();
?>

<style type='text/css'>
    #video_background {

        position: fixed;

        top:0px;
        right: 0px;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1000;
        overflow: hidden;
     /*   background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;*/
        background-size: cover;
    }
    #bgvideo{
        position: fixed;
        bottom: 0px;
        top:0px;
        right: 0px;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1000;
        overflow: hidden;
   /*     background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;*/
        background-size: cover;
    }
    .side-menu.shown{
        height:3000px;
    }



    @media(width:1920px){
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            padding: 20%;

        }
        #content button{
            margin-left:30%;
            font-size:3em;

        }

        #content h1 {
            width:650px;height:130px;margin-left:17%;
            background: rgba(22, 21, 21, 0.4);font-weight:900;font-style:italic;color:#FFFFFF;
        }


    }

    @media(min-height:1081px) and (min-width:1920px){
        #content {
            position: fixed;
            text-align: left;
            width: 100%;

            padding: 20%;

        }
        #content button{
            margin-left:30%;
            font-size:3em;

        }

        #content h1 {
            width:1000px;height:180px;margin-left:4%;
            background: rgba(22, 21, 21, 0.4);font-weight:900;font-style:italic;color:#FFFFFF;
        }


    }


    @media(min-width:1921px){
        #content {
            position: fixed;
            text-align: left;
            width: 100%;

            padding: 20%;

        }
        #content button{
            margin-left:30%;
            font-size:3em;

        }

        #content h1 {
            width:1000px;height:180px;margin-left:12%;
            background: rgba(22, 21, 21, 0.4);font-weight:900;font-style:italic;color:#FFFFFF;
        }


    }

    @media(min-width:1360px) and (max-width:1600px){
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            padding: 10%;
        }
        #content h1 {
            width:650px;height:130px;margin-left:20%;
            background: rgba(22, 21, 21, 0.4);font-weight:900;font-style:italic;color:#FFFFFF;
        }
        #content button{
            margin-left:30%;
            font-size:3em;

        }
    }

        @media(max-width:1359px){
            #content {
                position: fixed;
                text-align: left;
                width: 100%;
                padding: 10%;
            }
        }
    @media(max-width:568px){
	    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top:-5%;
        }
        #content h1 {
            font-size:1.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;



        }
        #content button{
            font-size:1.5em;
            margin-left:25%;


        }
    }
        @media(max-width:360px){
			    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
            #content {
                position: fixed;
                text-align: left;
                width: 100%;
                margin-top:50%;
            }
            #content h1 {
                font-size:1.5em;
                background: rgba(22, 21, 21, 0.4);
                font-weight:900;
                font-style:italic;
                color:#FFFFFF;
            }
            #content button{
                font-size:1.5em;
                margin-left:17%;


            }
        }
    @media(max-width:320px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top:-10%;
        }
        #content h1 {
            font-size:1.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:1.5em;
            margin-left:4.5%;
        }
    }

        @media(min-width:605px) and (max-width:640px){
			    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
            #content {
                position: fixed;
                text-align: left;
                width: 100%;
                margin-top: -10%;

            }
            #content h1 {
                font-size:1.5em;
                background: rgba(22, 21, 21, 0.4);
                font-weight:900;
                font-style:italic;
                color:#FFFFFF;
            }
            #content button{
                font-size:1.5em;
                margin-left:35%;
            }


        }

    @media(min-width:569px) and (max-width:604px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: 50%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:2.5em;
            margin-left:16%;
        }


    }

    @media(min-width:641px) and (max-width:768px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: 90%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:2.5em;
            margin-left:25%;
        }


    }

    @media(width:768px) and (height:1024px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: 40%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:2.5em;

        }


    }

    @media(width:800px) and (height:1280px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: 40%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
            margin-top: 600px;
        }
        #content button{
            font-size:2.5em;

        }


    }

    @media(min-width:769px) and (max-width:966px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: -5%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:2.5em;
            margin-left:30%;
        }


    }
    @media(min-width:967px) and (max-width:1024px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: 10%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:2.5em;
            margin-left:30%;
        }


    }
    @media(min-width:1025px) and (max-width:1280px){
		    #video_background {

        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
        background-size: cover;
    }
    #bgvideo{
  
        background: url(http://promx.net/wp-content/themes/prorm/videos/video.png) no-repeat;
      
    }
        #content {
            position: fixed;
            text-align: left;
            width: 100%;
            margin-top: 10%;

        }
        #content h1 {
            font-size:2.5em;
            background: rgba(22, 21, 21, 0.4);
            font-weight:900;
            font-style:italic;
            color:#FFFFFF;
        }
        #content button{
            font-size:2.5em;
            margin-left:30%;
        }


    }

</style>


<?php

$Path = 'http://promx.net/wp-content/themes/prorm/videos/';
// Количество фонов
$Count = 2;
// Номер случайного фона
$CurrentBackground = mt_rand(1, $Count);



echo( "


    <div id='bgvideo'>
        <video  id='video_background' autoplay muted >

       <source id='sovideo'  src='http://promx.net/wp-content/themes/prorm/videos/1.mp4' type='video/mp4'>
        </video>

        </div>


         <div id='content'>
                   <h1 align='center' id='textVideo' style=''>We are inspired to make</br> your business succesfull!</h1>
        <form action='http://promx.net/en/contact-us'>
        <button  type='submit'  style='text-decoration:none;background: rgba(22, 21, 21, 0.4);border:1px solid #FFFFFF ;font-weight:700;font-style:italic;color:#FFFFFF'>Contact us now</button>

        </form>
        </div>



");


?>





      <!--  <div style='position:relative;'>

        </div>-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script type="text/javascript">
   var ua = navigator.userAgent.toLowerCase();
   var isAndroid = ua.indexOf("android") > -1;
   var iphone= ua.indexOf("iphone") > -1;
   var ipad= ua.indexOf("ipad") > -1;
   var mobile= ua.indexOf("mobile") > -1;
   var blackberry= ua.indexOf("blackberry") > -1;
   var webos= ua.indexOf("webos") > -1;
   var rimTablet= ua.indexOf("rim tablet") > -1;
   if(isAndroid || iphone || mobile || ipad || blackberry || webos || rimTablet) {
        document.getElementById("bgvideo").innerHTML="";
    }




</script>



<script type="text/javascript">
    $(document).ready(function () {
        v_count = 1;
        $("#video_background").bind('ended', function () {
            v_count++;
            if (v_count == 3){
                v_count = 1;}
            $("#sovideo").attr("src", "http://promx.net/wp-content/themes/prorm/videos/" + v_count + ".mp4");
            $("#video_background").load();
            this.play();
        });
    });
</script>




<?php get_template_part('navbar', 'bottom'); ?>




