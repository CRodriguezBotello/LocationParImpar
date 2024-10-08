<?php
    $num=$_GET["num"];
    $numero=$num;
    $par=par_impar($num);
    // $cuadrado=$num*$num;
    if($par){
        header("Location:par.php?numero=$numero&cuadrado=$num"); 
    }else{
        header("Location:impar.php?numero=$numero&cuadrado=$num");
    }
            /* La funcion par_impar averigua el resto del numero que entre en la funcion y 
            devuelve true o false segun sea par o impar*/
    function par_impar(&$num){
        $num=$num*$num;
        if ($num%2==0) {
            return true;
        }else{
            return false;
        }
    }
?>