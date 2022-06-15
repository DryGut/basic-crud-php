 <form method="POST">
  <fieldset>
    <label>Nome:
      <input type="text" name="nome"><br>
    </label>
    <label>Prontuario:
      <input type="text" name="prontuario"><br>
    </label>
    <label>Livro:
      <input type="text" name="livro"><br>
    </label>
    <label>Autor:
      <input type="text" name="autor"><br>
    </label>
    <label>Data:
      <input type="date" name="criado_em">
    </label>
    <input type="submit" name="cadastrar" value="Cadastrar">
  </fieldset>
   <? if(isset($_POST['cadastrar'])){
     require_once 'dbconfig.php';
     $sql = "INSERT INTO registro (nome, prontuario, livro, autor, criado_em) VALUES ('".$_POST['nome']."', '".$_POST['prontuario']."', '".$_POST['livro']."', '".$_POST['autor']."', '".$_POST['criado_em']."')";
	  $db->exec($sql);
   }?>
</form>