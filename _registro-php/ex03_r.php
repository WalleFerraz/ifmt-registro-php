<?php
    session_start();
    $a = $_SESSION['letra'];
    $b = $_SESSION['numero'];
    $pos = 0;
    //Relacionar a posição da letra com o número (a-1; b-2; c-3)
    if($a == 'a')
        $pos = 1;
    else if($a == 'b')
        $pos = 2;
    else if($a == 'c')
        $pos = 3;
    $div = false;
    //Verificar se o número digitado é divisível pela posição da letra
    if($b%$pos == 0)
        $div = true;
    else
        $div = false;
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado numero e letra</title>
    </head>
        <body>
            <h3>Resultado</h3>
            <?php
                if($div == false)
                    echo '<label>O número '.$b.' não divide pelo número da letra ' .$a.'.</label><br>';
                else 
                    echo '<label>O número '.$b.' divide pelo número da letra ' .$a.'.</label><br>';

            ?>
            
            
            <a href="ex03.php">Voltar</a>
        </body>
</html>