<div class="container sidebar-partners">
    <div class="row">
        <div class="col-sm-12">
            <div class="sidebar partners">
                <div class="row">
                    <?php if (is_active_sidebar('partners')) { ?>
                        <?php dynamic_sidebar('partners'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>