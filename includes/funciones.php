<?php

define ('TEMPLATES_URL', __DIR__ . '/templates');
define ('FUNCIONES_URL',  'funciones.php');
define ('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');

function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}

function estaAutenticado() {
    session_start();

    if(!$_SESSION['login']){
        header('Location: /');
    }
}

function debugear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapar/Sanitizar html
function s($html):string {
    $s = htmlspecialchars($html);
    return $s;
}

// Validar tipo de contenido
function validarTipoContenido($tipo) {
    $tipos = ['vendedor', 'propiedad'];
    return in_array($tipo, $tipos); // Permite buscar un string/valor dentro de un arreglo
}

// Mostrar Mensajes
function mostrarMensaje($codigo) {
    $mensaje = "";
    switch($codigo) {
        case 1:
            $mensaje = 'Creado Correctamente';
        break;
        case 2:
            $mensaje = 'Actualizado Correctamente';
        break;
        case 3:
            $mensaje = 'Eliminado Correctamente';
        break;
        default:
            $mensaje = false;
        break;
    }

    return $mensaje;
}