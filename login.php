<?php
include_once("connexion.php");
$nom=$_POST['name'];
$pass =md5( $_POST['pass']);

$res=mysqli_query($cnx,"select * from utilisateurs where nom='".$nom."' and trim(pass)='".$pass."'");
if(mysqli_num_rows($res)>0){
    header("Location:index2.php");
}
else{
    header("Location:index.php");

}
?>