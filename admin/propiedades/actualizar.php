<?php

use App\Propiedad;

    require '../../includes/app.php';
    estaAutenticado();

    // Validar por ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('location: /admin');
    }

    // Obtener datos propiedad
    $propiedad = Propiedad::find($id);

    // COnsulta de vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad->titulo;
    $precio = $propiedad->precio;
    $descripcion = $propiedad->descripcion;
    $habitaciones = $propiedad->habitacion;
    $wc = $propiedad->wc;
    $estacionamiento = $propiedad->estacionamiento;
    $vendedorID = $propiedad->vendedores_id;
    $imagenPropiedad = $propiedad->imagen;

    // Ejecutar el código después de que el usuario envía el form
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Asignar los atributos
        $args = $_POST['propiedad'];
        $propiedad->sincronizar($args);

        // Asignar files a una variable
        $imagen = $_FILES['img'];   

        if(!$titulo) {
            $errores[] = "Debes añadir un título";
        }

        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }

        if(strlen($descripcion) < 50) {
            $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$habitaciones) {
            $errores[] = "El número de habitaciones es obligatorio";
        }

        if(!$wc) {
            $errores[] = "El número de baños es obligatorio";
        }

        if(!$estacionamiento) {
            $errores[] = "El número de estacionamientos es obligatorio";
        }

        if(!$vendedorID) {
            $errores[] = "Elije un vendedor";
        }

        // Validar por tamaño (1Mb máximo)
        $medida = 1000 * 1000;
        if($imagen['size'] > $medida) {
            $errores[] = "La imagen es muy pesada";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        // Revisar que el array de errores este vacio
        if(empty($errores)) {

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = "";

            // Subida de archivos

            if($imagen['name']) {
                // Eliminar imagen previa

                unlink($carpetaImagenes . $propiedad['imagen']);

                // Generar nombre unico
                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

                // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            } else {
                $nombreImagen = $propiedad['imagen'];
            }

            // Insertar en DB
            $query = "UPDATE propiedades SET titulo = '${titulo}', precio = ${precio}, imagen = '$nombreImagen', 
                descripcion = '${descripcion}',
                habitacion = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento},
                vendedores_id = ${vendedorID} WHERE id = ${id} ";
            
            // echo $query;

            $result = mysqli_query($db, $query);
            if($result) {
                // Redireccionar al usuario
                header('Location: /admin?result=2'); // Funciona cuando no hay html antes, solo cuando sea necesario lo mas poco
            }
        }
        
    }

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar</h1>

        <a class="boton boton-verde" href="/admin">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php'; ?>
            <input class="boton boton-amarillo" type="submit" value="Actualizar propiedad">
        </form>

    </main>

<?php
    incluirTemplate('footer');
?>