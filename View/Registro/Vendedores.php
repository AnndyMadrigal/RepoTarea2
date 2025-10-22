<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutExterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Controller/VendedoresController.php';

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
            <h1 class="display-1 text-secondary text-center mb-0">Registrate como Vendedor</h1>
        </div>
    </div>
    <!-- Hero End -->




    <div class="row g-5  justify-content-center">
        <div class="col-lg-6">
            <div class="bg-light rounded h-100 p-5">

                <?php
                if (isset($_POST["Mensaje"])) {
                    echo '<div class="alert alert-primary text-center">' . $_POST["Mensaje"] . '</div>';
                }
                ?>
                <form id="formRegistroVendedor" class="mb-3" action="" method="POST">
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" class="form-control bg-white border-0 px-4" id="Cedula" name="Cedula"
                                placeholder="Cedula" onkeyup="ConsultarNombre();" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control bg-white border-0 px-4" id="Nombre" name="Nombre" placeholder="Nombre"
                                readOnly="true" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control bg-white border-0 px-4" id="CorreoElectronico" name="CorreoElectronico"
                                placeholder="CorreoElectronico" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" id="btnSweetalert" name="btnRegistrarVendedor"
                                type="submit">Registrar Vendedor</button>
                            <script>
                                document.getElementById('btnSweetalert').addEventListener('click', function() {
                                    Swal.fire({
                                        title: "Se a registrado correctamente!",
                                        icon: "success",
                                        showConfirmButton: false,
                                        draggable: true
                                    });
                                })
                            </script>
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