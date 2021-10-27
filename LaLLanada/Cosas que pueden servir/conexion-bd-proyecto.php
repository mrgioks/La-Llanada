<?php

function conexionBD () {
    try { 
        $conexion_bd = new PDO('myql:host=localhost;dbname=bd','root','1234');
        $conexion_bd -> setAtribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
        $conexion_bd -> exec('SET CHARACTER SET utf8');
        return $conexion_bd;

    } catch (Exeption $e) {
        die('error'.$e->GetMessage());
        }

    echo 'Resultado:'.$resultado;
}

?>