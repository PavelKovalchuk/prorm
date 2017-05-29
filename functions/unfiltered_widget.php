<?php

/**
 * Simplified variant of the native text widget class.
 *
 * @author Thomas Scholz aka toscho http://toscho.de
 * @version 1.0
 */
class ProRM_Unfiltered_Text_Widget extends WP_Widget
{
    /**
     * @uses apply_filters( 'magic_widgets_name' )
     */
    public function __construct()
    {
// You may change the name per filter.
// Use add_filter( 'magic_widgets_name', 'your custom_filter', 10, 1 );
        $widgetname = apply_filters('magic_widgets_name', 'Unfiltered Text');
        parent::__construct(
            'unfiltered_text'
            , $widgetname
            , array('description' => 'Pure Markup')
            , array('width' => 300, 'height' => 150)
        );
    }

    /**
     * Output.
     *
     * @param  array $args
     * @param  array $instance
     * @return void
     */
    public function widget($args, $instance)
    {
        echo $instance['text'];
    }

    /**
     * Prepares the content. Not.
     *
     * @param  array $new_instance New content
     * @param  array $old_instance Old content
     * @return array New content
     */
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    /**
     * Backend form.
     *
     * @param array $instance
     * @return void
     */
    public function form($instance)
    {
        $instance = wp_parse_args((array)$instance, array('text' => ''));
        $text = format_to_edit($instance['text']);
        ?>
        <textarea class="widefat" rows="7" cols="20" id="<?php
        echo $this->get_field_id('text');
        ?>" name="<?php
        echo $this->get_field_name('text');
        ?>"><?php
            echo $text;
            ?></textarea>
        <?php
        /* To enable the preview uncomment the following lines.
         * Be aware: Invalid HTML may break the rest of the site and it
         * may disable the option to repair the input text.

        ! empty ( $text )
            and print '<h3>Preview</h3><div style="border:3px solid #369;padding:10px">'
                . $instance['text'] . '</div>';
        /**/
        ?>
    <?php
    }
}