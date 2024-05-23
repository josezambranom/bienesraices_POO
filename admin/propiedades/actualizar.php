<?php

use App\Propiedad;
use Intervention\Image\ImageManagerStatic as Image;

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
    $errores = Propiedad::getErrores();

    // Ejecutar el código después de que el usuario envía el form
    if($_SERVER['REQUEST_METHOD'] === 'POST') {      
        // Asignar los atributos
        $args = $_POST['propiedad'];
        $propiedad->sincronizar($args);

        // Validación
        $errores = $propiedad->validar();

        // Subida de archivos
        // Generar nombre unico
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        if($_FILES['propiedad']['tmp_name']['img']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['img'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }
        
        // Revisar que el array de errores este vacio
        if(empty($errores)) {
            // Guarda la imagen en el server
            $image->save(CARPETA_IMAGENES . $nombreImagen);
            $propiedad->guardar();        
        }
        
    }

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a class="boton boton-verde" href="/admin">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php'; ?>
            <input class="boton boton-amarillo" type="submit" value="Actualizar Propiedad">
        </form>

    </main>

<?php
    incluirTemplate('footer');
?>