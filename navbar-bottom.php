<nav class="navbar-bottom navbar navbar-default navbar-fixed-bottom" role="navigation" style="background-image:url('http://promx.staging.acceptic.com/wp-content/themes/prorm/images/ProRM-year.png');background-size:cover;background-repeat:no-repeat;">
    <div class="container">
        <div class="row">
            <?php ProRMTheme::showBottomMenu(); ?>
        </div>
    </div>
</nav>

<?php /*
<nav class="navbar-right navbar navbar-default navbar-fixed-right" role="navigation">
    <div class="container">
        <div class="row">
            <?php ProRMTheme::showRightMenu(); ?>
        </div>
    </div>
</nav>
 */ ?>

<script type="text/javascript">
    //fix IE bug - курсор в инпуте просвечивает через верхнее меню
    window.onload = function(){
        $(document).scroll(function(){
            checkInputFocus();
            checkTextareaFocus();
        });
        $('input').focus(function(){
            checkInputFocus();
        });
        $('textarea').focus(function(){
            checkTextareaFocus();
        });
    }
    function checkInputFocus(){
        if($('input:focus').length > 0){
            var curInput = $('input:focus');
            var inputPosY = curInput.offset().top + curInput.outerHeight() / 2;
            //var screenAvHeight = window.screen.availHeight - 100;
        }
        if(inputPosY){
            if((inputPosY - $(document).scrollTop()) > (window.innerHeight - $(".navbar-bottom").outerHeight())){
                $('input:focus').blur();
            }
            if((inputPosY - $(document).scrollTop()) < $(".navbar-top").outerHeight()){
                $('input:focus').blur();
            }
        }
    }
    function checkTextareaFocus(){
        if($('textarea:focus').length > 0){
            var curInput = $('textarea:focus');
            var inputPosY = curInput.offset().top + curInput.outerHeight() / 2;
        }
        if(inputPosY){
            if((inputPosY - $(document).scrollTop()) > (window.innerHeight - $(".navbar-bottom").outerHeight())){
                $('textarea:focus').blur();
            }
            if((curInput.offset().top - $(document).scrollTop()) < $(".navbar-top").outerHeight()){
                $('textarea:focus').blur();
            }
        }
    }
</script>


