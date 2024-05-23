<fieldset>
    <legend>Información Vendedor</legend>

    <label for="nombre">Nombre</label>
    <input type="text" name="vendedor[nombre]" id="nombre" placeholder="Nombre del vendedor" 
        value = "<?php echo s($vendedor->nombre) ?>" maxlength="45">

    <label for="apellido">Apellido</label>
    <input type="text" name="vendedor[apellido]" id="apellido" placeholder="Apellido del vendedor"
        value = "<?php echo s($vendedor->apellido) ?>" maxlength="45">
    
    <label for="telefono">Teléfono</label>
    <input type="text" name="vendedor[telefono]" id="telefono" placeholder="Teléfono del vendedor (10 dígitos)"
        value = "<?php echo s($vendedor->telefono) ?>" maxlength="10">
        
</fieldset>