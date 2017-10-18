<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Qual o mês do ano</title>
    </head>
    <body>
Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5 
        <hr><br/><br/><br/>
    </body>

<form action="soma.php" method="get">
    <style>
    div#somasub {
    text-align: center;
	width: 190px;
	background-color: grey;
	box-shadow: 0px 0px 10px black;
	padding: 10px;
    }        
</style>
    <div id="somasub">
        <h1>Vamos Calcular!</h1>
            <h3>Primeiro número: 
                <input name="num1" type="int" /></h3> 
            <h3>Segundo número: 
                <input name="num2" type="int" /></h3> 
        
        <input type="submit" value="Ok"/>

<?php
        $a = @$_REQUEST["num1"];
		$b = @$_REQUEST["num2"];
        $soma = $a + $b;
        if ($soma > 20){
            $total = $soma + 8;
        } else{
            $total = $soma - 5;
        }
        print $total;
          
?>
            </div>
</form>
</html>