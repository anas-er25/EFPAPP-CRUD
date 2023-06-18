<?php
require_once("connexion.php");
$nom = $_POST['username'];
$pass = md5($_POST['password']);

$req=mysqli_query($cnx, "insert into utilisateurs (nom,pass) values('".$nom."','".$pass."');");
header("location:index.php");
?>