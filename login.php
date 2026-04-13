<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Login</title>
</head>
<body>
<div>
    <?php
    $msg = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $senha = $_POST["senha"];
            $arqUsuario = fopen("usuarios.txt", "r") or die("Arquivo nao encontrado");
            while(!feof($arqUsuario)){
                $linha = fgets($arqUsuario);
                $colunaDados = explode(";", $linha);
                 $msg = "Usuario nao encontrado";
                if($colunaDados[2] == $senha && $colunaDados[1] == $_POST["email"] && $colunaDados[0] == $_POST["nome"]){
                    echo("Bem Vindo, $colunaDados[0]!<br><a href='menu.html'>Ir para o menu</a>");
                    break;
                }
            }
            fclose($arqUsuario);
        }
    ?>
    <form action="login.php" method="post">
    
        <h5>Login</h5>
        <label for="iname">Nome</label>
        <input type="text" name="nome" id="iname">
        <br><br>
        <label for="iemail">Email</label>
        <input type="email" name="email" id="iemail">
        <br><br>
        <label for="ipassword">Senha</label>
        <input type="password" name="senha" id="ipassword">
        <br><br>
        <input type="submit" value="Login">
        <br>
        <?php echo($msg); ?> 
</form>
</div>
</body>
</html>