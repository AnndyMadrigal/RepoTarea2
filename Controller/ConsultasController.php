<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/Model/ConsultasModel.php';

    function ConsultarProductos()
    {
        $resultado = ConsultarVehiculosModel();

        if($resultado && $resultado -> num_rows > 0)
        {
            //Leer la información del resultado
            return $resultado;
        }
    }

?>