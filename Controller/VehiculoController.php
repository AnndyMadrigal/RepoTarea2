<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Model/VehiculoModel.php';

    if(isset($_POST["btnRegistrarVehiculo"]))
    {   
        $marca = $_POST["Marca"];
        $modelo = $_POST["Modelo"];
        $color = $_POST["Color"];
        $precio = $_POST["Precio"];
        $vendedor = $_POST["Vendedor"];

        $resultado = RegistrarVehiculoModel($marca,$modelo,$color,$precio,$vendedor);

        if($resultado)
        {   
            header("Location: ../../View/Principal/Vehiculos.php");
            exit;
        }

        $_POST["Mensaje"] = "No se ha podido registrar el vehiculo";
        
    }

?>