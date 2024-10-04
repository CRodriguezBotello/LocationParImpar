<?php
    $num=$_GET["num"];
    $par=par_impar($num);
    $cuadrado=$num*$num;
    if($par){
        header("Location:par.php?cuadrado=$cuadrado&par=$num"); 
    }else{
        header("Location:impar.php?cuadrado=$cuadrado&impar=$num");
    }
            /* La funcion par_impar averigua el resto del numero que entre en la funcion y 
            devuelve true o false segun sea par o impar*/
    function par_impar($num){
        if ($num%2==0) {
            return true;
        }else{
            return false;
        }
    }
?>