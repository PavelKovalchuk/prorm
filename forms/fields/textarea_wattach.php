<?php
$asterisk = Tpl::get('field_is_required') ? '*' : '';
$label = Tpl::get('field_label') . $asterisk;
$name = Tpl::get('field_name');

$name_fattach_ic = Tpl::get('file_attach_ic');

$label_fattach = 'You can attach file (max size 2Mb)';
$label_del_file = 'Delete attached file';

/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
?>
<div class="form-group <?php if ($fetcher->hasError($name)) echo 'has-error'; ?>">
    <label class="sr-only" for="pro_<?php echo $name ?>"><?php echo $label ?></label>
    <textarea id="pro_<?php echo $name ?>" class="form-control" name="pro[<?php echo $name ?>]"
              cols="40" rows="8" placeholder="<?php echo $label ?>"><?php echo $fetcher->getData($name) ?></textarea>

    <div class="field-file-attach">
        <input type="hidden" name="MAX_FILE_SIZE" value="2049000">
        <input type="hidden" name="pro[file-attach-name-ic]" value="<?php echo $name_fattach_ic ?>" id="file-attach-name-ic">
        <input type="hidden" name="pro[file-attach-name-last]" value="<?php echo $name_fattach_ic ?>" id="file-attach-name-last">
        <input type="file" name="pro[field_file_attach]" id="field-file-attach" onpropertychange="file_attach_selected(this);" onchange="file_attach_selected(this);">
        <div id="file-attach-but" title="<?php _e($label_fattach, ProRMTheme::TEXTDOMAIN); ?>">&nbsp;</div>
        <?php ProRMForms::field('_error') ?>
        <div id="file-attach-name" <?php if(!$name_fattach_ic) echo 'style="display:none"'; ?> >
            <div class="file-an-label"><?php echo $name_fattach_ic; ?></div>
            <div class="file-an-del" onclick="file_attach_deleted();"><img src="<?php echo ProRMTheme::url(); ?>/images/del_attf.png" width="21" height="21" title="<?php _e($label_del_file, ProRMTheme::TEXTDOMAIN); ?>"></div>
        </div>
    </div>
    <script type="text/javascript">
        <!--
        document.getElementById('file-attach-but').onclick = function(){
            document.getElementById('field-file-attach').click();
            var url = $('#field-file-attach').val();
            if(url){
                var file_name = get_attack_file_name(url);
                show_field_attach_file(file_name);
            }
        }
        function file_attach_selected(elem) {
            var url = elem.value;
            var file_name = get_attack_file_name(url);
            if(file_name) {
                show_field_attach_file(file_name);
            }
        }
        function file_attach_deleted() {
            $('#file-attach-name-ic').val('');
            $('#file-attach-name .file-an-label').html('');
            $('#file-attach-name').hide();
        }
        function get_attack_file_name(full_name){
            var url_splitted = full_name.split('\\');
            var file_name = url_splitted[url_splitted.length-1];
            return file_name;
        }
        function show_field_attach_file(file_name){
            $('#file-attach-name-ic').val(file_name);
            $('#file-attach-name .file-an-label').html(file_name);
            $('#file-attach-name').show();
        }
        -->
    </script>
</div>
<div class="form-v-space-21px"></div>
