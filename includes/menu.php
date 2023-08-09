<?php //include("db.php") ?>

<?php
$userID = $_SESSION['user_id'];
?>


<?php 
//GET USUARIOS
if (isset($userID)) {
        //echo 'entre a la funcion';
        $id = $_GET['id'];
        $query = "SELECT * FROM gastos WHERE user_id = $userID ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $user_id = $row['user_id'];
        }
        //echo 'user_id', $user_id, 'servicio', $servicios;
    
    }
    
    ?>

<!-- MENU -->
<div class="menu" id="menu">
    <ul class="links">
        <li><a href="index.php" id="inicio">
                <i class="fas fa-home"></i>
                Inicio</a></li>
        <li><a href="proyectos.php" id="proyectos" class="links--hide">
                <i class="fas fa-briefcase"></i>
                Proyectos</a></li>
        <!-- Mostrar a logeados-->
        <li><a href="gastos.php?id=<?php echo $id; ?>" id="gastos" class="links--hide">
                <i class="fas fa-chart-pie"></i>
                Gastos</a></li><!-- Mostrar a logeados-->
        <!-- <li><a href="404.php" class="links--hide">
                    <i class="fas fa-user"></i>
                    Perfil</a></li> -->
        <!-- Mostrar a logeados-->

        <?php if (!isset($_SESSION['user_id'])) { ?>
            <!-- Show the login button if the user is not logged in -->
            <li><a class="login" href="registro-login.php" id="abrir-login">
                    <i class="fas fa-sign-in-alt"></i>
                    Ingresar</a></li>
        <?php } else { ?>
            <!-- Show the logout button if the user is logged in -->
            <li><a class="logout links--hide show--inline" href="logout.php" id="logout">
                    <i class="fas fa-sign-in-alt"></i>
                    Cerrar Sesion</a></li>
        <?php } ?>
    </ul>
</div>