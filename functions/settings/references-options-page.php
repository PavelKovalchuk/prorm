<div class="wrap">
    <h2>References Template Settings</h2>
    <form method="post" action="options.php" class="prorm-settings">
        <?php
        settings_fields('references-group');
        do_settings_sections('references');
        ?>
        <?php submit_button(); ?>
    </form>
</div>