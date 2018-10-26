<?php
    //declaracion

/**
 * @param $num1 int
 * @param $num2 int
 * @return int
 */
    function suma( $num1, $num2 )
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }
    //echo suma(4, 5);

    function multiplicar($num1, $num2)
    {
        if( is_numeric($num1) && is_numeric($num2) ){
            $resultado = $num1 * $num2;
            return $resultado;
        }
            return 'ambos deben ser números';
    }

    echo multiplicar(4, 'hola');

    echo suma(1, multiplicar(2, 3));