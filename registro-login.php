<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>

<?php
//GET USUARIOS
if (isset($_GET['login-user'])) {
    $email = $_GET['email'];
    $contrasenia = $_GET['contrasenia'];
    $id = $_GET['id'];

    $query = "SELECT * FROM usuarios WHERE email = ? AND contrasenia = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $email, $contrasenia);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (!$result || mysqli_num_rows($result) == 0) {
        $_SESSION['message'] = 'Error en usuario o contraseña.';
        die(header("Location: registro-login.php"));
    }

    // Get the user ID from the logged-in user
    $userData = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $userData['id'];
    $_SESSION['message'] = 'Bienvenido!';
    header("Location: proyectos.php");
    exit();

}

//CREATE USUARIO
if (isset($_POST['register-user'])) {
    //echo 'Entro en funcion';
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];
    //echo 'L28: ', $email,'-', $contrasenia,'|';
    //$query = "INSERT INTO usuarios(email, contrasenia) VALUES ('$email', '$contrasenia')";
    //$result = mysqli_query($conn, $query);

    $query_check_email = "SELECT * FROM usuarios WHERE email = ?";
    $stmt_check_email = mysqli_prepare($conn, $query_check_email);
    mysqli_stmt_bind_param($stmt_check_email, 's', $email);
    mysqli_stmt_execute($stmt_check_email);
    $result_check_email = mysqli_stmt_get_result($stmt_check_email);

    if (mysqli_num_rows($result_check_email) > 0) {
        // Si ya existe un usuario con ese correo electrónico, muestra un mensaje de error
        $_SESSION['message'] = 'El correo electrónico ya está registrado.';
        header("Location: registro-login.php");
        exit();
    }

    $query_insert_user = "INSERT INTO usuarios(email, contrasenia) VALUES (?, ?)";
    $stmt_insert_user = mysqli_prepare($conn, $query_insert_user);
    mysqli_stmt_bind_param($stmt_insert_user, 'ss', $email, $contrasenia);
    $result_insert_user = mysqli_stmt_execute($stmt_insert_user);

    if (!$result_insert_user) {
        $_SESSION['message'] = 'Falló la creación de su usuario.';
        header("Location: registro-login.php");
        exit();
    }

    $_SESSION['message'] = 'Usuario creado con éxito.';
    header("Location: proyectos.php");
    exit();
}

?>

<div class="background-element"><!--content-body-->

    <!-- SECCION PORTADA -->
    <div class="portada">
        <div class="portada-title">Ingresar</div>
        <div>
            <p class="secondary-text">
                Ingresa con tu cuenta o registrate!
            </p>

        </div>
    </div>


    <!-- SECCION ALERTAS -->
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert-box">
            <div class="close-alert" onclick="closeAlert(this)">x</div>
            <div class="primary-text">Alerta:</div>
            <div class="alert-message">
                <?= $_SESSION['message'] ?>
            </div>
        </div>
        <?php session_unset();
    } ?>


    <div class="alert-box second-alert-box">
        <div class="close-alert" onclick="closeAlert(this)">x</div>
        <div class="primary-text">Dato:</div>
        <div class="alert-message">
            <p>Si no quieres crear un usuario puedes usar uno de prueba:<br>
                <i>Correo electrónico: user@user.com, Password: user</i>
            </p>
        </div>
    </div>


    <!-- SECCION INGRESAR -->
    <div class="all-register">
        <form id="login-register-form" action="registro-login.php" method="get" class="register-box">
            <?php $fechaActual = date('Y-m-d'); ?>
            <div class="register-input">
                <input class="text" placeholder="Correo electrónico" name="email" value="<?php echo $email ?>">
            </div>
            <div class="register-input">
                <input class="text" placeholder="Password" name="contrasenia" value="<?php echo $contrasenia ?>">
            </div>
            <div class="btns-register">
                <button type="submit" class="save btn-register" name="register-user" onclick="setFormMethod('post')"><i
                        class="fas fa-arrow-up"></i>
                    Registrar</button>

                <button type="submit" class="save btn-login" name="login-user" onclick="setFormMethod('get')">Vamos <i
                        class="fas fa-arrow-right"></i></button>
            </div>
        </form>
    </div>


</div>

<!-- FOOTER -->
<?php include("./includes/footer.php") ?>

<!-- SCRIPTS -->
<script src="./assets/js/fontawesome.all.min.js"></script>
<script src="./assets/js/function-login.js"></script>
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