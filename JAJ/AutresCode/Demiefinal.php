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

                <span class="tooltip">Champion</span>
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

<?php
//Ouverture du fichier en mode lecture
$PremierA=fopen("Fichier3/premierA.txt","r");
$DeuxiemeA=fopen("Fichier3/DeuxiemeA.txt","r");
$PremierB=fopen("Fichier3/PremierB.txt","r");
$DeuxiemeB=fopen("Fichier3/DeuxiemeB.txt","r");

//Stocker la valeur du fichier dans ce variable pour gerer les matchs du demie_final
$PremierA=fgets($PremierA);
$DeuxiemeA=fgets($DeuxiemeA);
$PremierB=fgets($PremierB);
$DeuxiemeB=fgets($DeuxiemeB);
?>
<center>
<form method="post" action="Match.php">
    <h2>DEMI FINAL</h2>
<table border=3 class="tabDemi">
<thead>
<tr>
  <th>
  Demi-Finale
  </th>
  <th>
  <Strong>Affichage</Strong>
  </th>
  <th>
  <Strong>Score</Strong>
  </th>
  </tr>
  </thead>
  <tbody>
<tr>
<td>
Match 13
</td>

<td>
<?php
echo $PremierA;
echo '   VS   ';
echo $DeuxiemeB;
?>
</td>
<td>
<input type="number" name="scoreDF1" min="0" max="10" placeholder="Score1" required>
  -   
<input type="number" name="scoreDF11" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 14
</td>
<td>
<?php
echo $PremierB;
echo '   VS   ';
echo $DeuxiemeA;
?>
</td>
<td>
<input type="number" name="scoreDF2" min="0" max="10" placeholder="Score1" required>
 -   
<input type="number" name="scoreDF22" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
</tbody>
</table>
<br/>
<br/>
<div class="lance">
<button type="submit" name="DemieFinal" value="Envoyer">Valider</button>
    </div>
</form>
<?

?>
</center>
    </body>

</html>