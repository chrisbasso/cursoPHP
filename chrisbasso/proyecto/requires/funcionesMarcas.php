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
    // function verMarcaPorId($id)
    // function agregarMarca()