<div class="contenedor contacto">
    <h2>Contacto</h2>

    <div class="contacto__img">
        <picture>
            <source srcset="build/img/contacto.webp" alt="Formulario">
            <source srcset="build/img/contacto.webp" alt="Formulario">
            <img src="build/img/contacto.webp" alt="Formulario">
        </picture>
    </div>

    <div class="contacto__formulario">
        <form class="formulario" method="POST" action="/contacto">
            <div class="campo">
                <label for="Nombre">Nombre:</label>
                <input type="text" 
                    id="Nombre" 
                    placeholder="Tu Nombre" 
                    name="Nombre"
                    value="<?php echo $datos->Nombre ?>">
            </div>
            <div class="campo">
                <label for="Email">E-mail:</label>
                <input type="email" 
                    id="Email" 
                    placeholder="Tu Email" 
                    name="Email"
                    value="<?php echo $datos->Email ?>">
            </div>
            <div class="campo">
                <label for="Mensaje">Mensaje:</label>
                <textarea name="Mensaje" id="Mensaje" cols="30" rows="10" placeholder="Ayúdanos con un mensaje (puede ser una recomendación)"></textarea>
            </div>

            <?php include_once __DIR__ . '/../utilidades/alertas.php'; ?>

            <input type="submit" value="Enviar" class="boton boton-cafe">
        </form>
    </div>
</div>

