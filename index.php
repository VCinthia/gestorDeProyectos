<?php include("db.php")?>

<?php include("includes/header.php")?>

<?php include("includes/menu.php")?>   

    <div class="background-element "><!--content-body-->

    <!-- SECCION ALERTAS -->
    <?php if(isset($_SESSION['message'])) {?>
                <div class="alert-box">
                    <div class="close-alert" onclick="closeAlert()">x</div>
                    <div class="primary-text">Alerta:</div>
                    <div class="alert-message"><?= $_SESSION['message'] ?></div>
                </div>
            <?php  session_unset(); } ?> 

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

    </div>
    <!-- FOOTER -->
    <?php include("./includes/footer.php")?>

    <!-- SCRIPTS -->
    <script src="./assets/js/fontawesome.all.min.js"></script>
    <script src="./assets/js/function.js"></script>
    
</body>

</html>
