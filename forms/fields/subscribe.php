<?php
    $id_btn = Tpl::get('id_btn');
    $btn_class = '';
    if(is_singular('post')){
        $btn_class = 'button-prorm-red-white btn-eff-bigger';
    }else{
        $btn_class = 'button-prorm-white-transparent ';
    }
?>
<button id="<?= $id_btn; ?>" type="button" class="contact-button button-prorm <?php echo $btn_class; ?>">
    <span class="btn-text-outer"><?php _e('Subscribe', ProRMTheme::TEXTDOMAIN) ?></span>
</button>
