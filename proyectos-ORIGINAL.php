<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>
   

    <div class="background-element"><!--content-body-->

        <!-- SECCION PORTADA -->
        <div class="portada">
            <div class="portada-title">Proyectos</div>
            <div>
                <p class="secondary-text">
                    Aqui puedes ver detalles de tus proyectos.
                </p>

            </div>
        </div>        


        <!-- SECCION ALERTAS -->
            <?php if(isset($_SESSION['message'])) {?>
                <div class="alert-box">
                    <div class="close-alert" onclick="closeAlert()">x</div>
                    <div class="primary-text">Alerta:</div>
                    <div class="alert-message"><?= $_SESSION['message'] ?></div>
                </div>
            <?php  session_unset(); } ?> 


        <!-- SECCION ULTIMO PROY -->
        <div class="all-proy">
            <div class="all-box">
                <div class="box-data ">
                    <div class="data-proy ">
                        <div class="secondary-title ">
                            <h3>Último proyecto</h3>
                        </div>
                        <div class="option-crud">
                            <a class="crud-create" href="./crear-proyecto.php">
                                + Crear proyecto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-box">
            <?php 
                $fechaActual = date('Y-m-d');

                $query = "SELECT * FROM proyectos ORDER BY id DESC LIMIT 1";
                $result_last_proyect = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result_last_proyect)) { ?>
                    <div class="box-proy">
                    <div class="option-crud" id="<?php echo $row['id'] ?>">
                        <img src=<?php echo $row['url_imagen'] ?> alt="img-proy"> 
                        <div class="crud-delete">
                            <a class="" href="./logicaCRUD.php?id=<?php echo $row['id']?>"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="crud-edit">
                            <a class="" href="./editar-proyecto.php?id=<?php echo $row['id']?>"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="data-proy">
                        <p><?php echo $row['nombre'] ?></p>
                    </div>                        
                    </div>
                </div> 
                <?php } ?>
            </div>
        </div>

        <!-- SECCION LOS PROY EN CURSO -->
        <div class="all-proy">
            <div class="secondary-title">
                <h3>Proyectos en curso</h3>
            </div>

            <div class="all-box">
                <?php 
                $fechaActual = date('Y-m-d');

                $query = "SELECT * FROM proyectos WHERE fecha_entrega >= '$fechaActual' ORDER BY id DESC";
                $result_proyects_en_curso = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result_proyects_en_curso)) { ?>
                    <div class="box-proy">
                    <div class="option-crud" id="<?php echo $row['id'] ?>">
                        <img src=<?php echo $row['url_imagen'] ?> alt="img-proy"> 
                        <div class="crud-delete">
                            <a method="DELETE" class="" href="./logicaCRUD.php?id=<?php echo $row['id']?>"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="crud-edit">
                            <a class="" href="./editar-proyecto.php?id=<?php echo $row['id']?>"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="data-proy">
                        <p><?php echo $row['nombre'] ?></p>
                    </div>                        
                    </div>
                </div> 
                <?php } ?>
            </div>
        </div>

        <!-- SECCION PROY FINALIZADOS -->
        <div class="all-proy">
            <div class="secondary-title">
                <h3>Proyectos finalizados</h3>
            </div>

            <div class="all-box">
                <?php 
                $fechaActual = date('Y-m-d');

                $query = "SELECT * FROM proyectos WHERE fecha_entrega < '$fechaActual' ORDER BY id DESC";
                $result_proyectos_finalizados = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result_proyectos_finalizados)) { ?>
                    <div class="box-proy">
                    <div class="option-crud" id="<?php echo $row['id'] ?>">
                        <img src=<?php echo $row['url_imagen'] ?> alt="img-proy"> 
                        <div class="crud-delete">
                            <a method="DELETE" class="" href="./logicaCRUD.php?id=<?php echo $row['id']?>"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="crud-edit">
                            <a class="" href="./editar-proyecto.php?id=<?php echo $row['id']?>"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="data-proy">
                        <p><?php echo $row['nombre'] ?></p>
                    </div>                        
                    </div>
                </div> 
                <?php } ?>
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