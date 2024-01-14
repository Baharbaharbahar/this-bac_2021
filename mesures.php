<?php
$station=$_POST["station"];
// $annee=$_POST["annee"];
$saison=$_POST["saison"];
require ("connexion.php");
$conn=mysqli_connect($server,$username,$password,$bd) or die ("probleme server de base ");
$sql="select * from mesure where idstation='$station'and 'saison'='$saison';";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==1)
    echo "Mesures déja enregistrées!!";
else{
    $sql1="insert into mesures values ('$station','$saison')";
    if(mysqli_affected_rows($conn)>0){
        echo "Ajout effectué avec succés";
    }
}
?>