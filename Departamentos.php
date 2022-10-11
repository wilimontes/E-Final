<?php
require "data/database.php";
$sql = "SELECT * FROM departamentos";
$resultado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-center" style="color:#444c38" ><abbr title="attribute">Listado de Cliente</abbr></h1>
        <br>
        <a href="Nuevo_depa.php" class="btn btn-success">Nuevo</a>
        <a href="index.php" style="margin-left: 1150px" class="btn btn-danger">Atras</a>
        <br>
        <br>
        <table class="table table-bordered border-success">
            <thead>
                <tr class="text-center" style="color:#8b0000">
                    <th>id</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Habitaciones</th>
                    <th>Estacionamiento</th>
                </tr>
            </thead> 
            <tbody style="color:#191970">
            <?php
                foreach($resultado as $cliente):
            ?>
                <tr class="text-center">
                        <td><?php echo $cliente['id'] ?></td>
                        <td><?php echo $cliente['titulo'] ?></td>
                        <td><?php echo $cliente['precio'] ?></td>
                        <td><?php echo $cliente['descripcion'] ?></td>
                        <td><?php echo $cliente['habitaciones'] ?></td>
                        <td><?php echo $cliente['estacionamiento'] ?></td>
                        <td class="text-center">
                            <a href="Editar.php?id=<?php echo $cliente['id'] ?>" class="btn btn-warning">Editar</a>
                            <a href="Eliminar.php?id=<?php echo $cliente['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                </tr>       
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div> 
</div>

    </body> 
</body>
</html>