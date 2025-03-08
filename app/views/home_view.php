<?php
// Si ya usas estas variables y rutas, mantenlas
$additional_styles = "views/home.css";
include BASE_TEMPLATES . 'header.php';
?>

<body class="home-body">

<!-- HOME CONTAINER -->
<div id="home-main" class="home-container">
    <header class="home-header">
        <div class="home-logo">
            <svg class="home-img_logo" width="221" height="78" viewBox="0 0 221 78" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_71_5471)">
                    <path d="M29.3526 78L17.3833 56.0337H14.0215V78H0V19.8101H23.5305C28.066 19.8101 31.9351 20.612 35.1309 22.2135C38.329 23.8173 40.7201 26.0132 42.3042 28.8036C43.8883 31.594 44.6814 34.7037 44.6814 38.1282C44.6814 41.9979 43.6023 45.4503 41.4441 48.4901C39.2836 51.5299 36.1016 53.6839 31.8936 54.9544L45.1749 77.9977H29.3503L29.3526 78ZM14.0192 46.0051H22.7097C25.2783 46.0051 27.2059 45.371 28.4902 44.0982C29.7746 42.8278 30.4179 41.0304 30.4179 38.711C30.4179 36.3915 29.7746 34.7597 28.4902 33.4892C27.2059 32.2187 25.2783 31.5823 22.7097 31.5823H14.0192V46.0051Z" fill="white"/>
                    <path d="M53.3328 13.1383C51.7741 11.6744 50.9971 9.86306 50.9971 7.70908C50.9971 5.55511 51.7764 3.66222 53.3328 2.19594C54.8915 0.731978 56.8999 0 59.3578 0C61.8158 0 63.7434 0.731978 65.3021 2.19594C66.8609 3.65989 67.6379 5.49916 67.6379 7.70908C67.6379 9.91901 66.8585 11.6744 65.3021 13.1383C63.7434 14.6023 61.7628 15.3342 59.3578 15.3342C56.9529 15.3342 54.8892 14.6023 53.3328 13.1383ZM66.3282 20.1411V66.3932H52.3091V20.1411H66.3282Z" fill="white"/>
                    <path d="M89.6953 31.1674V42.9373H108.471V53.8797H89.6953V66.645H110.929V78H75.6738V19.8101H110.929V31.165H89.6953V31.1674Z" fill="white"/>
                    <path d="M155.126 67.7197H133.645L130.203 77.9977H115.526L136.352 19.8101H152.585L173.411 77.9977H158.571L155.128 67.7197H155.126ZM151.517 56.7796L144.383 35.4777L137.332 56.7796H151.515H151.517Z" fill="white"/>
                    <path d="M221 19.8101L200.584 77.9977H183.039L162.624 19.8101H177.545L191.811 63.7404L206.159 19.8101H221Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_71_5471">
                        <rect width="221" height="78" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <h1 class="home-title">Descubre nueva música todos los días</h1>
        <div class="home-logo_app">
            <img src="<?php echo BASE_ASSETS ?>img/logo_app.svg" alt="">
        </div>
    </header>

    <div class="home-info_container">
        <p class="home-info_text">
            Obtén playlists y álbumes inspirados por los artistas y <br> géneros que escuchas.
            1 mes gratis, luego $129.00 al mes.
        </p>
        <div class="home-buttons_container">
            <button id="home-button_register" class="button button-accent">Pruébalo Gratis</button>
            <button id="home-button_login" class="button button-outlined">Iniciar Sesión</button>
        </div>
        <a class="home-url" href="#">
            Consulta el plan de estudiante
            <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92455 4.94428L1.62464 8.4799L0.799805 7.59615L3.6873 4.5024L0.799805 1.40865L1.62464 0.524902L4.92455 4.06053C5.03391 4.17773 5.09535 4.33667 5.09535 4.5024C5.09535 4.66813 5.03391 4.82707 4.92455 4.94428Z" fill="white"/>
            </svg>
        </a>
    </div>
</div>

<!-- MODAL LOGIN CONTAINER -->
<div id="home-modal_login" class="home-modal home-modal_login" style="display: none">
    <div>
        <img src="<?php echo BASE_ASSETS . "img/logo_icon.svg" ?>" alt="Hermonia">
    </div>
    <h2 class="home-modal_title">Continuar con un correo electrónico</h2>
    <p class="home-modal_text">
        Puedes iniciar sesión si ya tienes una cuenta o te ayudaremos a crear una.
    </p>
    <form class="home-modal_form" action="POST">
        <!-- EJEMPLO DE LABEL FLOTANTE -->
        <div class="home-modal_form_field float-label">
            <input
                    class="home-modal_input home-modal_text"
                    type="email"
                    name="emailLogin"
                    id="emailLogin"
                    placeholder=" "
                    required
            >
            <label for="emailLogin">Correo Electrónico</label>
        </div>
        <div class="home-modal_form_field float-label">
            <input
                    class="home-modal_input home-modal_text"
                    type="password"
                    name="passwordLogin"
                    id="passwordLogin"
                    placeholder=" "
                    required
            >
            <label for="passwordLogin">Contraseña</label>
        </div>
        <input class="button button-accent" type="submit" value="Continuar">
    </form>
    <span class="home-modal_text_small">
            La información de tu cuenta de RIEAV se usa para permitirte iniciar sesión de manera segura y
            para acceder a tus datos. RIEAV recopila determinados datos por motivos de seguridad, soporte
            y elaboración de informes. Si estás de acuerdo, RIEAV también podría usar la información de tu
            cuenta de RIEAV para enviarte correos electrónicos de marketing y comunicaciones, los cuales
            incluyen aquellos que se basan en tu uso de los servicios de RIEAV
        </span>
</div>

