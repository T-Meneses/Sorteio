<!DOCTYPE html>
<html>
    <header>

<title>Sorteio</title>

    </header>
    <body>
        <h1>Sorteio do premio</h1>
<?php
echo"<br>";
$numero = 1;
switch($numero){
    case 1:
        $mensagem = "Uma Bicicleta";
        break;
    case 2:
        $mensagem = "20 Mil Reais em barras de ouro";
    break;  
    case 3:
        $mensagem = "Uma Casa";
    break;  
    case 4:
        $mensagem = "Um conjunto de panelas";
    break;  
    case 5:
        $mensagem =  "Um carro zero";
    break;  
    default:
        $mensagem = "Nada, Infelizmente!";  
        echo"<br>";
        echo"<br>";
echo "Parabéns o seu premio foi: $mensagem";
}
?>
</body>


</html>