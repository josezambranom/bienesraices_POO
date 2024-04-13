<fieldset>
    <legend>Información general</legend>

    <label for="titulo">Título</label>
    <input type="text" name="propiedad[titulo]" id="titulo" placeholder="Titulo propiedad" 
        value = "<?php echo s($propiedad->titulo) ?>" >

    <label for="precio">Precio</label>
    <input type="number" name="propiedad[precio]" id="precio" placeholder="Precio propiedad"
        value = "<?php echo s($propiedad->precio) ?>">

    <label for="img">Imagen</label>
    <input type="file" name="propiedad[img]" id="img" accept="image/jpeg, image/png">

    <?php if ($propiedad->imagen): ?> 
        <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-smoll">
    <?php endif;?>

    <label for="descripcion">Descripción</label>
    <textarea name="propiedad[descripcion]" id="descripcion"><?php echo s($propiedad->descripcion); ?></textarea>
</fieldset>

<fieldset>
    <legend>Información propiedad</legend>
    
    <label for="habitaciones">Habitaciones</label>
    <input type="number" name="propiedad[habitaciones]" id="habitaciones" placeholder="Ej: 3" min="1" max="9" 
        value = "<?php echo s($propiedad->habitacion) ?>">

    <label for="wc">Baños</label>
    <input type="number" name="propiedad[wc]" id="wc" placeholder="Ej: 3" min="1" max="9" 
        value = "<?php echo s($propiedad->wc) ?>">

    <label for="estacionamiento">Estacionamiento</label>
    <input type="number" name="propiedad[estacionamiento]" id="estacionamiento" placeholder="Ej: 3" min="1" 
        max="9" value = "<?php echo s($propiedad->estacionamiento) ?>" >
</fieldset>

<fieldset>
    <legend>Vendedor</legend>
</fieldset>