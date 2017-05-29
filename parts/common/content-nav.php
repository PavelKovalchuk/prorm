<?php
global $wp_query;

if ( $wp_query->max_num_pages > 1 ) { ?>

    <div class="btn-holder">
        <?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older articles', ProRMTheme::TEXTDOMAIN ) ); ?>
        <?php previous_posts_link( __( 'Newer articles <span class="meta-nav">&rarr;</span>', ProRMTheme::TEXTDOMAIN ) ); ?>
    </div>

<?php
}