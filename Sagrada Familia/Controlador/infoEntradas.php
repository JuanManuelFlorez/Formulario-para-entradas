<?php

    $dineroTotal=0;

    $conexion = new mysqli('localhost','root','','sf');
    $error = $conexion->connect_errno;
    if ($error!=null){
        echo "ERROR";
        exit();
    }else {
        $consulta = "SELECT precio FROM adaptados";
        $resultado = $conexion->query($consulta);

        while ($adaptados = $resultado->fetch_assoc()) {
            $dineroTotal += $adaptados['precio'];
        }
        echo $dineroTotal;
    }
