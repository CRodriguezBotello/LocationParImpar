<?php
    $num=$_GET["num"];
    par_impar($num);
    if($par){
        header("Location:par.php?cuadrado=$cuadrado&par=$num"); 
    }elseif ($impar) {
        header("Location:impar.php?cuadrado=$cuadrado&impar=$num");
    }

    function par_impar($num){
        $cuadrado=$num*$num;
        if ($num%2==0) {
            $par=array(0,0,"0");
            return $par($num, $cuadrado, "par");
        }else{
            $impar=array(0,0,"0");
            return $impar($num, $cuadrado, "impar");
        }
    }
?>