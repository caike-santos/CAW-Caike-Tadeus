
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
        $resposta = $_POST["resposta"];
    echo("Pergunta: $pergunta; Resposta: $resposta\n");
    if(!file_exists("perguntas.txt")){
        $arqPerguntas = fopen("perguntas.txt", "w");
        $linha = "Pergunta;Resposta\n";
        fwrite($arqPerguntas, $linha);
        fclose($arqPerguntas);
    }
        $arqPerguntas = fopen("perguntas.txt", "a");
        $linha = "$pergunta;$resposta\n";
        fwrite($arqPerguntas, $linha);
        fclose($arqPerguntas);
        $msg = "Pergunta criada com sucesso";
     }
?>
    <h1>Criar Nova Pergunta</h1>

<form action="criarTexto.php" method="POST">
    Pergunta: <input type="text" name="pergunta" required>
    <br><br>
    Resposta: <input type="text" name="resposta" required>
    <br><br>
    <input type="submit" value="Criar Pergunta">
</form>

<p><?php echo $msg ?></p>
<Button><a href="menu.html">Voltar ao Menu</a></Button>
</div>
</body>
</html>
<!DOCTYPE html>
