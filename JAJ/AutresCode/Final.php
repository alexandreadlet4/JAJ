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
//Ouverture des fichiers en mode lecture
$Final1=fopen("Fichier4/Final1.txt","r");
$Final1=fgets($Final1);

$Final2=fopen("Fichier4/Final2.txt","r");
$Final2=fgets($Final2);

?>
<center>
    <br><br><br>
<h2>LA GRANDE FINAL</h2>

<!-- Affichage des equipe pour la phase final -->

<form method="post" action="GestionFinal.php">
<table border="3" class="tabDemi">
  <thead>
  <tr bgcolor=gray>
  <th>
  La Grande Finale 
  </th>
   <th bgcolor="gray">
  <Strong>Affichage</Strong>
  </th>
  <th bgcolor="gray">
  <Strong>Score</Strong>
  </th>
  
  </tr>
  </thead>
  <tbody>
  <tr>
  <td>
  Match 16
  </td>
  <td>
      <?php
      //Varible qui stocker l'equipe dans le fichier final1 et final2
echo $Final1;
echo '  VS  ';
echo $Final2;    

 ?>
</td>
<td>
<input type="number" name="scoreequipe1" min="0" max="10" placeholder="Score1" required>
  - 
<input type="number" name="scoreequipe2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
</tbody>
</table>
<br/>
<div class="lance">
<button type="submit" value="Champion" name="Champion" class="butonFinal">Champion</button>
    </div>
</form>
</center>
</body>

</html>