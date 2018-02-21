<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Entradas Sagrada Familia</title>
</head>
<body bgcolor="#E6E6FA">
    <form action="../Controlador/Entrada.php" method="GET">
        <div class="container col-md-4 col-md-offset-4 bg-info text-white" >
            <h3>Formulario</h3>
            <div class="form-group">
                <input type="text"  class="form-control "  name="nom" placeholder="Nombre" required><br><br>
                <input type="text"  class="form-control" name="ape" placeholder="Apellidos" required><br><br>
                <input type="number" class="form-control" name="edad" placeholder="Edad" required><br><br>
                <input type="text" class="form-control" name="pais" placeholder="Pais" required><br><br>
                <input type="text" class="form-control" name="hotel" placeholder="Hotel"><br><br>
                <input type="text" class="form-control" name="agencia" placeholder="Agencia"><br><br>

                <input type="checkbox" name="audioguia">Audioguia<br>
                <input type="checkbox" name="parado">Parado<br>
                <input type="checkbox" name="ascensor">Ascensor<br>
                <input type="checkbox" name="visual">Adaptacion visual<br>
                <input type="checkbox" name="motriz" >Adaptacion motriz<br>
                <input type="checkbox" name="guia">Guia<br><br>

                <input type="text" class="form-control" name="nombreV" placeholder="Visita 1"><br><br>
                <input type="text" class="form-control" name="direV" placeholder="Direccion"><br><br>
                <input type="text" class="form-control" name="fechaV" placeholder="Fecha"><br><br>
                <input type="number" class="form-control" name="valorV" placeholder="Valoracion"><br><br><br>

                <input type="text" class="form-control" name="nombreV2" placeholder="Visita 2"><br><br>
                <input type="text" class="form-control" name="direV2" placeholder="Direccion"><br><br>
                <input type="text" class="form-control" name="fechaV2" placeholder="Fecha"><br><br>
                <input type="number" class="form-control" name="valorV2" placeholder="Valoracion"><br><br><br>

                <input type="text" class="form-control" name="nombreV3" placeholder="Visita 3"><br><br>
                <input type="text" class="form-control" name="direV3" placeholder="Direccion"><br><br>
                <input type="text" class="form-control" name="fechaV3" placeholder="Fecha"><br><br>
                <input type="number" class="form-control" name="valorV3" placeholder="Valoracion"><br><br><br>

                <input type="text" class="form-control" name="nombreV4" placeholder="Visita 4"><br><br>
                <input type="text" class="form-control" name="direV4" placeholder="Direccion"><br><br>
                <input type="text" class="form-control" name="fechaV4" placeholder="Fecha"><br><br>
                <input type="number" class="form-control" name="valorV4" placeholder="Valoracion"><br><br><br>


                <input type="submit" class="btn btn-default " value="Aceptar" ><br>
            </div>
        </div>


    </form>
    
</body>
</html>