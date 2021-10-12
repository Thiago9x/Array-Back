<?php 
    require_once('functions/funcoes.php');

    if(isset($_POST['btnCalc']))
    {
        $numero1 = $_POST['txtn1'];
        $numero2 = $_POST['txtn2'];
        
        //Chamando a Função
        $resultadoPares = verificarPar($numero1, $numero2);
        
        //var_dump($resultadoPares);
        
        foreach($resultadoPares as $array)
            echo($array . " - ");
        
        echo("<br>Existem ". count($resultadoPares). " numeros Pares.");
        
//        for($cont=0; $cont<=count($resultadoPares);$cont++)
//        {
//            echo($resultadoPares[$cont]);
//        }
        
    }

?>

<html>
    <head>
        <title>
            Exemplo Par e Impar com Array
        </title>
    </head>
    <body>
        <form name="frmParImpar" method="post">
            <label>
            NumeroInicial: 
            </label>
            <input type="text" name="txtn1">
            
            <label>
            NumeroFinal: 
            </label>
            <input type="text" name="txtn2">
            
            <input type="submit" name="btnCalc" value="Calcular">
        </form>
    </body>
</html>