<?php
/** @var WP_Post[] $cards Card posts */
$cards = ProRMCards::getPublishedCards();
if (count($cards)) {
    Tpl::set('active-card', current($cards));
?>
<div class="cards-holder slider-top">
    <?php
    foreach ($cards as $card) {
        Tpl::set('card', $card);
        get_template_part('content', 'card');
    }
    ?>
    <?php if (count($cards) > 1) { ?>
    <div class="cards-switcher">
        <?php foreach ($cards as $card) { ?>
            <div class="card-point" data-card-name="<?php echo $card->ID ?>"></div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
<?php
}

Tpl::set('card', null);
Tpl::set('active-card', null);
?>