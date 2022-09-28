<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Visualizando tarefas</title>
    </head>
        <body>
            <h3>Tarefas</h3>
            <table border="1">
                <tr>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Status</th>
                </tr>
                <?php
                    session_start();
                    //session_destroy();
                    if(isset($_SESSION['lista'])){
                    //Existe uma variavel na session com nome "lista"?
                        $vetor_p = $_SESSION['lista'];
                        foreach ($vetor_p as $linha => $cel) {
                            
                        
                ?>
                <tr>
                    <td><?=$cel['tarefa']?></td>
                    <td><?=$cel['data']?></td>
                    <td><?=$cel['status']?></td>
                </tr>
                <?php
                        }//foreach
                    }//if - isset
                    else{
                        echo '<tr>';
                        echo '<td colspan="3" style="text-align: center">Nenhum registro.</td>';
                        echo '</tr>';
                    }
                ?>

            </table><br>
            <a href="index.php">Voltar</a>
        </body>
</html>

