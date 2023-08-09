<style>
    /* Agrega estilos para el símbolo '$' */
    
</style>

<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>
<?php

if (!isset($_SESSION['user_id'])) {
    header("Location: registro-login.php");
    exit();
}
$userID = $_SESSION['user_id'];
?>

<?php
//EDIT 
if (isset($userID)) {
    //echo 'entre a la funcion';
    $id = $_GET['id'];
    $query = "SELECT * FROM gastos WHERE user_id = $userID ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $idrow = $row['id'];
        $user_id = $row['user_id'];
        $servicios = $row['servicios'];
        $alquiler = $row['alquiler'];
        $alimentos = $row['alimentos'];
        $educacion = $row['educacion'];
        $transporte = $row['transporte'];
        $impuestos = $row['impuestos'];
        $ocio = $row['ocio'];
        $otros = $row['otros'];
        $total = $row['total'];
        $fecha_ultima_edicion = $row['fecha_ultima_edicion'];
        $horasmes = $row['horasmes'];
        $valorhora = $row['valorhora'];
    }
    //echo 'idrow', $idrow,'user_id', $user_id, 'servicio', $servicios;

    if (isset($_POST['save-gasto'])) {
        
        $servicios = $_POST['servicios'];
        $alquiler = $_POST['alquiler'];
        $alimentos = $_POST['alimentos'];
        $educacion = $_POST['educacion'];
        $transporte = $_POST['transporte'];
        $impuestos = $_POST['impuestos'];
        $ocio = $_POST['ocio'];
        $otros = $_POST['otros'];
        $total = $_POST['total'];
        $fecha_ultima_edicion = $_POST['fecha_ultima_edicion'];
        $horasmes = $_POST['horasmes'];
        $valorhora = $_POST['valorhora'];
        ///////////
        
        $fechaActual = date('Y-m-d H:i:s');

        $query = "UPDATE gastos SET servicios = $servicios, alquiler = $alquiler, alimentos = $alimentos, educacion = $educacion, transporte = $transporte, impuestos = $impuestos, ocio = $ocio, otros = $otros, total = $total, fecha_ultima_edicion = '$fechaActual', horasmes = $horasmes, valorhora = $valorhora WHERE id = $id";
        
        $result = mysqli_query($conn, $query);
        if (!$result) {
            $_SESSION['message'] = 'Falló la edición de gastos.'; // . $query;
            die(header("Location: proyectos.php"));
        }

        $_SESSION['message'] = 'Gastos editado correctamente.'; // . $query;
        header("Location: proyectos.php");
        exit();

    }
}
?>

<div class="background-element"><!--content-body-->

    <!-- SECCION PORTADA -->
    <div class="portada">
        <div class="portada-title">Gastos</div>
        <div>
            <p class="secondary-text">
                Aqui puedes ver detalles de tus gastos.
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
        <div class="secondary-title">
            <?php $fechaActual = date('d/m/Y'); ?>
            <h3>Presupuesto al
                <?php echo $fechaActual ?>
            </h3>

        </div>
        <div class="all-box">
            <div class="box-n-proy">
                <p class="box-title">
                    Gastos mensuales:
                </p>

                <form action="#" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                    <table class="data-n-proy">
                        <tr>
                            <td class="col-n-proy">Servicios</td>
                            <td class="col-n-proy pesos form-gastos" > 
                                <input type="number" name="servicios" id="servicios" value="<?php echo $servicios; ?>" oninput="calcularTotal()" inputmode="numeric" >
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Alquiler</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="alquiler" id="alquiler" value="<?php echo $alquiler; ?>" oninput="calcularTotal()" inputmode="numeric">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Alimentos</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="alimentos" id="alimentos" value="<?php echo $alimentos; ?>" oninput="calcularTotal()">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Educación</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="educacion" id="educacion" value="<?php echo $educacion; ?>" oninput="calcularTotal()">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Transporte</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="transporte" id="transporte" value="<?php echo $transporte; ?>" oninput="calcularTotal()">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Impuestos</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="impuestos" id="impuestos" value="<?php echo $impuestos; ?>" oninput="calcularTotal()">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Ocio</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="ocio" id="ocio" value="<?php echo $ocio; ?>" oninput="calcularTotal()">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Otros</td>
                            <td class="col-n-proy pesos">
                                <input type="number" name="otros" id="otros" value="<?php echo $otros; ?>" oninput="calcularTotal()">
                            </td>
                        </tr>                       
                        <tr>
                            <td class="col-n-proy">Total Gastos</td>
                            <td class="col-n-proy pesos"><input type="text" name="total" id="total" value="<?php echo $total; ?>" readonly></td>
                        </tr>
                        
                        <tr class="divider">                        
    <td class="col-n-proy"><br>Cant. horas trabajadas mensuales</td>
    <td class="col-n-proy horas"><input type="text" name="horasmes" id="horasmes" value="<?php echo $horasmes; ?>" oninput="calcularTotal()"></td>
</tr>
<tr>                        
    <td class="col-n-proy ">Valor Mínimo Hora</td>
    <td class="col-n-proy pesos"><input type="text" name="valorhora" id="valorhora" value="<?php echo $valorhora; ?>" readonly oninput="calcularTotal()"></td>
</tr>
                    </table>

                    <!--ultima mod.-->
                    <div class="data-proy modificación">
                        <p>Ultima edición:</p>
                        <p>
                            <?php
                            $fecha_convertida = date("d F Y H:i:s", strtotime($fecha_ultima_edicion));
                            ?>
                            <?php echo $fecha_convertida ?>
                        </p>
                    </div>

                    <div class="option-crud crud-save">
                        <a class="back" href="./proyectos.php"><i class="fas fa-arrow-left"></i>Descartar</a>
                        <button type="submit" class="save" name="save-gasto">Guardar<i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php include("./includes/footer.php") ?>

<!-- SCRIPTS -->
<script src="./assets/js/proy.js"></script>
<script src="./assets/js/fontawesome.all.min.js"></script>
<script src="./assets/js/function.js"></script>
</body>

</html>