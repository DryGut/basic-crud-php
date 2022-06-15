
<form method="POST">
  <fieldset>
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <label>Devolvido:
      <input type="date" name="devolvido_em" value="<?=$row['devolvido_em'];?>">
    </label>
    <input type="submit" name="atualizar" value="atualizar">
    <a href="index.php">Back</a>
  </fieldset>
</form>
<?
  require_once 'dbconfig.php';
  $sql = "SELECT id FROM registro WHERE id = '".$_GET['id']."'";
  $query = $db->query($sql);
  $row = $query->fetchArray();
if(isset($_POST['atualizar'])){
  $devolvido_em = $_POST['devolvido_em'];
 
	$sql = "UPDATE registro SET devolvido_em = '$devolvido_em' WHERE id = '".$_GET['id']."'";
	$db->exec($sql);
}
?>
