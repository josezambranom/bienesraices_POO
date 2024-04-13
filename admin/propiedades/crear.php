<?php

    require '../../includes/app.php';
    use App\Propiedad;
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();

    $db = conectarDB();

    // COnsulta de vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();

    $propiedad = new Propiedad();

    // Ejecutar el código después de que el usuario envía el form
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Crea una nueva instancia
        $propiedad = new Propiedad($_POST['propiedad']);

        // Subida de archivos
        // Generar nombre unico
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        // Setear la imagen
        // Realiza un rezize a la imagen con intervention
        if($_FILES['propiedad']['tmp_name']['img']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['img'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }

        $errores = $propiedad->validar();

        // Revisar que el array de errores este vacio
        if(empty($errores)) {            
            // Crear carpeta
            if(!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }
            // Guarda la imagen en el server
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            // Guarda en la BD
            $result = $propiedad->guardar();

            if($result) {
                // Redireccionar al usuario
                header('Location: /admin?result=1'); // Funciona cuando no hay html antes, solo cuando sea necesario lo mas poco
            }
        }
        
    }
    
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a class="boton boton-verde" href="/admin">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php'; ?>
            <input class="boton boton-amarillo" type="submit" value="Crear propiedad">
        </form>

    </main>

<?php
    incluirTemplate('footer');
?>