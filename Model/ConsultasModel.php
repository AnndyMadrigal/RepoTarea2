<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Model/UtilesModel.php';

function ConsultarVehiculosModel()
{
    try {
        $context = OpenConnection();
        $sentencia = "CALL ConsultarVehiculos()";
        $resultado = $context->query($sentencia);
        CloseConnection($context);
        return $resultado;
    } catch (Exception $error) {
        SaveError($error);
        return null;
    }
}

?>