<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/avif">
                    <source srcset="build/img/blog3.jpg"  type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="texto entrad blog">
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
                    <source srcset="build/img/blog4.webp" type="image/avif">
                    <source srcset="build/img/blog4.jpg"  type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="texto entrad blog">
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

    </main>

<?php
    incluirTemplate('footer');
?>