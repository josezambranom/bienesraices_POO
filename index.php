<?php 
    require 'includes/app.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en venta</h2>

        <?php 
            $limite = 3;
            include 'includes/templates/anuncios.php' 
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/avif">
                        <source srcset="build/img/blog1.jpg"  type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrad blog">
                    </picture>
                </div><!-- .imagen -->

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>17/01/2024</span> por: <span>Admin</span> </p>
                        <p>
                            Consejos para construir la terraza en el techo de tu casa con los mejores
                            materiales y ahorrando dinero
                        </p>
                    </a>
                </div><!-- .texto-entrada -->

            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/avif">
                        <source srcset="build/img/blog2.jpg"  type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrad blog">
                    </picture>
                </div><!-- .imagen -->

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>17/01/2024</span> por: <span>Admin</span> </p>
                        <p>
                            Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles
                            y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div><!-- .texto-entrada -->

            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me
                    ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- José Zambrano</p>
            </div>

        </section>

    </div>

<?php
    incluirTemplate('footer');
?>