<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Model/UtilesModel.php';

function RegistrarVehiculoModel($marca, $modelo, $color, $precio, $vendedor)
{
    try {
        $context = OpenConnection();

        $sentencia = "CALL RegistrarVehiculo('$marca', '$modelo', '$color', '$precio', '$vendedor')";
        $resultado = $context->query($sentencia);

        CloseConnection($context);

        return $resultado;
    } catch (Exception $error) {
        SaveError($error);
        return false;
    }
}


function ConsultarVendedoresModel()
{
    try {
        $context = OpenConnection();
        $sentencia = "CALL ConsultarVendedores()";
        $resultado = $context->query($sentencia);
        CloseConnection($context);
        return $resultado;
    } catch (Exception $error) {
        SaveError($error);
        return null;
    }
}
