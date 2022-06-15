 <form method="POST">
  <fieldset>
    <label>Nome:
      <input type="text" name="nome"><br>
    </label>
    <label>Sobrenome:
      <input type="text" name="sobrenome"><br>
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
     $sql = "INSERT INTO registro (nome, sobrenome, livro, autor, criado_em) VALUES ('".$_POST['nome']."', '".$_POST['sobrenome']."', '".$_POST['livro']."', '".$_POST['autor']."', '".$_POST['criado_em']."')";
	  $db->exec($sql);
   }?>
</form>
