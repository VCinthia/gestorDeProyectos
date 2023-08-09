
<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>


<div class="background-element"><!--content-body-->

        <!-- SECCION PORTADA -->
        <div class="portada">
            <div class="portada-title">Nuevo Proyecto</div>
            <p class="secondary-text">
                Carga los datos de tu nuevo proyecto.
            </p>
        </div>

        <!-- SECCION PROY -->
        <div class="all-proy">
    <div class="secondary-title">
        <h3>Nuevo Proyecto</h3>
    </div>
    <div class="all-box">
        <div class="box-n-proy">
            <p class="box-title">
                Datos del proyecto:
            </p>

            <form action="logicaCRUD.php?" method="POST" >
                <table class="data-n-proy">
                    <tr>
                        <td class="col-n-proy">Nombre</td>
                        <td class="col-n-proy"><input type="text" name="nombre" placeholder="Nombre del proyecto" required></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Comitente</td>
                        <td class="col-n-proy"><input type="text" name="comitente" placeholder="Nombre del comitente" required></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Fecha de Entrega</td>
                        <td class="col-n-proy"><input type="date" name="fecha_entrega" required></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Carga Horaria</td>
                        <td class="col-n-proy"><input type="text" name="carga_horaria" placeholder="Hrs totales" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Valor Hora</td>
                        <td class="col-n-proy"><input type="text" name="valor_hora" placeholder="$200,00" pattern="^[0-9]+$" title="Ingresa solo números enteros" ></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Valor Estimativo</td>
                        <td class="col-n-proy"><input type="text" name="valor_estimativo" placeholder="Carga horaria x Valor hora"></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Valor Proyecto</td>
                        <td class="col-n-proy"><input type="text" name="valor_proyecto" placeholder="Nuevo valor" required></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Cargar Imagen</td>
                        <td class="col-n-proy"><input type="text" name="url_imagen" placeholder="Url imagen" required></td>
                    </tr>
                    <tr>
                        <td class="col-n-proy">Descripción</td>
                        <td class="col-n-proy"><textarea name="descripcion" placeholder="Breve descripción del proyecto" required></textarea></td>
                    </tr>
                </table>

                <!--ultima mod.-->
                <div class="data-proy modificación">
                    <p>Fecha de Creación:</p>
                    <?php 
                    $fechaActual = date('d-m-Y');
                    ?>
                    <p><?php echo $fechaActual ?></p>
                </div>

                <div class="option-crud crud-save">
                    <a class="back" href="./proyectos.php" ><i class="fas fa-arrow-left"></i>Descartar</a>
                    <button type="submit" class="save"  name="save-proy">Guardar<i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>

    <!-- FOOTER -->
    <?php include("./includes/footer.php")?>

    <!-- SCRIPTS -->
    <script src="./assets/js/fontawesome.all.min.js"></script>

</body>

</html>