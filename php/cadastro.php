<?php


$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$funcao = $_POST['funcao'];
$departamento = $_POST['departamento'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$rg= $_POST['rg'];
$salario = $_POST['salario'];
$endereco = $_POST['endereco'];
$uf = $_POST['uf'];
$pais = $_POST['pais'];


$servidor = 'localhost';
$usuario = 'root';
$senha = 'Home@spSENAI2025!';
$banco = 'empresa';


$conexao = new mysqli($servidor, $usuario, $senha, $banco);


if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

$sql = "INSERT INTO Funcionarios (nome, matricula , funcao, departamento, idade, cpf, rg, salario, endereco, uf, pais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("sssssssssss", $nome, $matricula, $funcao, $departamento, $idade, $cpf, $rg, $salario, $endereco, $uf, $pais);

if ($stmt->execute()) {

    echo "<h2>Funcionário cadastrado com sucesso!</h2>";
    echo "<p>Dados registrados:</p>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Matricula: " . htmlspecialchars($matricula) . "<br>";
    echo "Função: " . htmlspecialchars($funcao) . "<br>";
    echo "Departamento: " . htmlspecialchars($departamento) . "<br>";
    echo "Idade: " . htmlspecialchars($idade) . "<br>";
    echo "CPF: " . htmlspecialchars($cpf) . "<br>";
    echo "RG: " . htmlspecialchars($rg) . "<br>";
    echo "Salário: " . htmlspecialchars($salario) . "<br>";
    echo "Endereço: " . htmlspecialchars($endereco) . "<br>";
    echo "UF: " . htmlspecialchars($uf) . "<br>";
    echo "País: " . htmlspecialchars($pais) . "<br>";
    

} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}


$conexao->close();
?>
