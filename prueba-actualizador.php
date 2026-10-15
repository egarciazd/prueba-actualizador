<?php
/**
 * Plugin Name: Prueba Actualizador GitHub
 * Plugin URI: https://github.com/egarciazd/prueba-actualizador
 * Description: Un plugin de prueba para verificar actualizaciones automáticas desde GitHub.
 * Version: 1.0.1
 * Author: Eduardo Garcia
 * GitHub Plugin URI: egarciazd/prueba-actualizador
 * GitHub Branch: main
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Incluir el actualizador de YahnisElsts vía Composer o descarga directa
// Para esta prueba rápida, podemos requerir el archivo principal si lo descargas,
// o usar la carga directa desde GitHub. La forma más limpia es descargar la librería 
// e incluirla en una carpeta /includes/ dentro de tu plugin.

if ( file_exists( plugin_dir_path( __FILE__ ) . 'includes/plugin-update-checker/plugin-update-checker.php' ) ) {
    require_once plugin_dir_path( __FILE__ ) . 'includes/plugin-update-checker/plugin-update-checker.php';
    
    use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://github.com/egarciazd/prueba-actualizador/',
        __FILE__,
        'prueba-actualizador'
    );

    $myUpdateChecker->setBranch( 'main' );
}

function pa_mensaje_version() {
   echo '<div class="notice notice-success is-dismissible"><p><strong>Prueba Actualizador GitHub:</strong> ¡Felicidades! Actualizaste a la versión <strong>1.0.1</strong>.</p></div>';
}
add_action( 'admin_notices', 'pa_mensaje_version' );