<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutExterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Controller/VehiculoController.php';
$vendedores = ConsultarVendedoresModel();
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
            <h1 class="display-1 text-secondary text-center mb-0">Registra un Vehículo</h1>
        </div>
    </div>
    <!-- Hero End -->


        <div class="row g-5  justify-content-center">
            <div class="col-lg-6">
                <div class="bg-light rounded h-100 p-5">
                    <form id="formRegistroVehiculos" class="mb-3" action="" method="POST">
                        <div class="mb-3">
                                <label for="vendedor" class="form-label">Seleccionar Vendedor</label>
                                <select class="form-select" id="Vendedor" name="Vendedor" required>
                                    <option value="" selected disabled>Eligue un Vendedor</option>
                                    
                                    <?php
                                    //Generar las opciones del select dinámicamente
                                    if ($vendedores && $vendedores->num_rows > 0) {
                                        // El bucle while recorre cada fila de la tabla vendedores
                                        while($vendedor = $vendedores->fetch_assoc()) {
                                            // El 'value' será el ID (para la BD)
                                            // Lo que ve el usuario es el nombre
                                            echo '<option value="' . $vendedor['IdVendedor'] . '">' . $vendedor['Nombre'] . '</option>';
                                        }
                                    }
                                    ?>
                                    
                                </select>
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" class="form-control bg-white border-0 px-4" id="Marca" name="Marca" 
                                placeholder="Marca" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control bg-white border-0 px-4" id="Modelo" name="Modelo"placeholder="Modelo" 
                                 style="height: 55px;">
                            </div>
                             <div class="col-6">
                                <input type="text" class="form-control bg-white border-0 px-4" id="Color" name="Color"placeholder="Color" 
                                 style="height: 55px;">
                            </div>
                             <div class="col-6">
                                <input type="number" class="form-control bg-white border-0 px-4" id="Precio"name="Precio"placeholder="Precio"
                                 style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" id="btnRegistrarVehiculo" name="btnRegistrarVehiculo" 
                                type="submit">Registrar Vehiculo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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