<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Model/VendedoresModel.php';

    if(isset($_POST["btnRegistrarVendedor"]))
    {
        $cedula = $_POST["Cedula"];
        $nombre = $_POST["Nombre"];
        $correoElectronico = $_POST["CorreoElectronico"];

        $resultado = RegistrarVendedorModel($cedula,$nombre,$correoElectronico);

        if($resultado)
        {   
            header("Location: ../../View/Principal/Vendedores.php");
            exit;
        }

        $_POST["Mensaje"] = "No se ha podido crear la cuenta solicitada";
        
    }

?>