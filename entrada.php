<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>17/01/2024</span> por: <span>Admin</span> </p>

        <div class="resumen-propiedad">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis diam in 
                purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, a laoreet 
                nisl feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque 
                quis diam in purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, 
                a laoreet nisl feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Pellentesque quis diam in purus mattis commodo. Nullam ullamcorper tortor eget purus 
                ullamcorper, a laoreet nisl feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing 
                elit.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis diam in 
                purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, a laoreet 
                nisl feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque 
                quis diam in purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, 
                a laoreet nisl feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Pellentesque quis diam in purus mattis commodo. Nullam ullamcorper tortor eget purus 
                ullamcorper, a laoreet nisl feugiat.
            </p>

        </div>

    </main>

<?php
    incluirTemplate('footer');
?>