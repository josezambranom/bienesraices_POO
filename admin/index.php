<?php

    require '../includes/app.php';

    estaAutenticado();

    // Importar clases
    use App\Propiedad;
    use App\Vendedor;

    // Implementar un método para obtener todas las propiedades
    $propiedades = Propiedad::all();
    $vendedores = Vendedor::all();

    // Muestra mensaje condicional
    $resultado = $_GET['result'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validar id
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
            $tipo = $_POST['tipo'];
            if(validarTipoContenido($tipo)){
                // Compara lo que se va a eliminar
                if($tipo === "vendedor"){
                    $vendedor = Vendedor::find($id);
                    $vendedor->eliminar();     
                } elseif($tipo === "propiedad") {
                    $propiedad = Propiedad::find($id);
                    $propiedad->eliminar();     
                }
            }      
        }
    }

    // Incluye un template
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>

        <?php
            $mensaje = mostrarMensaje(intval($resultado));
            if($mensaje) { ?>
                <p class="alerta exito"><?php echo s($mensaje); ?></p>
        <?php } ?>
    
        <a class="boton boton-verde" href="/admin/propiedades/crear.php">Nueva Propiedad</a>
        <a class="boton boton-amarillo" href="/admin/vendedores/crear.php">Nuevo(a) Vendedor</a>

        <h2>Propiedades</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!-- Mostar los resultados -->
                <?php foreach($propiedades as $propiedad):?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td class="titulo"><?php echo $propiedad->titulo; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"></td>
                    <td><?php echo '$ ' . $propiedad->precio; ?></td>
                    <td class="accion">
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            <input type="hidden" name="tipo" value="propiedad">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id ?>" 
                        class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Vendedores</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!-- Mostar los resultados -->
                <?php foreach($vendedores as $vendedor):?>
                <tr>
                    <td><?php echo $vendedor->id; ?></td>
                    <td class="titulo"><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></td>
                    <td><?php echo $vendedor->telefono; ?></td>
                    <td class="accion">
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/admin/vendedores/actualizar.php?id=<?php echo $vendedor->id; ?>" 
                        class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>

<?php
    incluirTemplate('footer');
?>