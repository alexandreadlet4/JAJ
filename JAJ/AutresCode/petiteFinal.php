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
//Ouverture du fichier en mode Lecture
$PetiteF1=fopen("Fichier4/PetiteFinal1.txt","r");
$PetiteF1=fgets($PetiteF1);

$PetiteF2=fopen("Fichier4/PetiteFinal2.txt","r");
$PetiteF2=fgets($PetiteF2);
?>
<!-- Affichage de la petite final -->
<center>
<h2>La Petite Finale</h2>
<form method="post" action="GestionPetiteFinal.php">
<table border="3" class="tabDemi">
  <thead>
  <tr>
  <th>
  Troisième place 
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
  Match 15
  </td>
  <td>
      <?php
  echo $PetiteF1;
   echo' VS  ';
   echo $PetiteF2;
  ?>
</td>
<td>
<input type="number" name="scorePF1" min="0" max="10" placeholder="Score1" required>
  - 
<input type="number" name="scorePF2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
</tbody>
</table>
<br/>
<div class="lance">
<button type="submit" value="Valider" name="PetiteFinal" class="butonFinal">Valider</button>
</div>

</form>

</center>

</body>

</html>
