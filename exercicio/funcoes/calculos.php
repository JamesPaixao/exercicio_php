<?php 
    function calcula_tabuada($tabuada, $contador){
        $operacao = (integer) 0;
        for($i = 0; $i <= $contador; $i++){
            $operacao = $tabuada * $i;
            echo($tabuada." x ".$i." = ".$operacao."<br>");
        }
    }
?>