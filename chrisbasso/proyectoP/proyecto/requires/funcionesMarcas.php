<?php

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                        FROM marcas";
        $resultado = $link->query($sql);
        $listadoMarcas = $resultado->fetchAll();
         return $listadoMarcas;
    }
    function verMarcaPorId($idMarca)
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                        FROM marcas
                        WHERE idMarca=".$idMarca;
        $resultado = $link->query($sql);
        $detalleMarca = $resultado->fetch();
        return $detalleMarca;
    }
    function agregarMarca()
    {
        $link = conectar();
        $mkNombre = $_POST['mkNombre'];
        $sql = "INSERT INTO marcas 
                        ( mkNombre )
                      VALUES 
                        ( '" . $mkNombre . "' )";

        if ($resultado = $link->query($sql))
        {
            return $mkNombre;
        }
        return false;
    }

    function editarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "UPDATE marcas 
                        SET mkNombre = '".$mkNombre."'
                        WHERE idMarca = ".$idMarca;
        $resultado = $link->query($sql); // ejecuta la modificación
        return $chequeo = $resultado->rowCount();
    }
    function eliminarMarca($idMarca)
    {
        $link = conectar();
        $sql = "DELETE FROM marcas WHERE idMarca = ".$idMarca;
        $resultado = $link->query($sql); // ejecuta la modificación
        return $chequeo = $resultado->rowCount();

    }