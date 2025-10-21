<?php

    function ShowHeader()
    {
        echo '
        <div class="container-fluid bg-dark px-0">
        <div class="row gx-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="col-lg-3 bg-primary d-none d-lg-block">
                <a href="../Principal/Principal.php"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-white text-uppercase">Cars CR</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-dark p-3 p-lg-0 px-lg-5" style="background: #111111;">
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="../Registro/Vendedores.php" class="nav-item nav-link">Registrar Vendedores</a>
                            <a href="../Registro/Vehiculos.php" class="nav-item nav-link">Registrar Vehiculos</a>
                            <a href="../Consulta/Consultas.php" class="nav-item nav-link">Consultar Vehiculos</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>';
    }

    function ShowFooter()
    {
      echo '
        <div class="container-fluid bg-dark text-secondary px-5">
        <div class="row gx-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h3 class="text-light mb-4">Sobre Nosotros</h3>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Guacima, Alajuela, Costa Rica</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+506 1111 1111</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Cars CR</a>. All
                        Rights Reserved. Distributed by <a class="text-light fw-bold"
                            href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" target="_blank"
                            href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>';
    }

?>