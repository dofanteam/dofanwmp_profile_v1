<?php
/**
 * Copyright (c) 2014-2018, www.kuacg.com
 * All right reserved.
 *
 * @since 2.5.0
 * @package Tint-K
 * @author 酷ACG资源网
 * @date 2018/02/14 10:00
 * @link https://www.kuacg.com/18494.html
 */
?>
<?php

/**
 * Class FloatWidget
 */
class FloatWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, __('TT-Float Sidebar Placeholder', 'tt'), array( 'description' => __('TT-Used to choose the position of float sidebar', 'tt') ,'classname' => 'widget_float-sidebar wow bounceInRight'));
    }

    function widget($args, $instance) {
        // parent::widget($args, $instance); // TODO: Change the autogenerated stub
        // extract($args);
        echo $args['before_widget'];
        if(isset($instance['title']) && !empty($instance['title'])) { echo $args['before_title'] . $instance['title'] . $args['after_title']; } ?>
        <?php dynamic_sidebar('sidebar_float'); ?>
        <?php echo $args['after_widget']; ?>
        <?php
    }

    function update($new_instance, $old_instance) {
        return $new_instance;
    }
}

/* 注册小工具 */
if ( ! function_exists( 'tt_register_widget_float' ) ) {
    function tt_register_widget_float() {
        register_widget( 'FloatWidget' );
    }
}
add_action( 'widgets_init', 'tt_register_widget_float' );