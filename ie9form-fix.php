<style>
    .form-input-ph{
        color: rgb(156, 156, 156) !important;
    }
</style>
<script type="text/javascript">
<!--
    document.ready = function(){
        var inputsFormElem = $('.pro-form').find(':input');
        inputsFormElem.each(function() {
            var thisPH = $(this).attr("placeholder");
            if(thisPH && (thisPH != 'undefined')){
                if(!$(this).val()){
                    $(this).val(thisPH);
                    $(this).addClass("form-input-ph");
                }
            }
        });
        $('.pro-form').on('submit', function(){
            inputsFormElem.each(function() {
                var thisPH = $(this).attr("placeholder");
                if(thisPH && (thisPH != 'undefined')){
                    if(thisPH == $(this).val()){
                        $(this).val('');
                    }
                }
            });
        });
        inputsFormElem.on('click', function(){
            if($(this).val() == $(this).attr("placeholder")) {
                $(this).val('');
                $(this).removeClass("form-input-ph");
            }
        });
        inputsFormElem.on('blur', function(){
            if($(this).val() == '') {
                $(this).val($(this).attr("placeholder"));
                $(this).addClass("form-input-ph");
            }
        });
    }
-->
</script>