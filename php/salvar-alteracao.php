<?php
echo '<link rel="stylesheet" href="style.css">';
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'empresa');

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$cpf = $_POST['cpf'];
$novo_nome = $_POST['nome'];
$nova_matricula = $_POST['matricula'];
$nova_funcao = $_POST['funcao'];
$novo_departamento = $_POST['departamento'];
$nova_idade = $_POST['idade'];
$novo_rg = $_POST['rg'];
$novo_salario = $_POST['salario'];
$novo_endereco = $_POST['endereco'];
$novo_uf = $_POST['uf'];
$novo_pais = $_POST['pais'];

$sql_update = "UPDATE Funcionarios SET 
    nome = '$novo_nome', 
    matricula = '$nova_matricula', 
    funcao = '$nova_funcao', 
    departamento = '$novo_departamento', 
    idade = '$nova_idade', 
    rg = '$novo_rg', 
    salario = '$novo_salario', 
    endereco = '$novo_endereco', 
    uf = '$novo_uf', 
    pais = '$novo_pais' 
WHERE cpf = '$cpf'";

if ($conexao->query($sql_update) === TRUE) {
    echo "<h2 style='color:#16a34a;'>Dados Atualizados com Sucesso!</h2>";
    echo "<p><strong>Cadastro Final no Banco:</strong></p>";
    echo "Novo Nome: " . $novo_nome . "<br>";
    echo "Nova Matrícula: " . $nova_matricula . "<br>";
    echo "Nova Função: " . $nova_funcao . "<br>";
    echo "Novo Departamento: " . $novo_departamento . "<br>";
    echo "Nova Idade: " . $nova_idade . "<br>";
    echo "CPF Atualizado: " . $cpf . "<br>";
    echo "Novo RG: " . $novo_rg . "<br>";
    echo "Novo Salário: " . $novo_salario . "<br>";
    echo "Novo Endereço: " . $novo_endereco . "<br>";
    echo "Novo UF: " . $novo_uf . "<br>";
    echo "Novo País: " . $novo_pais . "<br>";

} else {
    echo "Erro ao atualizar: " . $conexao->error;
}
$conexao->close();
?>
