<div class="wrap">
    <h2>ProRM Specific Settings</h2>
    <form method="post" action="options.php" class="prorm-settings">
        <?php
        settings_fields('prorm-group');
        do_settings_sections('prorm');
        ?>
        <?php submit_button(); ?>
    </form>
</div>