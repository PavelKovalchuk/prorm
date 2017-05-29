<?php
$name = Tpl::get('field_name');
/** @var ProRMFormFetcher $fetcher */
$fetcher = Tpl::get('fetcher');
if ($fetcher->hasError($name)) {
    ?>
    <span class="error-message <?= ($name == 'desired_date') ? 'error_radio' : ''; ?>"><?php echo $fetcher->getError($name) ?></span>
    <?php
}