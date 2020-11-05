<?php
session_start();
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);
$nome = $_POST['nome'];
$idade = $_POST['idade'];
if(empty($nome))
{
    $_SESSION["mensagem-de-erro"] = "O nome não pode ser vazio";
    header("location: index.php");
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION["mensagem-de-erro"] = "O nome deve conter mais de 3 caracteres";
    header("location: index.php");
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION["mensagem-de-erro"] = "O nome deve conter menos de 40 caracteres";
    header("location: index.php");
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION["mensagem-de-erro"] = "Informe um número para idade";
    header("location: index.php");
    return;
}
if($idade < 6)
{
    $_SESSION["mensagem-de-sucesso"] = 'Idade menor que a permitida para a competição';
    header("location: index.php");
    return;
}
else if ($idade <= 12)
{
    $_SESSION["mensagem-de-sucesso"] = "O nadador ". $nome. " compete na categoria Infantil";
    header("location: index.php");
    return;
    /*for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
        {
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }*/
}
else if ($idade <= 18)
{
    $_SESSION["mensagem-de-sucesso"] = "O nadador ". $nome. " compete na categoria adolescente";
    header("location: index.php");
    return;
}
else
{
    $_SESSION["mensagem-de-sucesso"] = "O nadador ". $nome. " compete na categoria adulto";
    header("location: index.php");
    return;
}
?>
