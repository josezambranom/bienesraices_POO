<?php

    require '../../includes/app.php';
    use App\Vendedor;

    estaAutenticado();

    // Validar que sea un ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /admin');
    }

    // Obtener el arreglo del vendedor
    $vendedor = Vendedor::find($id);

    $errores = Vendedor::getErrores();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Asignar valores
        $args = $_POST['vendedor'];
        // Sincronizar objeto en memoria con lo que el usuario escribió
        $vendedor->sincronizar($args);
        // Validación
        $errores = $vendedor->validar();

        if(empty($errores)) {
            $vendedor->guardar();
        }
    }

    incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Actualizar Vendedor(a)</h1>

    <a class="boton boton-verde" href="/admin">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST">
        <?php include '../../includes/templates/formulario_vendedores.php'; ?>
        <input class="boton boton-amarillo" type="submit" value="Actualizar Vendedor(a)">
    </form>

</main>

<?php
    incluirTemplate('footer');
?>