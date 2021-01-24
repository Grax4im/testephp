<?php 

function carregaClasses($classe)
{
    include_once "classes/{$classe}.php";
}

spl_autoload_register("carregaClasses");


//O arquivo que irá executar tudo deverá mostrar na tela o nome, telefone, nivel e data_cadastro 
// após todo o procedimento de preencherDados() e cadastro() ser realizado.
$usuario = new Usuario;
echo $usuario->cadastrar();
$usuario->preencherDados('Robert', 989191727, 42);
$usuario->cadastrar();

echo 'Nome: ' . $usuario->getNome();
echo '<br>';
echo 'Telefone: ' . $usuario->getTelefone();
echo '<br>';
echo 'Nivel: ' . $usuario->permissao->getNivel();
echo '<br>';
echo 'Data de Cadastro: ' . $usuario->getDataCadastro(); 

?>