<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
    removerMensagemErro();
    if (validaNome($nome) && validaIdade($idade))
    {
        if($idade < 6)
        {
            setarMensagemSucesso('Idade menor que a permitida para a competição');
            return null;
        }
        else if ($idade <= 12)
        {
            setarMensagemSucesso("O nadador ". $nome. " compete na categoria Infantil");
            return null;
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
            setarMensagemSucesso("O nadador ". $nome. " compete na categoria adolescente");
            return null;
        }
        else
        {
            setarMensagemSucesso("O nadador ". $nome. " compete na categoria adulto");
            return null;
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}