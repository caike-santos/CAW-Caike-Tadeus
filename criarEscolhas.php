
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>modelo</title>
</head>
<body>
<div>
    <?php 
        $msg = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $pergunta = $_POST["pergunta"];
        $resposta1 = $_POST["resposta1"];
        $resposta2 = $_POST["resposta2"];
        $resposta3 = $_POST["resposta3"];
        $resposta4 = $_POST["resposta4"];
        $respostaCorreta = $_POST["respostaCorreta"];
    echo("Pergunta: $pergunta; Resposta 1: $resposta1; Resposta 2: $resposta2; Resposta 3: $resposta3; Resposta 4: $resposta4; Resposta Correta: $respostaCorreta\n");
    if(!file_exists("perguntas.txt")){
        $arqPerguntas = fopen("perguntas.txt", "w");
        $linha = "Pergunta;Resposta1;Resposta2;Resposta3;Resposta4;RespostaCorreta\n";
        fwrite($arqPerguntas, $linha);
        fclose($arqPerguntas);
    }
        $arqPerguntas = fopen("perguntas.txt", "a");
        $linha = "$pergunta;$resposta1;$resposta2;$resposta3;$resposta4;$respostaCorreta\n";
        fwrite($arqPerguntas, $linha);
        fclose($arqPerguntas);
        $msg = "Pergunta criada com sucesso";
     }
?>
    <h1>Criar Pergunta e respostas com multipla escolha</h1>

<form action="criarEscolhas.php" method="POST">
    Pergunta: <input type="text" name="pergunta" required>
    <br><br>
    Resposta 1: <input type="text" name="resposta1" required>
    <br><br>
    Resposta 2: <input type="text" name="resposta2" required>
    <br><br>
    Resposta 3: <input type="text" name="resposta3" required>
    <br><br>
    Resposta 4: <input type="text" name="resposta4" required>
    <br><br>
    Resposta Correta: <input type="text" name="respostaCorreta" required>
    <br><br>
    <input type="submit" value="Criar Pergunta">
</form>


<p><?php echo $msg ?></p>
<Button><a href="menu.html">Voltar ao Menu</a></Button>
</div>
</body>
</html>
<!DOCTYPE html>
