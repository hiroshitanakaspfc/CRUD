<?php
echo '<link rel="stylesheet" href="style.css">';
echo "<h2>Consultar Funcionários</h2>";
echo "<form method='GET' action='consult-dados.php'>";
echo "  <label>Digite o Nome:</label> ";
echo "  <input type='text' name='nome' value=''> ";
echo "  <input type='submit' value='Buscar'>";
echo "</form><hr>";
if (isset($_GET['nome'])) {
    $busca = $_GET['nome'];
    $conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'empresa');
    $sql = "SELECT * FROM Funcionarios WHERE nome LIKE '%$busca%'";
    $resultado = $conexao->query($sql);
    echo "<h3>Resultados Encontrados:</h3>";
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "ID: " . $linha['idFunc'] . 
            " - Nome: " . $linha['nome'] . 
            " - Matricula: " . $linha['matricula'] . 
            " - Função: " . $linha['funcao'] .
            " - Departamento: " . $linha['departamento'] .
            " - Idade: " . $linha['idade']   .
            " - CPF: " . $linha['cpf']   .
            " - RG: " . $linha['rg']   .
            " - Salário: " . $linha['salario']   .
            " - UF: " . $linha['uf']   .
            " - País: " . $linha['pais']   .
  
            "<br>";
        }
    } else {
        echo "Nenhum funcionario encontrado.";
    }
    $conexao->close();
    
}
?>
