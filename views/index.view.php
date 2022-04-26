<!doctype html>
<html lang="es">

  <head>
    <!-- Incluimos el head -->
    <?php include "partials/head.php"?>
    <title>Home - Gestión Corredores</title>
  </head>
  <body>
      <!-- Incluimos la cabecera -->
      <?php include "partials/cabecera.php"?>

      <div class="container">
        <!-- Incluimos partial ménu -->
        <?php include "partials/menu.php"?>

        <!-- Incluimos partial alert -->
        <?php if (isset($mensaje)) include "partials/alert.php"?>

        <table class="table table-striped">
          <thead>
            <tr>
              <!-- Añadimos PHP con cabecera de la tabla -->
              <?php
                foreach (Corredores::getCabecera() as $columna):?>
                  <th><?=$columna?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
              <!-- Añadimos PHP para mostrar los detalles de los clientes -->
              <?php foreach ($arrayCorredores as $corredor): ?>
                <tr>
                
                  <td><?= $corredor->id ?></td>
                  <td><?= $corredor->nombre ?></td>
                  <td><?= $corredor->apellidos ?></td>
                  <td><?= $corredor->ciudad ?></td>
                  <td><?= $corredor->email ?></td>
                  <td><?= $corredor->edad ?></td>
                  <td><?= $corredor->categoria ?></td>
                  <td><?= $corredor->club ?></td>

                  
                  <!-- Muestro los botones de acción -->
                  <td>
                    <a href="editar.php?id=<?= $corredor->id ?>" title="Editar"><i class="bi bi-pencil-square"></i></a>
                    <a href="mostrar.php?id=<?= $corredor->id ?>" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                    <a href="delete.php?id=<?= $corredor->id ?>" title="Eliminar" onclick="return confirm('Confimar elimación del corredor')"><i class="bi bi-trash-fill"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>  
          </tbody>
        </table>
        <!-- Incluimos el pie -->
        <?php include "partials/foot.php"?>
      </div>
      <!-- Incluimos bootstrap javascript -->
      <?php include "partials/javascript.php"?>
  </body>
</html>