<?php

    require '../../includes/app.php';
    use App\Vendedor;

    estaAutenticado();

    $vendedor = new Vendedor();

    $errores = Vendedor::getErrores();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Crear nueva instancia
        $vendedor = new Vendedor($_POST['vendedor']);

        // Validar que no existan campos vacíos
        $errores = $vendedor->validar();

        // No hay errores
        if(empty($errores)) {
            $vendedor->guardar();
        }
    }

    incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Registar Vendedor(a)</h1>

    <a class="boton boton-verde" href="/admin">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/vendedores/crear.php">
        <?php include '../../includes/templates/formulario_vendedores.php'; ?>
        <input class="boton boton-amarillo" type="submit" value="Registrar Vendedor(a)">
    </form>

</main>

<?php
    incluirTemplate('footer');
?>