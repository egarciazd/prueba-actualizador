<?php
/**
 * Plugin Name: Prueba Actualizador GitHub
 * Plugin URI: https://github.com/egarciazd/prueba-actualizador
 * Description: Un plugin de prueba para verificar actualizaciones automáticas desde GitHub.
 * Version: 1.0.0
 * Author: Eduardo Garcia
 * GitHub Plugin URI: egarciazd/prueba-actualizador
 * GitHub Branch: main
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Mensaje de aviso en el admin de WordPress
function pa_mensaje_version() {
    echo '<div class="notice notice-info is-dismissible"><p><strong>Prueba Actualizador GitHub:</strong> Estás usando la versión <strong>1.0.0</strong>.</p></div>';
}
add_action( 'admin_notices', 'pa_mensaje_version' );