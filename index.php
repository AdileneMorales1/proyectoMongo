<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro de usuarios</title>
</head>

<body>

    <h2 style="color:#3FB139" class="text-center font-italic">REGISTRO DE USUARIOS</h2>
    <hr style="border: 0; height: 5px; box-shadow: inset 0 12px 12px -12px black">

    <div class="container">
        <div id="alertUsuario">
            <?php
            error_reporting(0);
            $mensaje = $_GET["mensaje"];
            if ($mensaje == 2) {
                echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> El Usuario fue guardado con éxito.</p><br><br>";
            }
        ?>
        </div>

        <form class="row g-3" action="agregar.php" method="post">
            <div class="col-md-6">
                <label for="" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono1" name="telefono1">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono2" name="telefono2">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Selecciona tu avatar</label>
                <input class="form-control form-control-lg" id="avatar" type="file" name="avatar">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" placeholder="" name="direccion">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <br><br>

    <div class="container">
        <table class="table table-striped table-hover">
            <thead style="background-color:#0a497b;">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo Electrónico</th>
                </tr>
            </thead>
            <tbody>

                <?php
                        require_once("conexion.php");
                        
                        if ($collection->count()>0)
                        {
                            $documentos = $collection->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                <tr>
                    <td><?php echo $documento["Nombre"]; ?></td>
                    <td><?php echo $documento["Apellidos"]; ?></td>
                    <td><?php echo $documento["Correo"]; ?></td>
                </tr>
                <?php
                        }
                    }else{
                    ?>
                <tr>
                    <td colspan="4">
                        <h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4>
                    </td>
                </tr>
                <?php } ?>
            </tbody>


            </tbody>
        </table>
    </div>

    <script>
    setTimeout(function() {
        $('#alertUsuario').hide('fast');
    }, 1500);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</body>

</html>