<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="POST">
        <label for="in1">Número 1:</label>
        <input type="number" name="n1" id="in1">
        <br>
        <label for="in2">Número 2:</label>
        <input type="number" name="n2" id="in2">
        <br>
        <input type="submit" value="somar" name="sub">
        <input type="submit" value="subtrair" name="sub">
        <input type="submit" value="multiplicar" name="sub">
        <input type="submit" value="dividir" name="sub">
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $n1 = filter_input(INPUT_POST, "n1") ?? 0;
        $n2 = filter_input(INPUT_POST, "n2") ?? 0;
        $sub = filter_input(INPUT_POST, "sub") ?? "in";
        $resultado = 0;
        if($sub == "in"){
            echo "Erro";
        }elseif($sub == "somar"){
            $resultado = $n1 + $n2;   
        }elseif($sub == "subtrair"){
            $resultado = $n1 - $n2;
        }elseif($sub == "multiplicar"){
            $resultado = $n1 * $n2;
        }elseif($sub == "dividir"){
            $resultado = $n1 / $n2;
        }

        echo "Resultado = $resultado";

        }elseif($_SERVER['REQUEST_METHOD'] == 'GET'){ 
            $n1 = filter_input(INPUT_GET, "n1") ?? 0;
        $n2 = filter_input(INPUT_GET, "n2") ?? 0;
        $sub = filter_input(INPUT_GET, "sub") ?? "in";
        $resultado = 0;
        
        if($sub == "in"){
            echo "Erro";
        }elseif($sub == "somar"){
            $resultado = $n1 + $n2;   
        }elseif($sub == "subtrair"){
            $resultado = $n1 - $n2;
        }elseif($sub == "multiplicar"){
            $resultado = $n1 * $n2;
        }elseif($sub == "dividir"){
            $resultado = $n1 / $n2;
        }

        echo "Resultado = $resultado";
            }

     ?>
     
</body>
</html>