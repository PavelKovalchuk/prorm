<?php
/** @var WP_Post $card */
$card = Tpl::get('card');

if ($card) {
    $activeCard = Tpl::get('active-card');
    $isActive = ($card->ID === $activeCard->ID);
    $title = ProRMCards::getTitle($card);
    $linkedPageUrl = ProRMCards::getLinkedPageUrl($card);
    $buttonText = ProRMCards::getButtonText($card);
    $additionalStyles = ProRMCards::getAdditionalStyles($card);
    list($bigImageUrl, $bigImageWidth, $bigImageHeight) = ProRMCards::getBigImageSrc($card);
    list($smallImageUrl, $smallImageWidth, $smallImageHeight) = ProRMCards::getSmallImageSrc($card);
    $bigFonImageUrl = ProRMCards::getBGroundImageSrc($card);
    $containerClass = ProRMCards::getContainerClass($card);

    if ($additionalStyles) {
        echo '<style>' . $additionalStyles . '</style>';
    }
    $bigStyleAttribute = '';
    $smallStyleAttribute = '';
    if ($bigImageUrl) {
        $bigStyleAttribute = sprintf('style="background-image: url(%s);width:%dpx;margin-left:%dpx"', $bigImageUrl, $bigImageWidth, -$bigImageWidth / 2);
        $bigFonStyleAttribute = sprintf('style="background-image: url(%s); background-size: cover;"', $bigFonImageUrl);
    }
    if ($smallImageUrl) {
        $smallStyleAttribute = sprintf('style="background-image: url(%s);height:%dpx;"', $smallImageUrl, $smallImageHeight);
    }
    ?>
    <div id="card-<?php echo $card->ID ?>"
         class="card <?php echo $isActive ? 'active' : '' ?> <?php echo $containerClass ?>"
        <?php echo $bigFonStyleAttribute; ?>
        >
        <div class="card-bg-small visible-xs" <?php echo $smallStyleAttribute ?>
             data-initial-width="<?php echo $smallImageWidth ?>"
             data-initial-height="<?php echo $smallImageHeight ?>"
            ></div>
        <div class="card-bg <?php echo $bigImageUrl ? '' : 'no-bg' ?>" <?php echo $bigStyleAttribute ?>
             data-initial-width="<?php echo $bigImageWidth ?>"
             data-initial-height="<?php echo $bigImageHeight ?>"
            >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 card-col">

                        <?php if ($title) { ?>
                        <span style="font-weight: 100;font-style: italic;font-size: 4em;color: #fff;margin: .8em 0 .5em;width: 62%;"><?php echo $title ?></span>
                        <?php } ?>

                        <?php if ($card->post_content) { ?>
                        <div class="text-holder">
                            <?php echo apply_filters('the_content', $card->post_content) ?>
                        </div>
                        <?php } ?>

                        <?php if ($linkedPageUrl) { ?>
                        <a href="<?php echo $linkedPageUrl ?>" class="pro-btn"><span><?php echo $buttonText ?></span></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>