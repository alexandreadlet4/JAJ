<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Football</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" media="screen" href="AutresCode/global.css"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
       <div class="sidebar">
           <div class="logo_content"> 
               <div class="logo">
                <i><img src="AutresCode/foto/mini-32.ico"/></i>
                 <div class="logo_name">J.A.J's Football</div>

               </div>

               <i id="btn"><img src="AutresCode/foto/menu-4-16.ico"/></i>

           </div>

           <ul class="nav_list">
            <li>
                <a href="#"> 
                    <i class="search"><img src="AutresCode/foto/search-13-16.ico"/></i>
                    <input type="text" name="recherche" placeholder="Search..">
                 </a>

                <span class="tooltip">Recherche</span>
            </li>

               <li>
                   <a href="index.php"> 
                       <i><img src="AutresCode/foto/home-7-16 (1).ico"/></i>
                       <span class="links_name">Home</span> 
                    </a>

                   <span class="tooltip">Home</span>
               </li>

               <li>
                <a href="AutresCode/tirage.php"> 
                    <i><img src="AutresCode/foto/play-16.ico"/></i>
                     <span class="links_name">Tirage</span> 
                </a>

                <span class="tooltip">Tirage</span>
            </li>

            <li>
                <a href="#"> 
                    <i><img src="AutresCode/foto/soccer-2-16 (1).ico"/></i>
                    <span class="links_name">Score</span> 
                </a>

                <span class="tooltip">Gestion score</span>
            </li>

            <li>
                <a href="AutresCode/GestionClassement.php"> 
                    <i><img src="AutresCode/foto/calendar-7-16.ico"/></i> 
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
                    <i><img src="AutresCode/foto/medal-16.ico"/></i> 
                     <span class="links_name">Petite Final</span>
                </a>

                <span class="tooltip">Petite Final</span>
            </li>

            <li>
                <a href="#">
                    <i><img src="AutresCode/foto/trophy-2-16.ico"/></i>
                     <span class="links_name">Final</span>
                </a>

                <span class="tooltip">Champion</span>
            </li>

            <li>
                <a href="#">
                    <i><img src="AutresCode/foto/text-file-4-16 (1).png"/></i>
                     <span class="links_name">Document</span>
                </a>
                <span class="tooltip">Document</span>
            </li>
           </ul>
        
    </div>        
    <div class="home_content">
        <div class="text">WELCOME <br>TO <br>3EME INFO-CUP</div>
        <center>
        <i ><img src="AutresCode/foto/trophy-2-128.ico" class="cup"></i> 
        </center>
        <div class="tirage">
        <button><a href="AutresCode/tirage.php" class="start">START</a></button>
        </div>
    </div>  
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".search");
        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>
    </body>
</html>