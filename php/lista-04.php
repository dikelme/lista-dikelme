<?php
    $num = 0;
    //Questão 04
    $num = $_POST['num'];
    
    echo "<h1> Resultado: <h1>";
    
    if($num > 0){
        echo "<h2>O número digitado ($num) é positivo!<h2>";
    }
        elseif($num == 0){
        echo "<h2>O número digitado ($num) é nulo!<h2>";
    }
    elseif($num < 0){
        echo "<h2>O número digitado ($num) é negativo!<h2>";
    }

?>