<!-- MODAL REGISTER CONTAINER -->
<div id="home-modal_register" class="home-modal home-modal_register" style="display: none">
    <div class="home-modal_register_container">
        <div class="home-logo">
            <svg class="home-img_logo" width="221" height="78" viewBox="0 0 221 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_71_5471)">
                    <path d="M29.3526 78L17.3833 56.0337H14.0215V78H0V19.8101H23.5305C28.066 19.8101 31.9351 20.612 35.1309 22.2135C38.329 23.8173 40.7201 26.0132 42.3042 28.8036C43.8883 31.594 44.6814 34.7037 44.6814 38.1282C44.6814 41.9979 43.6023 45.4503 41.4441 48.4901C39.2836 51.5299 36.1016 53.6839 31.8936 54.9544L45.1749 77.9977H29.3503L29.3526 78ZM14.0192 46.0051H22.7097C25.2783 46.0051 27.2059 45.371 28.4902 44.0982C29.7746 42.8278 30.4179 41.0304 30.4179 38.711C30.4179 36.3915 29.7746 34.7597 28.4902 33.4892C27.2059 32.2187 25.2783 31.5823 22.7097 31.5823H14.0192V46.0051Z" fill="white"/>
                    <path d="M53.3328 13.1383C51.7741 11.6744 50.9971 9.86306 50.9971 7.70908C50.9971 5.55511 51.7764 3.66222 53.3328 2.19594C54.8915 0.731978 56.8999 0 59.3578 0C61.8158 0 63.7434 0.731978 65.3021 2.19594C66.8609 3.65989 67.6379 5.49916 67.6379 7.70908C67.6379 9.91901 66.8585 11.6744 65.3021 13.1383C63.7434 14.6023 61.7628 15.3342 59.3578 15.3342C56.9529 15.3342 54.8892 14.6023 53.3328 13.1383ZM66.3282 20.1411V66.3932H52.3091V20.1411H66.3282Z" fill="white"/>
                    <path d="M89.6953 31.1674V42.9373H108.471V53.8797H89.6953V66.645H110.929V78H75.6738V19.8101H110.929V31.165H89.6953V31.1674Z" fill="white"/>
                    <path d="M155.126 67.7197H133.645L130.203 77.9977H115.526L136.352 19.8101H152.585L173.411 77.9977H158.571L155.128 67.7197H155.126ZM151.517 56.7796L144.383 35.4777L137.332 56.7796H151.515H151.517Z" fill="white"/>
                    <path d="M221 19.8101L200.584 77.9977H183.039L162.624 19.8101H177.545L191.811 63.7404L206.159 19.8101H221Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_71_5471">
                        <rect width="221" height="78" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <h2 class="home-modal_title">Crear cuenta de Hermonia</h2>
        <form class="home-modal_form" action="POST">
            <!-- CORREO ELECTRÓNICO -->
            <div class="home-modal_form_field float-label">
                <input
                        class="home-modal_input home-modal_text"
                        type="email"
                        name="emailRegister"
                        id="emailRegister"
                        placeholder=" "
                        required
                >
                <label for="emailRegister">Correo Electrónico</label>
                <span class="home-modal_text_small">
                        Esta dirección de correo eléctronico será tu cuenta de RIEAV
                    </span>
            </div>
            <!-- CONTRASEÑA -->
            <div class="home-modal_form_field float-label">
                <input
                        class="home-modal_input home-modal_text"
                        type="password"
                        name="passwordRegister"
                        id="passwordRegister"
                        placeholder=" "
                        required
                >
                <label for="passwordRegister">Contraseña</label>
                <span class="home-modal_text_small">
                        Tu contraseña debe tener como mínimo 8 caracteres, letras en mayúsculas y minúsculas,
                        y al menos un número
                    </span>
            </div>
            <!-- NOMBRE -->
            <div class="home-modal_form_field float-label">
                <input
                        class="home-modal_input home-modal_text"
                        type="text"
                        name="nombreRegister"
                        id="nombreRegister"
                        placeholder=" "
                        required
                >
                <label for="nombreRegister">Nombre</label>
            </div>
            <!-- APELLIDOS -->
            <div class="home-modal_form_field float-label">
                <input
                        class="home-modal_input home-modal_text"
                        type="text"
                        name="apellidosRegister"
                        id="apellidosRegister"
                        placeholder=" "
                        required
                >
                <label for="apellidosRegister">Apellidos</label>
            </div>
            <!-- FECHA DE NACIMIENTO -->
            <div class="home-modal_form_field float-label">
                <input
                        class="home-modal_input home-modal_text"
                        type="date"
                        name="fechaRegister"
                        id="fechaRegister"
                        placeholder=" "
                        required
                >
                <label for="fechaRegister">Fecha de Nacimiento</label>
            </div>
            <!-- PAÍS/REGIÓN -->
            <div class="home-modal_form_field float-label">
                <input
                        class="home-modal_input home-modal_text"
                        type="text"
                        name="paisRegister"
                        id="paisRegister"
                        placeholder=" "
                        required
                >
                <label for="paisRegister">País/Región</label>
            </div>
            <!-- CHECKBOX TÉRMINOS -->
            <div class="home-modal_form_check">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms" class="home-modal_text_small">Aceptar Términos y Condiciones</label>
            </div>
            <hr>
            <span class="home-modal_text_small">
                    Al seleccionar Continuar, aceptas los Términos y Condiciones de los Servicios multimedia
                    de RIEAV y reconoces que iniciarás sesión en este navegador.
                </span>
        </form>
    </div>
    <div class="home-modal_register_footer">
        <button class="button button-outlined-light">Volver</button>
        <button class="button button-light">Continuar</button>
    </div>
</div>

<script src="<?php echo BASE_ASSETS; ?>js/home.js"></script>

</body>