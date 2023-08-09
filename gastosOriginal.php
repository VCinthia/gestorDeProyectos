<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>
   
<div class="background-element"><!--content-body-->

        <!-- SECCION PORTADA -->
        <div class="portada">
            <div class="portada-title">Gastos</div>
            <p class="secondary-text">
                Aqui puedes ver detalles de tus gastos.
            </p>
        </div>

        <!-- SECCION ULTIMO PROY -->
        <div class="all-proy">
            <div class="secondary-title">
                <h3>Presupuesto Enero 2023</h3>
            </div>
            <div class="all-box">
                <div class="box-gastos">
                    <p class="box-title">
                        Gastos mensuales:
                    </p>

                    <table class="data-gastos">
                        <tr>
                            <td class="col-gastos">Servicios</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Alquiler</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Alimentos</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Educación</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Transporte</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Impuestos</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Ocio</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                        <tr>
                            <td class="col-gastos">Otros</td>
                            <td class="col-gastos">$0,00</td>
                        </tr>
                    </table>

                    <!--ultima mod.-->
                    <div class="data-proy modificación">
                        <p>Ultima modificación:</p>
                        <p>01/01/23</p>
                    </div>
                </div>
                
            </div>
            <!--Editar-->
            <div class="data-gastos">                
                <div class="data-proy ">
                    <p>Editar</p>
                    <p><i class="fas fa-arrow-right"></i></p>
                </div>
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


<!-- <div class="all-box">
                <div class="box-proy">
                    <img src="https://i.pinimg.com/564x/46/fb/d5/46fbd5ea7e2ebb6e9267dcc110923bad.jpg" alt="img-proy">
                    <div class="data-proy">
                        <p>Nombre </p>
                    </div>
                </div>

                <div class="box-proy">
                    <img src="https://i.pinimg.com/564x/18/c2/ce/18c2ce541931e38f0275d64313956ca2.jpg" alt="img-proy">
                    <div class="data-proy">
                        <p>Nombre </p>
                    </div>
                </div>

                <div class="box-proy">
                    <img src="https://i.pinimg.com/564x/5a/81/18/5a811813f599f3e28abe0ee092f2da89.jpg" alt="img-proy">
                    <div class="data-proy">
                        <p>Nombre </p>
                    </div>
                </div>
            </div> -->