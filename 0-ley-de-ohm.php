<?php
/*
 * Plugin Name: 02 Ley de Ohm Calculator ON
 * Plugin URI: https://webyblog.es/
 * Description: Calcula el resultado de la ley de Ohm conociendo dos de los valores introducidos. [ley_ohm_calculator].
 * Version: 10-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://www.webyblog.es
 * License: GPLv3 or later
 */



if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function render_ohms_law_calculator() {
    wp_register_script('ley-de-ohm-js', plugin_dir_url(__FILE__) . 'ley-de-ohm.js', array('jquery'), '1.0', true);
    wp_register_style('ley-de-ohm-css', plugin_dir_url(__FILE__) . 'ley-de-ohm.css');

    wp_enqueue_script('ley-de-ohm-js');
    wp_enqueue_style('ley-de-ohm-css');

    ob_start();
    ?>
    <div class="ohms-law-calculator">
        <label for="voltaje">Voltaje (V):</label>
        <input type="number" id="voltaje" step="any">
        <br>
        <label for="corriente">Corriente (I):</label>
        <input type="number" id="corriente" step="any">
        <br>
        <label for="resistencia">Resistencia (R):</label>
        <input type="number" id="resistencia" step="any">
        <br>
        <button id="calcular">Calcular</button>
        <button id="borrar">Borrar</button>

        <div class="resultado"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('ley_ohm_calculator', 'render_ohms_law_calculator');
