<?php

abstract class ProRMCustomMetaBoxes
{
    public static function init()
    {
        self::addMetaBoxes();
    }

    /**
     * Add custom fields: page_hide_title
     *
     * @return void
     */
    private static function addMetaBoxes()
    {
        add_action( 'add_meta_boxes', 'cd_meta_box_add' );
        function cd_meta_box_add()
        {
            add_meta_box( 'my-meta-box-id', 'Selected proRm Edition', 'cd_meta_box_cb', 'post', 'side', 'default' );
            add_meta_box( 'my-meta-box-id', 'Selected proRm Edition', 'cd_meta_box_cb', 'page', 'side', 'default' );
        }

        function cd_meta_box_cb($post)
        {

            $values = get_post_custom( $post->ID );
            $selected = isset( $values['my_meta_box_select'] ) ? esc_attr( $values['my_meta_box_select'][0] ) : '';
			var_dump($selected);

             // We'll use this nonce field later on when saving.
            wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

            $options = array(
                ''=> '- none -',
                'proRM Freemium' => 'proRM Freemium',
                'proRM Essential' => 'proRM Essential',
                'proRM Basic' => 'proRM Basic',
                'proRM Professional' => 'proRM Professional',
                'proRM Enterprise' => 'proRM Enterprise',
                'proRM Flexible' => 'proRM Flexible',
				'proRM Tracking Management' => 'proRM Tracking Management',
				'proRM Project Management' => 'proRM Project Management',
				'proRM Resource Management' => 'proRM Resource Management',
				'proRM Finance Management' => 'proRM Finance Management',
                'proRM License has expired' => 'proRM License has expired'
				
            );




            ?>
            <p>
                <select name="my_meta_box_select" id="my_meta_box_select">
                <?php foreach($options as $key=>$value) { ?>
				
                    <option <?php selected( $selected, $key ); ?> value="<?php echo $key; ?>" ><?php echo $value; ?></option>
                <?php } ?>
                </select>
            </p>
            <?php
        }

        add_action( 'save_post', 'cd_meta_box_save' );
        function cd_meta_box_save( $post_id )
        {
            // Bail if we're doing an auto save
            if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

            // if our nonce isn't there, or we can't verify it, bail
            if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

            // if our current user can't edit this post, bail
            if( !current_user_can( 'edit_post' ) ) return;


            if( isset( $_POST['my_meta_box_select'] ) )
                update_post_meta( $post_id, 'my_meta_box_select', esc_attr( $_POST['my_meta_box_select'] ) );

        }
    }
}