<?php
    include "servicos/servicoMensagemSessao.php";
    include "servicos/servicoValidacao.php";
    include "servicos/servicoCategoriaCompetidor.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <h2>Formulário para a inscrição de competidores</h2>
    <form action="script.php" method="post">
        <?php
            $mensagemDeErro = obterMensagemErro();
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
            $mensagemDeSucesso = obterMensagemSucesso();
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }
        ?>
        <p>Seu Nome: <input type="text" name="nome"></p>
        <p>Sua Idade: <input type="text" name="idade"></p>
        <p><input type="submit" value="Enviar dados do Competidor"></p>
    </form>
</body>
</html>