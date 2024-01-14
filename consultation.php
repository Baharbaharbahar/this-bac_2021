<?php
// $station=$_POST["station"];
// $annee=$_POST["annee"];
// $saison=$_POST["saison"];
require("connexion.php");
$conn=mysqli_connect($server,$username,$password,$bd)or die ("probleme ");
$res=mysqli_query($conn,"select annee,temperature,pluie from mesure");
$n=mysqli_num_rows($res);


?>
<center>
    <?php echo"sation:" ?>
    <?php echo $_POST["saison"] ?>
</center>

<table border="1">
    <tr>
        <th>Saison</th>
        <th>Année</th>
        <th>Mesure enregistrée</th>
    </tr>
    <?php
    for ($i=0; $i<$n ; $i++) {
        $ligne = mysqli_fetch_row($res);
        ?>
        <tr>
            <td> <?php echo $ligne[0]?></td>
            <td> <?php echo $ligne[1]?></td>
            <td> <?php echo $ligne[2]?></td>
        </tr>
        <?php
    }
    ?>

</table>
