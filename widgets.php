<?php
/*
    Plugin Name: Foundation Orbit
    Plugin URI: -
    Description: Foundation Orbit Widget
    Author: Xavier Lesa
    Version: 0.1
    Author URI: -
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

add_action("widgets_init", function(){
    register_widget( 'Foundation_Orbit_Widget' );    
});

class Foundation_Orbit_Widget extends WP_Widget {

    function __construct() {
        // constructor
        parent::__construct(
            'Foundation_Orbit_Widget',
            __('Foundation Orbit', 'text_domain'),

            array(
                'classname' => 'foundation-orbit-widget', 
                'description' => __('Crea un widget con Orbit', 'text_domain')
            )
        );

        //$options = array('classname' => 'foundation-orbit-widget',
        //    'description' => 'Crea un widget con Orbit');
        //
        //$this->WP_Widget('Foundation_Orbit_Widget', 'Foundation Orbit', $options);
    }

    function form($instance) {
        // saca el formulario de opciones en admin
        echo(print_r($instance));
        // Valores por defecto
        $defaults = array('titulo' => 'Item', 'descripcion'=> '', 'url' => '');
        // Se hace un merge, en $instance quedan los valores actualizados
        $instance = wp_parse_args((array)$instance, $defaults);
        // Cogemos los valores
        $titulo = $instance['titulo'];
        $descripcion = $instance['descripcion'];
        $url = $instance['url'];
        // Mostramos el formulario
        ?>
        <p>
            Titulo
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('titulo');?>"
                   value="<?php echo esc_attr($titulo);?>"/>
        </p>
        <p>
            Descripcion
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('descripcion');?>"
                   value="<?php echo esc_attr($descripcion);?>"/>
        </p>
        <p>
            URL
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('url');?>"
                   value="<?php echo esc_attr($url);?>"/>
        </p>
        <?php
    }

    function update($new_instance, $old_instance) {
        // procesa las opciones del widget que se guardarán
    }

    function widget($args, $instance) {
        // saca el contenido del widget
    }

}
?>
