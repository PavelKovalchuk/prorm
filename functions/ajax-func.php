<?php
define('MIN_CL_WIDTH_TO_TABS', 620); // min width '.container' for show tabs

add_action("wp_ajax_get_box_news", "get_box_news");
add_action("wp_ajax_nopriv_get_box_news", "get_box_news");

function get_box_news(){
    $clWidth = 0;
    if(isset($_POST['clWidth'])){
        $clWidth = (int)$_POST['clWidth'];
    }
    $tabsNewsContent = false;
    if($clWidth >= MIN_CL_WIDTH_TO_TABS) $tabsNewsContent = true;

    Tpl::set('tabsNewsContent', $tabsNewsContent);
    ob_start();
    get_template_part('parts/newsroom/categ-blocks');
    $categBlocks = ob_get_clean();
    if(!$categBlocks) $categBlocks ='';
    $res['categBlocks'] = $categBlocks;
    $res['tabs'] = $tabsNewsContent;
    echo json_encode($res);
    die();
}

add_action("wp_ajax_get_box_offices", "get_box_offices");
add_action("wp_ajax_nopriv_get_box_offices", "get_box_offices");

function get_box_offices(){
    $clWidth = 0;
    if(isset($_POST['clWidth'])){
        $clWidth = (int)$_POST['clWidth'];
    }
    $screenSizeMobil = false;
    if($clWidth < MIN_CL_WIDTH_TO_TABS) $screenSizeMobil = true;

    Tpl::set('screenSizeMobil', $screenSizeMobil);
    ob_start();
    get_template_part('sidebar-offices');
    $sidebarOffices = ob_get_clean();
    if(!$sidebarOffices) $sidebarOffices ='';
    $res['sidebarOffices'] = $sidebarOffices;
    $res['screenSizeMobil'] = $screenSizeMobil;
    echo json_encode($res);
    die();
}


/* Transform image. For acf custom field image_bgr*/
add_action( 'init', 'reg_ajax_script_genimg' );
function reg_ajax_script_genimg() {
    add_action("wp_ajax_generate_smooth_img", "generate_smooth_img");
    wp_register_script( "jscript_genimg", '/wp-content/themes/prorm/js/create_sm_img.js', array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script( 'jscript_genimg' );
}

function generate_smooth_img(){
    define('COUNT_APP_FILTER_SM', 50);
    define('ERROR_MESS_SAVE_IMG', 'Save image Error');
    $srcUrl = false;
    $res['resultImgGenerate'] = false;

    if(isset($_POST['srcUrl'])){
        $srcUrl = strip_tags($_POST['srcUrl']);
    }

    if($srcUrl){
        $srcFileExt = strrchr($srcUrl, '.');
        if(($srcFileExt == '.jpg') || ($srcFileExt == '.jpeg') || ($srcFileExt == '.png')){
            if(($srcFileExt == '.jpg') || ($srcFileExt == '.jpeg')) $im = imagecreatefromjpeg($srcUrl);
            if($srcFileExt == '.png') $im = imagecreatefrompng($srcUrl);
        } else {
            $res['errorMessage'] = 'Invalid file extension';
        }
        if(!$im) {
            $res['errorMessage'] = 'Invalid file load';
        }

    }

    if($im) {
        for($i=0; $i<COUNT_APP_FILTER_SM; $i++) {
            if(!imagefilter($im, IMG_FILTER_SMOOTH, 1)){
                $res['errorMessage'] = 'Smooth image Error';
                break;
            }
            //imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
        }
        if(!isset($res['errorMessage'])){
            //$urlDest = str_replace($srcFileExt, '-sm'.$srcFileExt, $srcUrl);
            $urlDest = '../' . strstr($srcUrl, 'wp-content/uploads');
            if(($srcFileExt == '.jpg') || ($srcFileExt == '.jpeg')) {
                if(!imagejpeg($im, $urlDest)){
                    $res['errorMessage'] = ERROR_MESS_SAVE_IMG;
                }
            }
            if($srcFileExt == '.png') {
                if(imagepng($im, $urlDest)){
                    $res['errorMessage'] = ERROR_MESS_SAVE_IMG;
                }
            }
            $res['resultImgGenerate'] = true;
        }
        imagedestroy($im);
    }

    echo json_encode($res);
    die();
}
?>
