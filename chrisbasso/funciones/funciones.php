<?php
    //declaración
    function negrita($frase)
    {
         $resultado = '<b>'.$frase.'</b><br>';
         echo $resultado;
        //return $resultado;
    }
    //negrita('test');
    function multi($n1, $n2)
    {
        $resultado = $n1 * $n2;
        echo $resultado;
    }
    //multi(4,2);
    negrita(multi(2, 3));
?>



