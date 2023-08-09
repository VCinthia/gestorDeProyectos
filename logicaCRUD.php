<?php

include("db.php");

//$userID = $_SESSION['user_id'];

//CREATE
if (isset($_POST['save-proy'])){
    $nombre = $_POST['nombre'];
    $comitente = $_POST['comitente'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $carga_horaria = $_POST['carga_horaria'];
    $valor_hora = $_POST['valor_hora'];
    $valor_estimativo = $_POST['valor_estimativo'];
    $valor_proyecto = $_POST['valor_proyecto'];
    $url_imagen = $_POST['url_imagen'];
    $descripcion = $_POST['descripcion'];
    //$useridproy =  $_POST['user_id'];
    $useridproy = $_SESSION['user_id'];

    $query = "INSERT INTO proyectos(nombre, comitente, fecha_entrega, carga_horaria, valor_hora, valor_estimativo, valor_proyecto, url_imagen, descripcion, user_id) VALUES ('$nombre', '$comitente', '$fecha_entrega', '$carga_horaria', '$valor_hora', '$valor_estimativo', '$valor_proyecto', '$url_imagen', '$descripcion', $useridproy)";

    $result = mysqli_query($conn, $query);
    if(!$result) {
        $_SESSION['message'] = 'Falló la creación del proyecto.' . $query;
        die(header("Location: proyectos.php"));
        
    }

    $_SESSION['message'] = 'Proyecto guardado correctamente.';
    // $_SESSION['message_type'] = 'success';
    
    header("Location: proyectos.php");
}

//DELETE
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM proyectos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        $_SESSION['message'] = 'Falló la eliminación del proyecto.';
        die(header("Location: proyectos.php"));
        
    }

    $_SESSION['message'] = 'Proyecto eliminado correctamente.';
    // $_SESSION['message_type'] = 'success';
    
    header("Location: proyectos.php");
}

?>