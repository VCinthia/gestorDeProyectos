<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>

<?php
// Assuming you have stored the user ID in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: registro-login.php");
    exit();
}
$userID = $_SESSION['user_id'];
?>

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
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert-box">
            <div class="close-alert" onclick="closeAlert()">x</div>
            <div class="primary-text">Alerta:</div>
            <div class="alert-message">
                <?= $_SESSION['message'] ?>
            </div>
        </div>
        <?php
        unset($_SESSION['message']); 
    }
    ?>



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

            $query = "SELECT * FROM proyectos WHERE user_id = ? ORDER BY id DESC LIMIT 1";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'i', $userID);
            mysqli_stmt_execute($stmt);
            $result_last_proyect = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result_last_proyect)) { ?>
                <div class="box-proy">
                    <div class="option-crud" id="<?php echo $row['id'] ?>">
                        <img src=<?php echo $row['url_imagen'] ?> alt="img-proy">
                        <div class="crud-delete">
                            <a class="" href="./logicaCRUD.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="crud-edit">
                            <a class="" href="./editar-proyecto.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="data-proy">
                            <p>
                                <?php echo $row['nombre'] ?>
                            </p>
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
            $query = "SELECT * FROM proyectos WHERE user_id = ? AND fecha_entrega >= '$fechaActual' ORDER BY id DESC";

            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'i', $userID);
            mysqli_stmt_execute($stmt);
            $result_proyects_en_curso = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result_proyects_en_curso)) { ?>

                <div class="box-proy">
                    <div class="option-crud" id="<?php echo $row['id'] ?>">
                        <img src=<?php echo $row['url_imagen'] ?> alt="img-proy">
                        <div class="crud-delete">
                            <a method="DELETE" class="" href="./logicaCRUD.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="crud-edit">
                            <a class="" href="./editar-proyecto.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="data-proy">
                            <p>
                                <?php echo $row['nombre'] ?>
                            </p>
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
            $query = "SELECT * FROM proyectos WHERE user_id = ? AND fecha_entrega < '$fechaActual' ORDER BY id DESC";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'i', $userID);
            mysqli_stmt_execute($stmt);
            $result_proyectos_finalizados = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result_proyectos_finalizados)) { ?>

                <div class="box-proy">
                    <div class="option-crud" id="<?php echo $row['id'] ?>">
                        <img src=<?php echo $row['url_imagen'] ?> alt="img-proy">
                        <div class="crud-delete">
                            <a method="DELETE" class="" href="./logicaCRUD.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="crud-edit">
                            <a class="" href="./editar-proyecto.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="data-proy">
                            <p>
                                <?php echo $row['nombre'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php include("./includes/footer.php") ?>

<!-- SCRIPTS -->
<script src="./assets/js/fontawesome.all.min.js"></script>
<script src="./assets/js/function.js"></script>
</body>

</html>