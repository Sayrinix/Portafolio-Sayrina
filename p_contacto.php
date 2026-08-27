<?php
/*
Template Name: Contacto
*/

/*
|--------------------------------------------------------------------------
| PROCESAR FORMULARIO
|--------------------------------------------------------------------------
| Lo hacemos ANTES de get_header() para poder redireccionar después
| de un envío exitoso sin provocar "headers already sent".
|--------------------------------------------------------------------------
*/

$error_contacto = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar_contacto'])) {

    /*
    |--------------------------------------------------------------------------
    | 1. VERIFICAR NONCE
    |--------------------------------------------------------------------------
    */

    if (
        !isset($_POST['contacto_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['contacto_nonce'])),
            'enviar_formulario_contacto'
        )
    ) {

        $error_contacto = 'No fue posible validar el formulario. Inténtalo nuevamente.';

    } else {

        /*
        |--------------------------------------------------------------------------
        | 2. HONEYPOT ANTI-SPAM
        |--------------------------------------------------------------------------
        | Este campo debería estar vacío para usuarios reales.
        |--------------------------------------------------------------------------
        */

        $website = isset($_POST['website'])
            ? sanitize_text_field(wp_unslash($_POST['website']))
            : '';

        if (!empty($website)) {

            $error_contacto = 'No fue posible enviar el mensaje.';

        } else {

            /*
            |--------------------------------------------------------------------------
            | 3. SANITIZAR CAMPOS
            |--------------------------------------------------------------------------
            */

            $nombre = isset($_POST['nombre'])
                ? sanitize_text_field(wp_unslash($_POST['nombre']))
                : '';

            $empresa = isset($_POST['empresa'])
                ? sanitize_text_field(wp_unslash($_POST['empresa']))
                : '';

            $email = isset($_POST['email'])
                ? sanitize_email(wp_unslash($_POST['email']))
                : '';

            $telefono = isset($_POST['telefono'])
                ? sanitize_text_field(wp_unslash($_POST['telefono']))
                : '';

            $consulta = isset($_POST['consulta'])
                ? sanitize_textarea_field(wp_unslash($_POST['consulta']))
                : '';

            /*
            |--------------------------------------------------------------------------
            | 4. VALIDACIÓN
            |--------------------------------------------------------------------------
            */

            if (empty($nombre)) {

                $error_contacto = 'Por favor, ingresa tu nombre.';

            } elseif (!is_email($email)) {

                $error_contacto = 'Por favor, ingresa un correo electrónico válido.';

            } elseif (empty($consulta)) {

                $error_contacto = 'Por favor, escribe tu consulta.';

            } else {

                /*
                |--------------------------------------------------------------------------
                | 5. CONFIGURAR CORREO
                |--------------------------------------------------------------------------
                */

                // Cambia esto por el correo donde quieres recibir los mensajes.
                $destinatario = 'TU-CORREO@DOMINIO.CL';

                $asunto = 'Nuevo mensaje desde el portafolio - ' . $nombre;

                /*
                |--------------------------------------------------------------------------
                | CUERPO DEL CORREO
                |--------------------------------------------------------------------------
                */

                $mensaje = "Has recibido un nuevo mensaje desde tu portafolio.\n\n";

                $mensaje .= "Nombre: " . $nombre . "\n";

                if (!empty($empresa)) {
                    $mensaje .= "Empresa: " . $empresa . "\n";
                }

                $mensaje .= "Correo: " . $email . "\n";

                if (!empty($telefono)) {
                    $mensaje .= "Teléfono: " . $telefono . "\n";
                }

                $mensaje .= "\nConsulta:\n";
                $mensaje .= $consulta . "\n";

                /*
                |--------------------------------------------------------------------------
                | HEADERS
                |--------------------------------------------------------------------------
                |
                | NO definimos From aquí.
                |
                | WP Mail SMTP se encargará del From usando tu correo configurado.
                |
                | Reply-To permite que al presionar "Responder" el mensaje vaya
                | directamente al correo de la persona que completó el formulario.
                |--------------------------------------------------------------------------
                */

                $headers = array(
                    'Content-Type: text/plain; charset=UTF-8',
                    'Reply-To: ' . $nombre . ' <' . $email . '>',
                );

                /*
                |--------------------------------------------------------------------------
                | 6. ENVIAR
                |--------------------------------------------------------------------------
                */

                $enviado = wp_mail(
                    $destinatario,
                    $asunto,
                    $mensaje,
                    $headers
                );

                /*
                |--------------------------------------------------------------------------
                | 7. RESULTADO
                |--------------------------------------------------------------------------
                */

                if ($enviado) {

                    /*
                    | Redireccionamos para evitar que el formulario se vuelva
                    | a enviar si la persona actualiza la página.
                    */

                    $url_exito = add_query_arg(
                        'contacto',
                        'enviado',
                        get_permalink()
                    );

                    wp_safe_redirect($url_exito);
                    exit;

                } else {

                    $error_contacto = 'Ocurrió un problema al enviar el mensaje. Inténtalo nuevamente.';

                }
            }
        }
    }
}

