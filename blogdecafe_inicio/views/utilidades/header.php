<?php //contenido repetido en la mayoría de nuestras páginas. ?>
<header class="blogCafe">
        <div class="contenedor blogCafe__header">
            <a href="/">
                <h1><span>Blog</span>DeCafé</h1>
            </a>

            <div class="phone-menu">
                <picture>
                    <source width="200" height="300" srcset="build/img/menu.png" alt="Menú desplegable con las opciones de navegación">
                    <img id="Menu-icon" width="200" height="300" src="build/img/menu.webp" alt="Menú desplegable con las opciones de navegación">
                </picture>
            </div>

            <nav id="blogCafe_navegacion" class="blogCafe__navegacion ocultar">
                <a id="Nosotros" href="/nosotros" <?php echo $ruta !== "/nosotros" || empty($ruta) ? " " : "class='activo'";  ?> >Nosotros</a>
                <a id="Cursos" ' href="/cursos" <?php echo $ruta !== "/cursos" || empty($ruta) ? "" : "class='activo'"; ?>>Cursos</a>
                <a id="Contacto" href="/contacto" <?php echo $ruta !== "/contacto" || empty($ruta) ? "" : "class='activo'"; ?>>Contacto</a>
            </nav>

        </div>
        <div class="contenedor blogCafe__contenidoCentrado">
                <h2>Blog de café con consejos y cursos</h2>
                <p>Aprende de los expertos con las mejores recetas y consejos</p>
        </div>
</header>