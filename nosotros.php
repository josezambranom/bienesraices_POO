<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen-nosotros">
            </picture>

            <div class="contenido-texto">
                <blockquote>
                    25 de años de experiencia
                </blockquote>

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
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis diam in 
                    purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, a laoreet 
                    nisl feugiat.
                </p>
            </div><!-- .icono -->

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis diam in 
                    purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, a laoreet 
                    nisl feugiat.
                </p>
            </div><!-- .icono -->

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis diam in 
                    purus mattis commodo. Nullam ullamcorper tortor eget purus ullamcorper, a laoreet 
                    nisl feugiat.
                </p>
            </div><!-- .icono -->

        </div><!-- .iconos-nosotros -->
    </section>

<?php
    incluirTemplate('footer');
?>