get_header();
?>

<main>

    <!-- BANNER -->
    <div class="bg-color-banner-contacto">
        <h1 class="h1-brown">Contacto</h1>
    </div>


    <!-- CONTENEDOR FORMULARIO -->
    <div class="mt-5 mb-5 pb-5 pt-5 d-flex justify-content-center">

        <div>

            <!-- MENSAJE DE ÉXITO -->
            <?php if (
                isset($_GET['contacto']) &&
                sanitize_text_field(wp_unslash($_GET['contacto'])) === 'enviado'
            ) : ?>

                <div class="alert alert-success mb-4" role="alert">
                    ¡Mensaje enviado correctamente! Gracias por contactarme.
                    Te responderé lo antes posible.
                </div>

            <?php endif; ?>


            <!-- MENSAJE DE ERROR -->
            <?php if (!empty($error_contacto)) : ?>

                <div class="alert alert-danger mb-4" role="alert">
                    <?php echo esc_html($error_contacto); ?>
                </div>

            <?php endif; ?>


            <!-- FORMULARIO -->
            <form
                method="post"
                action="<?php echo esc_url(get_permalink()); ?>"
                class="bg-color-contacto-form"
            >

                <!-- NONCE -->
                <?php
                wp_nonce_field(
                    'enviar_formulario_contacto',
                    'contacto_nonce'
                );
                ?>


                <!-- HONEYPOT -->
                <div class="campo-trampa" aria-hidden="true">

                    <label for="website">
                        No completar este campo
                    </label>

                    <input
                        type="text"
                        name="website"
                        id="website"
                        tabindex="-1"
                        autocomplete="off"
                    >

                </div>


                <!-- NOMBRE + EMPRESA -->
                <div class="row">

                    <div class="mb-3 col-12 col-md-6">

                        <label
                            for="floatingInput"
                            class="form-label"
                        >
                            Nombre
                        </label>

                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="floatingInput"
                            name="nombre"
                            placeholder="Nombre"
                            required
                            value="<?php
                                echo isset($nombre)
                                    ? esc_attr($nombre)
                                    : '';
                            ?>"
                        >

                    </div>


                    <div class="mb-3 col-12 col-md-6">

                        <label
                            class="form-label"
                            for="floatingEmpresa"
                        >
                            Empresa
                        </label>

                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="floatingEmpresa"
                            name="empresa"
                            placeholder="Empresa"
                            value="<?php
                                echo isset($empresa)
                                    ? esc_attr($empresa)
                                    : '';
                            ?>"
                        >

                    </div>

                </div>


                <!-- EMAIL + TELÉFONO -->
                <div class="row">

                    <div class="mb-3 col-12 col-md-6">

                        <label
                            class="form-label"
                            for="floatingEmail"
                        >
                            Correo Electrónico
                        </label>

                        <input
                            type="email"
                            class="form-control form-control-sm"
                            id="floatingEmail"
                            name="email"
                            placeholder="nombre@ejemplo.com"
                            required
                            value="<?php
                                echo isset($email)
                                    ? esc_attr($email)
                                    : '';
                            ?>"
                        >

                    </div>


                    <div class="mb-3 col-12 col-md-6">

                        <label
                            class="form-label"
                            for="floatingTel"
                        >
                            Número de Teléfono
                        </label>

                        <input
                            type="tel"
                            class="form-control form-control-sm"
                            id="floatingTel"
                            name="telefono"
                            placeholder="+56 9 XXXX XXXX"
                            value="<?php
                                echo isset($telefono)
                                    ? esc_attr($telefono)
                                    : '';
                            ?>"
                        >

                    </div>

                </div>


                <!-- CONSULTA -->
                <div>

                    <div class="mb-5">

                        <label
                            class="form-label"
                            for="floatingTextarea"
                        >
                            Consulta
                        </label>

                        <textarea
                            rows="5"
                            class="form-control"
                            name="consulta"
                            placeholder="Escribe tu consulta..."
                            id="floatingTextarea"
                            required
                        ><?php
                            echo isset($consulta)
                                ? esc_textarea($consulta)
                                : '';
                        ?></textarea>

                    </div>

                </div>


                <!-- BOTÓN -->
                <div class="d-flex justify-content-end">

                    <button
                        type="submit"
                        name="enviar_contacto"
                        class="boton-ver-s"
                    >
                        Enviar
                    </button>

                </div>

            </form>

        </div>

    </div>

</main>

<?php get_footer(); ?>