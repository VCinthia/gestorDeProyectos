<?php

session_start();
    //locales
 $conn = mysqli_connect(
     'localhost',
     'root',
     '',
     'php_gestor_proyectos'
 );
   //deploy
// $conn = mysqli_connect(
//     'localhost',
    // nombre de usuario:
//     '',
    // password
//     '',
    //nombre de bdd:
//     ''
// );
//   if(isset($conn)){
//       echo 'DataBase is connected:  ';
//   }


date_default_timezone_set('America/Argentina/Buenos_Aires');
?>