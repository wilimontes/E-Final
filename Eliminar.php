<?php
require 'data/database.php';
$id = $_GET['id'];
$eliminar = "DELETE FROM departamentos WHERE id = '$id'";
$elimina = $db->query($eliminar);
header("location:Departamentos.php");
$conecta->close();
?>