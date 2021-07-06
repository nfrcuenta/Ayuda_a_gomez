<?php
require_once "includes/class_user.php";
$usuario= new usuario();
$datos=$usuario->listar_usuarios_especifico($_GET['iduser']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="procesos/form_user_edit.php">
                <div class="form-group">
                    <label for="nombre_user">Nombres</label>
                    <input type="text" class="form-control" id="nombre_user" name="nombre_user" 
                    value="<?php echo $datos['nombre'];?>">
                </div>
                <div class="form-group">
                    <label for="apell_user">Apellidos</label>
                    <input type="text" class="form-control" id="apell_user" name="apell_user" 
                    value="<?php echo $datos['apellido'];?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="correo_user">Correo</label>
                        <input type="email" class="form-control" name="correo_user" id="correo_user"
                        value="<?php echo $datos['correo'];?>">
                    </div>
                </div>
                <input type="hidden" name="id_user" value="<?php echo $_GET['iduser'];?>">
                <button type="submit" class="btn btn-primary">Actualizar datos</button>
            </form>
    
    
    
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>