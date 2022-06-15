<?php
include 'dbconfig.php';
     
$sql = "DELETE FROM registro WHERE id = '".$_GET['id']."'";
$db->query($sql);
     
header('location: index.php');
?>