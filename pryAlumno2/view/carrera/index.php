<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carreras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br>
        <h1>Lista de Carreras</h1>
        <?php include_once 'view/carrera/create.php'; ?>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($carreras as $carrera) : ?>
                <tr>
                    <td><?= $carrera['idcarrera'] ?></td>
                    <td><?= $carrera['nomcar'] ?></td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $carrera['idcarrera'] ?>">
                            Editar
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $carrera['idcarrera'] ?>">
                            Eliminar
                        </button>
                    </td>

                </tr>
                <?php include 'view/carrera/edit.php'; ?>
                <?php include 'view/carrera/delete.php'; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>