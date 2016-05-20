<?php
/*
    Plugin Name: Foundation Orbit
    Plugin URI: -
    Description: Foundation Orbit Widget
    Author: Xavier Lesa
    Version: 0.1
    Author URI: -
 */


add_action("widgets_init", array('Foundation_Orbit_Widget', 'register'));

class Foundation_Orbit_Widget extends WP_Widget {

    function Foundation_Orbit_Widget() {
        // constructor
        $options = array('classname' => 'foundation-orbit-widget',
            'description' => 'Crea un widget con Orbit');

       $this->WP_Widget('Foundation_Orbit_Widget', 'Foundation Orbit', $options);
    }

    function form($instance) {
        // saca el formulario de opciones en admin
    }

    function update($new_instance, $old_instance) {
        // procesa las opciones del widget que se guardarán
    }

    function widget($args, $instance) {
        // saca el contenido del widget
    }

}
?>
