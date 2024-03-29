<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>

<?php
//EDIT 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM proyectos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $user_id = $row['user_id'];
        $nombre = $row['nombre'];
        $comitente = $row['comitente'];
        $fecha_entrega = $row['fecha_entrega'];
        $carga_horaria = $row['carga_horaria'];
        //$valor_hora = $row['valor_hora'];
        $valor_estimativo = $row['valor_estimativo'];
        $valor_proyecto = $row['valor_proyecto'];
        $url_imagen = $row['url_imagen'];
        $descripcion = $row['descripcion'];
        $fecha_creacion = $row['fecha_creacion'];
    }
    // echo $fecha_entrega;
    // echo $descripcion;

    // Obtener el valor de valorhora desde la tabla gastos
    $query_gastos = "SELECT valorhora FROM gastos WHERE user_id = $user_id";
    $result_gastos = mysqli_query($conn, $query_gastos);
    if (mysqli_num_rows($result_gastos) == 1) {
        $row_gastos = mysqli_fetch_array($result_gastos);
        $valorhora = $row_gastos['valorhora'];
    }
}


if (isset($_POST['save-proy'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $comitente = $_POST['comitente'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $carga_horaria = $_POST['carga_horaria'];
    $valor_hora = $_POST['valor_hora'];
    $valor_estimativo = $_POST['valor_estimativo'];
    $valor_proyecto = $_POST['valor_proyecto'];
    $url_imagen = $_POST['url_imagen'];
    $descripcion = $_POST['descripcion'];
    $fecha_creacion = $_POST['fecha_creacion']; //fecha_creacion en realidad es ultima edicion

    $fechaActual = date('Y-m-d H:i:s');

    $query = "UPDATE proyectos set nombre = '$nombre', comitente = '$comitente', fecha_entrega = '$fecha_entrega', carga_horaria = '$carga_horaria',  valor_estimativo = '$valor_estimativo', valor_proyecto = '$valor_proyecto', url_imagen = '$url_imagen', descripcion = '$descripcion', fecha_creacion = '$fechaActual' WHERE id = $id";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        $_SESSION['message'] = 'Falló la edición del proyecto.';
        die(header("Location: proyectos.php"));

    }

    $_SESSION['message'] = 'Proyecto editado correctamente.';
    //$_SESSION['message_type'] = 'success';

    header("Location: proyectos.php");
    exit();
}
?>


<div class="background-element"><!--content-body-->

    <!-- SECCION PORTADA -->
    <div class="portada">
        <div class="portada-title">Editar Proyecto</div>
        <p class="secondary-text">
            Edita tu proyecto.
        </p>
    </div>

    <!-- SECCION PROY -->
    <div class="all-proy">
        <div class="secondary-title">
            <h3>Proyecto</h3>
        </div>
        <div class="all-box">
            <div class="box-n-proy">
                <p class="box-title">
                    Datos del proyecto:
                </p>

                <form action="editar-proyecto.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <table class="data-n-proy">
                        <tr>
                            <td class="col-n-proy">Nombre</td>
                            <td class="col-n-proy"><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Comitente</td>
                            <td class="col-n-proy"><input type="text" name="comitente"
                                    value="<?php echo $comitente; ?>"></td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Fecha de Entrega</td>
                            <td class="col-n-proy">
                                <input type="date" name="fecha_entrega"
                                    value="<?php echo date('Y-m-d', strtotime($fecha_entrega)); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Cargar Imagen</td>
                            <td class="col-n-proy"><input type="text" name="url_imagen"
                                    value="<?php echo $url_imagen; ?>" placeholder="Url imagen"></td>
                        </tr>

                        <tr>
                            <td class="col-n-proy">Carga Horaria (Hrs)</td>
                            <td class="col-n-proy"><input type="text" name="carga_horaria" id="carga_horaria"
                                    value="<?php echo $carga_horaria; ?>" oninput="calcularProyecto()">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Valor Mínimo Hora ($)</td>
                            <td class="col-n-proy"><input type="text" name="valorhora" id="valorhora"
                                    value="<?php echo $valorhora; ?>" readonly oninput="calcularProyecto()"></td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Valor Mínimo Proyecto ($)</td>
                            <td class="col-n-proy"><input type="text" name="valor_estimativo" id="valor_estimativo"
                                    value="<?php echo $valor_estimativo; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Valor Proyecto Actualizado ($)</td>
                            <td class="col-n-proy"><input type="text" name="valor_proyecto" id="valor_proyecto"
                                    value="<?php echo $valor_proyecto; ?>"></td>
                        </tr>
                        <tr>
                            <td class="col-n-proy">Descripción</td>
                            <td class="col-n-proy">
                                <textarea name="descripcion" placeholder=""><?php echo $descripcion; ?></textarea>
                            </td>
                        </tr>

                    </table>

                    <!--ultima mod.-->
                    <div class="data-proy modificación">
                        <p>Fecha ultima Edición:</p>
                        <?php
                        $fecha_convertida = date("d F Y H:i:s", strtotime($fecha_creacion));
                        ?>
                        <?php echo $fecha_convertida ?>
                    </div>

                    <div class="option-crud crud-save">
                        <a class="back" href="./proyectos.php"><i class="fas fa-arrow-left"></i>Descartar</a>
                        <button type="submit" class="save" name="save-proy">Guardar<i
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
<script src="./assets/js/edit-proy.js"></script>
<script src="./assets/js/fontawesome.all.min.js"></script>
</body>

</html>