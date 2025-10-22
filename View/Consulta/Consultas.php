<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Controller/ConsultasController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutExterno.php';

$resultado = ConsultarVehiculosModel();
?>

<!DOCTYPE html>
<html lang="en">

<?php
ShowCSS();
?>

<body>

  <!-- Header Start -->
  <?php
  ShowHeader();
  ?>
  <!-- Header End -->


  <!-- Hero Start -->
  <div class="container-fluid p-5 mb-5 bg-dark text-secondary">
    <div class="container wow fadeIn" data-wow-delay="0.1s">
      <h1 class="display-1 text-secondary text-center mb-0">Vehículos Disponibles</h1>
    </div>
  </div>
  <!-- Hero End -->


  <div class="row g-5  justify-content-center">
    <div class="container-xxl flex-grow-1 container-p-y">

      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>

          <?php
          while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['Cedula'] . "</td>";
            echo "<td>" . $fila['Nombre'] . "</td>";
            echo "<td>" . $fila['Marca'] . "</td>";
            echo "<td>" . $fila['Modelo'] . "</td>";
            echo "<td>$" . $fila['Precio'] . "</td>";
            echo "</tr>";
          }
          ?>

        </tbody>
      </table>

    </div>
  </div>
  <!-- Contact End -->


  <!-- Instagram Start -->
  <div class="container-fluid position-relative instagram p-0 mt-5">
  </div>
  <!-- Instagram End -->


  <!-- Footer Start -->
  <?php
  ShowFooter();
  ?>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


  <?php
  ShowJS();
  ?>
</body>

</html>