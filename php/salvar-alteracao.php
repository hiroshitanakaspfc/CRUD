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
    nome = ?, 
    matricula = ?, 
    funcao = ?, 
    departamento = ?, 
    idade = ?, 
    rg = ?, 
    salario = ?, 
    endereco = ?, 
    uf = ?, 
    pais = ? 
WHERE cpf = ?";
$stmt = $conexao->prepare($sql_update);
$stmt->bind_param("sssssssssss", $novo_nome, $nova_matricula, $nova_funcao, $novo_departamento, $nova_idade, $novo_rg, $novo_salario, $novo_endereco, $novo_uf, $novo_pais, $cpf);

if ($stmt->execute()) {
    echo "<h2 style='color:#16a34a;'>Dados Atualizados com Sucesso!</h2>";
    echo "<p><strong>Cadastro Final no Banco:</strong></p>";
    echo "Novo Nome: " . htmlspecialchars($novo_nome) . "<br>";
    echo "Nova Matrícula: " . htmlspecialchars($nova_matricula) . "<br>";
    echo "Nova Função: " . htmlspecialchars($nova_funcao) . "<br>";
    echo "Novo Departamento: " . htmlspecialchars($novo_departamento) . "<br>";
    echo "Nova Idade: " . htmlspecialchars($nova_idade) . "<br>";
    echo "CPF Atualizado: " . htmlspecialchars($cpf) . "<br>";
    echo "Novo RG: " . htmlspecialchars($novo_rg) . "<br>";
    echo "Novo Salário: " . htmlspecialchars($novo_salario) . "<br>";
    echo "Novo Endereço: " . htmlspecialchars($novo_endereco) . "<br>";
    echo "Novo UF: " . htmlspecialchars($novo_uf) . "<br>";
    echo "Novo País: " . htmlspecialchars($novo_pais) . "<br>";

} else {
    echo "Erro ao atualizar: " . $stmt->error;
}
$conexao->close();
?>
