function genSmoothImage(){
    var srcUrl = jQuery('.acf-button-generate').attr('data-imgenerate');
    var boxMessage = jQuery('.acf-image-uploader .tmp-message');
    if(srcUrl){
        boxMessage.html("Wait, image is transforming");
        boxMessage.show();
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : '/wp-admin/admin-ajax.php?action=generate_smooth_img',
            data : {"srcUrl": srcUrl},
            success: function(msg) {
                if(!msg){
                    boxMessage.html("Not defined error");
                } else {
                    if(msg.resultImgGenerate){
                        boxMessage.html('Image transformed successfully');
                    } else {
                        boxMessage.html(msg.errorMessage);
                    }
                }
            }
        });
    } else {
        boxMessage.html('You should save page at first');
        boxMessage.show();
    }
    event.preventDefault();
}
