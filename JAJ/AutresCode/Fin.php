<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Football</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" media="screen" href="global.css"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
        <center>
<?php
//Ouverture du fichier en mode Lecture
//Equipe premier
$premier=fopen("Fichier5/GangantFinal.txt","r");
$premier=fgets($premier);

//Equipe deuxieme
$deuxieme=fopen("Fichier5/PerdantFinal.txt","r");
    $deuxieme=fgets($deuxieme);

    //equipe troisieme
    $troisieme=fopen("Fichier5/GagnantPetiteFinal.txt","r");
    $troisieme=fgets($troisieme);

?>
<br/>
<br/>

<h2 id="bg" >Les resultats final du tournoi international</h2><hr>
<br><br><br><br>
<div id="tab">
<table border="5px" class="bg" >

<tr>

<td  class="text">CHAMPION <img src="./foto/trophy-2-16.ico" ></td>

<td class="text">
<?php
echo $premier;
?>
</td>

</tr>

<tr>

<td class="bg">DEUXIEME <img src="./foto/medal-16.ico" class="foto"></td>
<td>
<?php
echo $deuxieme;
?>
</td>

</tr>
<tr>
<td class="bg">TROISIEME</td>
<td>
<?php
echo $troisieme;
?>
</td>
</tr>

</table>
<br>
<div class="lance">
    <!-- //Retour sur la page principale -->
<button><a href="../index.php">Home</a></button>
    </div>
</div>
<?php
//inclure la page menbres
//Presente les membres
include 'membres.php'
?>
</center>

</body>
