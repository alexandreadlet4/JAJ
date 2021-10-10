<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Football</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" media="screen" href="global.css"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
       <div class="sidebar">
           <div class="logo_content"> 
               <div class="logo">
                <i><img src="foto/mini-32.ico"/></i>
                 <div class="logo_name">J.A.J's Football</div>

               </div>

               <i id="btn"><img src="foto/menu-4-16.ico"/></i>

           </div>

           <ul class="nav_list">
            <li>
                <a href="#"> 
                    <i class="search"><img src="foto/search-13-16.ico"/></i>
                    <input type="text" name="recherche" placeholder="Search..">
                 </a>

                <span class="tooltip">Recherche</span>
            </li>

               <li>
                   <a href="../index.php"> 
                       <i><img src="foto/home-7-16 (1).ico"/></i>
                       <span class="links_name">Home</span> 
                    </a>

                   <span class="tooltip">Home</span>
               </li>

               <li>
                <a href="tirage.php"> 
                    <i><img src="foto/play-16.ico"/></i>
                     <span class="links_name">Tirage</span> 
                </a>

                <span class="tooltip">Tirage</span>
            </li>

            <li>
                <a href="#"> 
                    <i><img src="foto/soccer-2-16 (1).ico"/></i>
                    <span class="links_name">Score</span> 
                </a>

                <span class="tooltip">Gestion score</span>
            </li>

            <li>
                <a href="#"> 
                    <i><img src="foto/calendar-7-16.ico"/></i> 
                    <span class="links_name">Classement</span> 
            </a>

                <span class="tooltip">Classement</span>
            </li>

            <li>
                <a href="#">
                     <i>1/2</i> 
                     <span class="links_name">Demi final</span> 
                </a>

                <span class="tooltip">Demi final</span>
            </li>

            <li>
                <a href="#">
                    <i><img src="foto/medal-16.ico"/></i> 
                     <span class="links_name">Petite Final</span>
                </a>

                <span class="tooltip">Petite Final</span>
            </li>

            <li>
                <a href="#">
                    <i><img src="foto/trophy-2-16.ico"/></i>
                     <span class="links_name">Final</span>
                </a>

                <span class="tooltip">Final</span>
            </li>

            <li>
                <a href="#">
                    <i><img src="foto/text-file-4-16 (1).png"/></i>
                     <span class="links_name">Document</span>
                </a>
                <span class="tooltip">Document</span>
            </li>
           </ul>
    </div>        
    
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".search");

        btn.onclick = function(){
            sidebar.classList.toggle("activer");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("activer");
        }
    </script>
       
 
<article>
<?php
//Tableau d'affichage des lots
$listeE1=array('Bresil','France','Espagne','Portugal');
$listeE2=array('Argentine','Italie','Allemagne','Haiti');
//Tableau pour faciliter le tirag   e
$trg1=array('Bresil','Argentine'); $trg2=array('France','Italie');
$trg3=array('Espagne','Allemagne'); $trg4=array('Portugal','Haiti');

//Variable Pour Stocker les noms d'equipe
$aff1="";
$aff2="";
$aff3="";
$aff4="";
$aff11="";
$aff22="";
$aff33="";
$aff44="";
?>

<center>
<h1>LE TOURNOI INTERNATIONAL DE FOOTBALL</h1>
    <br><br><br><br>
<form method="post">
<!-- Tableau d'affichage des têtes de serie -->
<table border="3">
<thead>
 <tr>
<th>
 Lot # 1
<br/>
(1e tête de série)
 </th>
<th >
Lot # 2
<br/>
(2e tête de série)
</th>
<th >
Lot # 3
<br/>
(3e tête de série)
</th>
  <th>
Lot # 4
<br/>
(4e tête de série)
</th>
</tr>
</thead>
<tbody>
<tr>
<td>

 <?php 
 echo $listeE1[0];
 ?>
 <img src="foto/br.png" class="drapo">
</td>
<td>

<?php
echo $listeE1[1];
 ?>
 <img src="foto/fr.png" class="drapo">
</td>
<td>

<?php
 echo $listeE1[2];
 ?>
 <img src="foto/es.png" class="drapo">
</td>
<td>

<?php 
echo $listeE1[3];
?>
<img src="foto/pt.png" class="drapo">
</td>
</tr>
<tr>
<td>

<?php 
echo $listeE2[0];
?>
<img src="foto/ar.png" class="drapo">
</td>
<td>

<?php 
echo $listeE2[1];
?>
<img src="foto/it.png" class="drapo">
</td>
<td>

<?php 
echo $listeE2[2];
?>
<img src="foto/de.png" class="drapo">
</td>
<td>

