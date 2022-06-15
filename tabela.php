<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>sobrenome</th>
    <th>Livro</th>
    <th>Autor</th>
    <th>Data</th>
    <th>Devolvido</th>
    <th>Opções</th>
  </tr>
  <?  
      require_once 'dbconfig.php';
      require_once 'ajuda.php';
      $sql = 'SELECT * FROM registro';
      $query = $db->query($sql);
    while($row = $query->fetchArray())
    {
      echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['nome']."</td>
        <td>".$row['sobrenome']."</td>
        <td>".$row['livro']."</td>
        <td>".$row['autor']."</td>
        <td>".ExibirData($row['criado_em'])."</td>
        <td>".ExibirData($row['devolvido_em'])."</td>
        <td>
          <a href='editar.php?id=".$row['id']."'>Editar</a>
          <a href='remover.php?id=".$row['id']."'>Remover</a>
      </tr>
    ";
    }
?>
</table>
