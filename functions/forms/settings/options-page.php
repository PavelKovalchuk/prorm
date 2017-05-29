<div class="wrap">
    <h2>ProRM Form Settings</h2>
    <form method="post" action="options.php" class="prormform-settings">
        <?php
        settings_fields('prormform-group');
        do_settings_sections('prormform');
        ?>
        <?php submit_button(); ?>
    </form>
</div>