<?php 


function RegistrarVendedorModel($identificacion,$nombre,$correoElectronico)
    {
        try
        {
            $context = OpenConnection();

            $sentencia = "CALL RegistrarVendedor('$identificacion', '$nombre', '$correoElectronico')";
            $resultado = $context -> query($sentencia);

            CloseConnection($context);

            return $resultado;
        }
        catch(Exception $error)
        {
            SaveError($error);
            return false;
        }
    }

?>