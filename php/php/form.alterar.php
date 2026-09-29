<?php
echo '<link rel="stylesheet" href="style.css">';
$conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'empresa');
$cpf = $_POST['cpf'];

$sql = "SELECT * FROM Funcionarios WHERE cpf = '$cpf'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $Funcionarios = $resultado->fetch_assoc();
?>
<form action="salvar-alteracao.php" method="POST">
    <title> Alteração de Informações </title>
<h1> Altere os campos que necessitar </h1>
  <label> CPF do Funcionário </label> <input type="text" name="cpf" value="<?php echo $Funcionarios['cpf']; ?>"><br><br>

  <label>Nome Atual (Altere aqui): </label> <input type="text" name="nome" value="<?php echo $Funcionarios['nome']; ?>" required><br><br>

  <label>Matricula Atual (Altere aqui):</label> <input type="text" name="matricula" value="<?php echo $Funcionarios['matricula']; ?>" required> <br><br>

  <label>Nome Atual (Altere aqui):</label> <input type="text" name="funcao" value="<?php echo $Funcionarios['funcao']; ?>" required> <br><br>

<label>Departamento Atual (Altere aqui):</label> <input type="text" name="departamento" value="<?php echo $Funcionarios['departamento']; ?>" required> <br><br>

<label>Idade Atual (Altere aqui):</label> <input type="text" name="idade" value="<?php echo $Funcionarios['idade']; ?>" required> <br> <br>

<label>CPF Atual (Altere aqui):</label> <input type="text" name="cpf" value="<?php echo $Funcionarios['cpf']; ?>" required> <br> <br>

<label>RG Atual (Altere aqui):</label> <input type="text" name="rg" value="<?php echo $Funcionarios['rg']; ?>" required> <br> <br>

<label>Salário Atual (Altere aqui):</label> <input type="text" name="salario" value="<?php echo $Funcionarios['salario']; ?>" required> <br><br>

<label>Endereço Atual (Altere aqui):</label> <input type="text" name="endereco" value="<?php echo $Funcionarios['endereco']; ?>" required> <br><br>

<label>UF Atual (Altere aqui):</label> <input type="text" name="uf" value="<?php echo $Funcionarios['uf']; ?>" required> <br><br>

<label>País Atual (Altere aqui):</label> <input type="text" name="pais" value="<?php echo $Funcionarios['pais']; ?>" required> <br><br>
  

  <button type="submit">Salvar Alterações</button>
</form>
<?php } else { echo "Funcionário não localizado."; } ?>
