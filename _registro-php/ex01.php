<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Template</title>
    </head>
        <body>
            <form>
                <fieldset style="width: 400px; margin: 0 auto">
                    <h3 style="text-align: center">Tarefas</h3>
                    <label>Descrição:</label>
                    <input name="cpDes"><br>
                    <label>Data:</label>
                    <input type="date" name="cpData"><br>
                    <input type="submit" value="Cadastrar" name="botao"><br>
                    <a href="index.php">Voltar</a>
                </fieldset>
            </form>
        </body>
</html>

<?php
    if(!empty($_GET['botao'])){
        session_start();
        $vetor_p = array();
        $reg = [
            'tarefa' => $_GET['cpDes'],
            'data' => $_GET['cpData'],
            'status' => 'Pendente'
        ];
        if(isset($_SESSION['lista'])){
        //Existe alguma variável na session com o nome "lista"?
            $vetor_p = $_SESSION['lista'];
        //Atribua os registros da session (lista) para a variável (vetor_p)
            array_push($vetor_p,$reg);
        //Adicione o vetor heterogênio (reg) no vetor_p
            $_SESSION['lista'] = $vetor_p;
        //Adicione o vetor_p na session (lista)
        }//if - isset
        else{
        //Não existe uma variável na session com nome "lista" (primeiro cadastro)
            array_push($vetor_p,$reg);
            $_SESSION['lista'] = $vetor_p;
        }
    
        header('Location:sucesso.php');
    }//if - empty


?>