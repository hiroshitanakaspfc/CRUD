<?php
echo '<link rel="stylesheet" href="style.css">';
echo "<h2>Consultar Funcionários</h2>";
echo "<form method='GET' action='consult-dados.php'>";
echo "  <label>Digite o Nome:</label> ";
echo "  <input type='text' name='nome' value=''> ";
echo "  <input type='submit' value='Buscar'>";
echo "</form><hr>";
if (isset($_GET['nome'])) {
    $busca = "%" . $_GET['nome'] . "%";
    $conexao = new mysqli('localhost', 'root', 'Home@spSENAI2025!', 'empresa');
    $stmt = $conexao->prepare("SELECT * FROM Funcionarios WHERE nome LIKE ?");
    $stmt->bind_param("s", $busca);
    $stmt->execute();
    $resultado = $stmt->get_result();
    echo "<h3>Resultados Encontrados:</h3>";
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "ID: " . htmlspecialchars($linha['idFunc']) . 
            " - Nome: " . htmlspecialchars($linha['nome']) . 
            " - Matricula: " . htmlspecialchars($linha['matricula']) . 
            " - Função: " . htmlspecialchars($linha['funcao']) .
            " - Departamento: " . htmlspecialchars($linha['departamento']) .
            " - Idade: " . htmlspecialchars($linha['idade'])   .
            " - CPF: " . htmlspecialchars($linha['cpf'])   .
            " - RG: " . htmlspecialchars($linha['rg'])   .
            " - Salário: " . htmlspecialchars($linha['salario'])   .
            " - UF: " . htmlspecialchars($linha['uf'])   .
            " - País: " . htmlspecialchars($linha['pais'])   .
  
            "<br>";
        }
    } else {
        echo "Nenhum funcionario encontrado.";
    }
    $conexao->close();
    
}
?>
