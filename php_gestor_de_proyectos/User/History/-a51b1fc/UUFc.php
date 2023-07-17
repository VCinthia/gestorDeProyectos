<?php
$conn - mysqli_connect(
    'localhost',
    'root',
    '',
    'php_gestor_proyectos'
);

if(isset($conn)){
    echo 'DB is connected'
};
?>