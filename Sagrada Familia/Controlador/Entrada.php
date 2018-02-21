<?php
    require_once ("Agencia.php");
    require_once ("Adaptados.php");
    require_once ("LugarVisita.php");
    require_once ("Libre.php");

    $fecha=strftime( "%d-%m-%Y", time() );

    if (!empty($_GET['parado'])){
        $aux = "Si";
    }else{
        $aux = "No";
    }
    if (!empty($_GET['audioguia'])){
        $aux2 = "Si";        
    }else{
        $aux2 = "No";


    }
    //Array  de los lugares visitados
    $Lugar1[0] = new LugarVisita ($_GET['nombreV'], $_GET['direV'], $_GET['fechaV'], $_GET['valorV']);
    $Lugar1[1] = new LugarVisita ($_GET['nombreV2'], $_GET['direV2'], $_GET['fechaV2'], $_GET['valorV2']);
    $Lugar1[2] = new LugarVisita ($_GET['nombreV3'], $_GET['direV3'], $_GET['fechaV3'], $_GET['valorV3']);
    $Lugar1[3] = new LugarVisita ($_GET['nombreV4'], $_GET['direV4'], $_GET['fechaV4'], $_GET['valorV4']);

    //Visitante guia
    if(!empty($_GET['agencia'])){
        if (isset($_GET['guia'])){
            $aux3 = "Si";
        }else{
            $aux3 = "No";
        }
        //Objecto creado
        $newAgencia = new Agencia($_GET['nom'], $_GET['ape'], $_GET['edad'], $_GET['pais'], $aux2, $aux, $_GET['agencia'], $aux3);
        echo $newAgencia->imprimirEntrada();
        
        $nom= $_GET['nom'];
        $ape= $_GET['ape'];
        $edad= $_GET['edad'];
        $pais= $_GET['pais'];
        $agencia= $_GET['agencia'];
        //Consulta a la base de datos
        $conexion = new mysqli('localhost', 'root', '', 'sf');
        $error = $conexion->connect_errno;
        if ($error!=null){
            echo "Error";
            exit();
        }
        else{
            $consulta = "INSERT INTO agencia VALUES ('$nom', '$ape', $edad, '$pais','$aux2' , '$aux', '$agencia', '$aux3')";
            $resultado = $conexion->query($consulta);
            if($resultado!=null){
                echo"bien";
            }else{
                echo "mal";
            }
        }

    }
    //Visitante adaptado
    else if ((!empty($_GET['hotel'])&& !empty($_GET['nombreV']) && !empty($_GET['direV']) && !empty($_GET['fechaV']) && !empty($_GET['valorV']) && !empty($_GET['visual'])) ||
        (!empty($_GET['nombreV']) && !empty($_GET['direV']) && !empty($_GET['fechaV']) && !empty($_GET['valorV']) && !empty($_GET['motriz']))){
          
            //Objecto creado
            $newAdaptado = new Adaptados($_GET['nom'], $_GET['ape'], $_GET['edad'], $_GET['pais'], $aux2, $aux, $_GET['hotel'], @$_GET['visual'], @$_GET['motriz'],  @$_GET['ascensor'], $Lugar1);

            $newAdaptado->imprimirEntrada();
            $precioEntrada=$newAdaptado->precioEntrada();

            $nom1= $_GET['nom'];
            $ape1= $_GET['ape'];
            $edad1= $_GET['edad'];
            $pais1= $_GET['pais'];
            $hotel1= $_GET['hotel'];
            $visual = @$_GET['visual'];
            $motriz = @$_GET['motriz'];
            $ascensor =@$_GET['ascensor'];

            //Consulta a la base de datos
            $conexion = new mysqli('localhost', 'root', '', 'sf');
            $error = $conexion->connect_errno;
            if ($error!=null){
                echo "Error";
                exit();
            }
            else {
                $consulta = "INSERT INTO adaptados VALUES ('$nom1','$ape1',$edad1,'$pais1','$aux2' , '$aux', '$hotel1', '$visual','$motriz','$ascensor', $precioEntrada,'$fecha')";
                $resultado = $conexion->query($consulta);
            }
    }
    //Visitante Libre
    else if(!empty($_GET['hotel'])  && !empty($_GET['nombreV']) && !empty($_GET['direV']) && !empty($_GET['fechaV']) && !empty($_GET['valorV'])){

        //Objecto creado
        $newLibre = new Libre ($_GET['nom'], $_GET['ape'], $_GET['edad'], $_GET['pais'], $aux2, $aux, $_GET['hotel'], $Lugar1);
        $newLibre->imprimirEntrada();

        $nom2= $_GET['nom'];
        $ape2= $_GET['ape'];
        $edad2= $_GET['edad'];
        $pais2= $_GET['pais'];
        $hotel2= $_GET['hotel'];
        
        //Consulta a la base de datos
        $conexion = new mysqli('localhost', 'root', '', 'sf');
        $error = $conexion->connect_errno;
        if ($error!=null){
            echo "Error";
            exit();
        }
        else {
            $consulta = "INSERT INTO libre VALUES ('$nom2', '$ape2', $edad2, '$pais2','$aux2' , '$aux', '$hotel2')";
            $resultado = $conexion->query($consulta);
            if ($resultado != null) {
                echo "bien";
            } else {
                echo "mal";
            }
        }
    }
    echo "
        <form action='infoEntradas.php'>
            <input type='submit' value='InfoEntradas'>
        </form>";
?>

