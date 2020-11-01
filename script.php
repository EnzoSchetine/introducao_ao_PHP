<?php

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
    echo "O nome não pode ser vazio";
    return;
}
if(strlen($nome) < 3)
{
    echo "O nome deve conter mais de 3 caracteres";
    return;
}
if(strlen($nome) > 40)
{
    echo "O nome deve conter menos de 40 caracteres";
    return;
}
if(!is_numeric($idade))
{
    echo "Informe um número para idade";
    return;
}
if($idade < 6)
{
    echo 'Idade menor que a permitida para a competição';
}
else if ($idade <= 12)
{
    echo "O nadador ", $nome, " compete na categoria Infantil";
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
    echo "O nadador ", $nome, " compete na categoria adolescente";
}
else
{
    echo "O nadador ", $nome, " compete na categoria adulto";
}
?>
