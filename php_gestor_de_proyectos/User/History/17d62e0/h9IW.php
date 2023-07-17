<?php
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>👾 Gestor De Proyectos</title>

<!-- STYLES -->
<link rel="stylesheet" href="./assets/styles/global.css" />
<link rel="stylesheet" href="./assets/styles/style.css" />

<!-- FONTS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto:wght@500&display=swap">


</head>

<body>
<!-- MENU -->
<div class="menu" id="menu">
    <ul class="links">
        <li><a href="#" id="inicio">
                <i class="fas fa-home"></i>
                Inicio</a></li>
        <li><a href="./views/proyectos.html" id="proyectos" class="links--hide">
                <i class="fas fa-briefcase"></i>
                Proyectos</a></li>
        <!-- Mostrar a logeados-->
        <li><a href="./views/gastos.html" id="gastos" class="links--hide">
                <i class="fas fa-chart-pie"></i>
                Gastos</a></li><!-- Mostrar a logeados-->
        <li><a href="./views/404.html" class="links--hide">
                <i class="fas fa-user"></i>
                Perfil</a></li><!-- Mostrar a logeados-->

        <li><a class="login" href="./views/404.html" id="abrir-login">
                <i class="fas fa-sign-in-alt"></i>
                Ingresar</a></li><!-- Mostrar NO logeado -->
        <!-- <div class="contenedor-modal-login" id="contenedor-modal-login">
                <div class="modal-login">
                    <form action="#" method="get">
                        <h3>Inicie Sesion</h3>
                        <input type="email" id="emailLogin" placeholder="Email" class="contenedor_vacio">
                        <input type="password" id="passwordLogin" placeholder="Contraseña" class="contenedor_vacio">
                        <div>
                            <button type="button" id="btn_ingresar">Ingresar</button>
                        </div>
                    </form>
                    <p id="cerrar-login">x</p>
                </div>
            </div> -->

        <!-- <li><a class="registrarse" href="#" id="abrir-register">Registrarse</a></li> -->

        <!-- Mostrar NO logeado -->
        <!-- <div class="contenedor-modal-register" id="contenedor-modal-register">
                <div class="modal-register">
                    <form action="#" method="post">
                        <h3>Crear una cuenta</h3> 
                        <input type="text" placeholder="Nombre" id="nombre">
                        <input type="text" placeholder="Apellido" id="apellido">
                        <input type="text" placeholder="Telefono" id="telefono">
                        <input type="email" placeholder="Email" id="email">
                        <input type="number" placeholder="DNI" id="dni">
                        <input type="password" placeholder="Contraseña" id="password">
                        <div>
                            <button type="submit" id="btn_registrar" id="abrir-falla">Registrar</button>
                        </div>
                    </form>
                    <p id="cerrar-register">x</p>
                </div> -->
        <li><a class="logout links--hide show--inline links--hide" href="./views/404.html" id="logout">
                <i class="fas fa-sign-in-alt"></i>
                Cerrar Sesion</a></li>
        <!-- Mostrar a logeados-->
    </ul>
</div>

<div class="background-element "><!--content-body-->

    <!-- SECCION PORTADA -->

    <div class="portada-index">
        <div class="portada-title-1">Crea</div>
        <div class="portada-title-2">Gestiona</div>
        <div class="portada-title-3">Disfruta</div>
        <p class="portada-secondary-text">
            Tus proyectos en un solo lugar!
            <br>
            <br>
            A partir de tu presupuesto personal te ayudamos a calcular tus trabajos para que puedas hacer solo lo
            que te gusta y disfrutes del proceso.
        </p>
    </div>

    <div class="portada-secondary-text tarjeta-index">
        <h3  class="title">Proyectos</h3>
        <div class="text-secondary">
            <p>Crea y organiza proyectos!</p>
            <p>
                Podrás cargar datos escenciales para poder presupuestar proyectos de acuerdo a tus gastos y cantidad de horas trabajadas. Tambien podrás agregar info adicional y hacer ver el estado actual.
            </p>
        </div>            
    </div>

    <div class="portada-secondary-text tarjeta-index">
        <h3  class="title">Gastos</h3>
        <div class="text-secondary">
            <p>Administra tus gastos mensuales!</p>
            <p>
                Registra tus gastos mensuales según categorias y tendrás un punto de partida para poder gestionar tus proyectos.
            </p>
        </div>            
    </div>

    <div class="portada-secondary-text tarjeta-index">
        <h3  class="title">Sobre la App</h3>
        <div class="text-secondary">
            
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nam molestiae incidunt non exercitationem, voluptatum explicabo recusandae delectus repudiandae, aspernatur dolores optio possimus doloremque numquam. Vitae omnis placeat explicabo quis!
            </p>
        </div>            
    </div>

    <!-- FOOTER -->
</div>
<footer>
    <div class="logo-footer ">
        <!-- <p class="logo-text">Gestor de Proyectos</p> -->
        <div>
            <img class="img-social" src="" alt="">
        </div>
    </div>
    <div class="footer-enlaces">
        <div>
            <h3>Contactanos</h3>
        </div>
        <div class="footer-enlaces-link">
            <a href="#">nombrepag@gmail.com</a>
            <a href="#">+549-000-000-0000</a>
            <a href="#">Calle 0000 - Ciudad</a>
        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="./assets/js/fontawesome.all.min.js"></script>

</body>

?>