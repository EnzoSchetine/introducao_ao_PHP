<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);
$nome = 'Enzo';
$idade = 19;
//var_dump($nome, $idade);
if($idade < 6)
{
    echo 'Idade menor que a permitida para a competição';
}
else if ($idade <= 12)
{
    //echo 'infantil';
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
        {
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
}
else if ($idade <= 18)
{
    echo 'adolescente';
}
else
{
    echo 'adulto';
}
?>
