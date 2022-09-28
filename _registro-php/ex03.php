<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo 03</title>
    </head>
        <body>
            <form>
                <label>Informe um número:</label><br>
                <input name="cpN"><br>
                <label>Informe uma letra:</label><br>
                <input name="cpL"><br>
                <input type="submit" name="botao" value="Verificar"><br>
                <a href="index.php">Voltar</a>
            </form>
        </body>
</html>

<?php
    if(!empty($_GET['botao'])){
        $num = $_GET['cpN'];
        $letra = $_GET['cpL'];
        session_start();
        $_SESSION['numero'] = $num;
        $_SESSION['letra'] = $letra;
        header('Location:ex03_r.php');
    }//if
?>