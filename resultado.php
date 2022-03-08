<?php 
session_start();

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $acao = $_GET['operacao'];

    if($acao == 'soma'){
        $resultado = $num1 + $num2;
        echo $num1.'+'.$num2.'='.$resultado;
    } if($acao == 'subtracao'){
        $resultado = $num1 - $num2;
        echo $num1.'-'.$num2.'='.$resultado;
    } if($acao == 'multiplicacao'){
        $resultado = $num1 * $num2;
        echo $num1.'*'.$num2.'='.$resultado;
    } if($acao == 'divisao'){
        $resultado = $num1 / $num2;
        echo $num1.'/'.$num2.'='.$resultado;
    }
?>