<?php 
echo $listeE2[3];
?>
<img src="foto/ht.png" class="drapo">
</td>
</tr>
</tbody>
</table>
<br/>
<!-- Boutton Pour le lancement du tirage -->
<div class="lance">
<button type="submit" name="Tirage" value="Tirage">Tirage</button> 
</div>
</form>
      </center>
</article>
<br/>
<br/>

<?php
  if(isset ($_POST['Tirage'])){
  //Random pour la permutation des equipes par leur position
$cap=rand(0,1);
$cap2=rand(0,1);
$cap3=rand(0,1);
$cap4=rand(0,1);
?>
<!-- Affichage des equipes par groupe -->
<center>
<h2>Repartitions des Groupe Apres Le Tirage</h2><hr><br>
<table border="3">
<thead>
<tr>
<th>
 </th>
 <th>
<Strong>Groupe A</Strong>
</th>
<th>
<Strong>Groupe B</Strong>
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
1e tête de série (TDS)
</td>
<td>
<?php
echo $trg1[$cap];
?>
</td>
<td>
<?php
//Pour eviter un equipe ne soit pas repeter dans les deux groupe
 if($trg1[$cap]=='Bresil' && $cap==0){
  echo $trg1[1]='Argentine';
  $aff1=$trg1[0];
  $aff11=$trg1[1];
 }else if($trg1[$cap]=='Argentine' && $cap==1){
  echo $trg1[0]='Bresil';
  $aff1=$trg1[1]; 
  $aff11=$trg1[0];
}
?>
</td>
</tr>
<tr>
<td>
2e tête de série (TDS)
</td>
<td>
  <?php
echo $trg2[$cap2];
?>
</td>
<td>
  <?php
  //Pour eviter un equipe ne soit pas repeter dans les deux groupe
    if($trg2[$cap2]=='France' && $cap2==0){
      echo $trg2[1]='Italie';
      $aff2=$trg2[0];
      $aff22=$trg2[1];
     }else if($trg2[$cap2]=='Italie' && $cap2==1){
      echo $trg2[0]='France';
      $aff2=$trg2[1];
      $aff22=$trg2[0];
     }
?>
</td>
</tr>
<tr>
<td>
3e tête de série (TDS)
</td>
<td>
  <?php
echo $trg3[$cap3];
?>
</td>
<td>
  <?php
  //Pour eviter un equipe ne soit pas repeter dans les deux groupe
if($trg3[$cap3]=='Espagne' && $cap3==0){
  echo $trg3[1]='Allemagne';
  $aff3=$trg3[0];
  $aff33=$trg3[1];
}
else if($trg3[$cap3]=='Allemagne' && $cap3==1){
  echo $trg3[0]='Espagne';
  $aff3=$trg3[1];
  $aff33=$trg3[0];
}
?>
</td>
</tr>
<tr>
<td>
  4e tête de série (TDS)
</td>
<td>
  <?php
echo $trg4[$cap4];
?>
</td>
<td>
  <?php
  //Pour eviter un equipe ne soit pas repeter dans les deux groupe
if($trg4[$cap4]=='Portugal' && $cap4==0){
  echo $thrg4[1]='Haiti';
  $aff4=$trg4[0];
  $aff44=$trg4[1];
}
else if($trg4[$cap4]=='Haiti' && $cap4==1){
  echo $trg4[0]='Portugal';
  $aff4=$trg4[1];
  $aff44=$trg4[0];
}
?>
<?php
//Creation des fichier pour stocker les noms d'equipes
//Ouverture en mode ecriture
$V1=fopen('Fichier/GroupeA1.txt','w');
//ecrire dans le fichier
fwrite($V1,$aff1);
//fermeture du fichier
fclose($V1);

//Idem
$V2=fopen('Fichier/GroupeA2.txt','w');
fwrite($V2,$aff2);
fclose($V2);

//Idem
$V3=fopen('Fichier/GroupeA3.txt','w');
fwrite($V3,$aff3);
fclose($V3);

//Idem
$V4=fopen('Fichier/GroupeA4.txt','w');
fwrite($V4,$aff4);
fclose($V4);

//Idem
$V11=fopen("Fichier2/GroupeB1.txt","w");
fwrite($V11,$aff11);
fclose($V11);


//Idem
$V22=fopen("Fichier2/GroupeB2.txt","w");
fwrite($V22,$aff22);
fclose($V22);


//Idem
$V33=fopen("Fichier2/GroupeB3.txt","w");
fwrite($V33,$aff33);
fclose($V33);


//Idem
$V44=fopen("Fichier2/GroupeB4.txt","w");
fwrite($V44,$aff44);
fclose($V44);

?>
</td>
</tr>
</tbody>
</table>
</center>
<br/><br/>
 <?php
 //On inclure la page discussion
include 'discussion.php';
?> 
<?php
  }
?>
</body>
</html>