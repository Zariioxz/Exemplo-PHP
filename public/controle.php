<?php
$mensagem = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$mensagem = "Olá ";
    if($_POST['periodo'] == 'm') {
        $mensagem = 'Bom dia ';

    } else if ($_POST['periodo'] == 't') {
        $mensagem = 'Boa tarde ';
        
    } else {
        $mensagem = 'Boa noite ';
    }
    $mensagem .= $_POST['nome'];
    // $mensagem = $mensagem . $_POST['nome'] mesma coisa que a linha de cima.
} else {
    $mensagem = "Digite o seu nome";
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estruturas de Controle</title>
</head>
<body>
    
    <form action="controle.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" />
        <select name="periodo">
            <option value="m">Manhã</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <P><?= $mensagem ?></P>
</body>
</html>