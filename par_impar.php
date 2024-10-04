<?php
    $num=$_GET["num"];
    $par=par_impar($num);
    $cuadrado=$num*$num;
    if($par){
        header("Location:par.php?cuadrado=$cuadrado&par=$num"); 
    }else{
        header("Location:impar.php?cuadrado=$cuadrado&impar=$num");
    }

    function par_impar($num){
        if ($num%2==0) {
            return true;
        }else{
            return false;
        }
    }
?>