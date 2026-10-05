<?php
echo '<link rel="stylesheet" href="style.css">';
echo '<title> Alteração de Informações </title>';
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'empresa');
$cpf = $_POST['cpf'];

$stmt = $conexao->prepare("SELECT * FROM Funcionarios WHERE cpf = ?");
$stmt->bind_param("s", $cpf);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $Funcionarios = $resultado->fetch_assoc();
?>
<form action="salvar-alteracao.php" method="POST">
<h1> Altere os campos que necessitar </h1>

  <label>Nome Atual (Altere aqui): </label> <input type="text" name="nome" value="<?php echo htmlspecialchars($Funcionarios['nome']); ?>" required><br><br>

  <label>Matricula Atual (Altere aqui):</label> <input type="text" name="matricula" value="<?php echo htmlspecialchars($Funcionarios['matricula']); ?>" required> <br><br>

  <label>Função Atual (Altere aqui):</label> <input type="text" name="funcao" value="<?php echo htmlspecialchars($Funcionarios['funcao']); ?>" required> <br><br>

<label>Departamento Atual (Altere aqui):</label> <input type="text" name="departamento" value="<?php echo htmlspecialchars($Funcionarios['departamento']); ?>" required> <br><br>

<label>Idade Atual (Altere aqui):</label> <input type="text" name="idade" value="<?php echo htmlspecialchars($Funcionarios['idade']); ?>" required> <br> <br>

<label>CPF Atual (não pode ser alterado):</label> <input type="text" name="cpf" value="<?php echo htmlspecialchars($Funcionarios['cpf']); ?>" readonly required> <br> <br>

<label>RG Atual (Altere aqui):</label> <input type="text" name="rg" value="<?php echo htmlspecialchars($Funcionarios['rg']); ?>" required> <br> <br>

<label>Salário Atual (Altere aqui):</label> <input type="text" name="salario" value="<?php echo htmlspecialchars($Funcionarios['salario']); ?>" required> <br><br>

<label>Endereço Atual (Altere aqui):</label> <input type="text" name="endereco" value="<?php echo htmlspecialchars($Funcionarios['endereco']); ?>" required> <br><br>

<label>UF Atual (Altere aqui):</label> <input type="text" name="uf" value="<?php echo htmlspecialchars($Funcionarios['uf']); ?>" required> <br><br>

<label>País Atual (Altere aqui):</label> <input type="text" name="pais" value="<?php echo htmlspecialchars($Funcionarios['pais']); ?>" required> <br><br>
  

  <button type="submit">Salvar Alterações</button>
</form>
<?php } else { echo "Funcionário não localizado."; } ?>
