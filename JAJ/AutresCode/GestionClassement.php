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
       

<?php
 if(isset ($_POST['Valider'])){
                //Recuperation Score Groupe A
   $score1=$_POST['score1']; $score11=$_POST['score11'];
   $score2=$_POST['score2']; $score22=$_POST['score22'];
   $score3=$_POST['score3']; $score33=$_POST['score33'];
   $score4=$_POST['score4']; $score44=$_POST['score44'];
   $score5=$_POST['score5']; $score55=$_POST['score55'];
   $score6=$_POST['score6']; $score66=$_POST['score66'];

                //Recuperation Score Groupe B
   $scorea1=$_POST['scorea1']; $scorea2=$_POST['scorea2'];
   $scoreb1=$_POST['scoreb1']; $scoreb2=$_POST['scoreb2'];
   $scorec1=$_POST['scorec1']; $scorec2=$_POST['scorec2'];
   $scored1=$_POST['scored1']; $scored2=$_POST['scored2'];
   $scoree1=$_POST['scoree1']; $scoree2=$_POST['scoree2'];
   $scoref1=$_POST['scoref1']; $scoref2=$_POST['scoref2'];
    
              //Variable  Pour 1er 2em et 3em tete de serie

              
              $MGB1=0; //Match gagner pour Bresil pour la premiere match 
              $MNB1=0; //Match nul pour bresil pour la premiere match
              $MPB1=0; //Match perdu pour bresil pour la premiere match
             $point1=0; //Quantite point pour bresil pour la premiere match

//idem
   $MGFrance=0; $MNFrance=0; $MPFrance=0;  $pointFrance1=0;
   $MGB2=0; $MNB2=0;  $MPB2=0;  
   $MGEspagne=0;  $MNEspagne=0; $MPEspagne=0;  $point2=0; $pointEspagne1=0;
   $MGB3=0;  $MNB3=0; $MPB3=0; $point3=0; 
   $MGPortugal=0; $MNPortugal=0; $MPPortugal=0; $pointPortugal1=0;  
                //Variable pour 3em et 4em tete de serie
                //idem
$MGPE=0;  $MNPE=0; $MPPE=0; $pointPE=0; 
$MGPP=0; $MNPP=0;  $MPPP=0; $pointPP=0;
               //Variable pour 2em et 4em tete de serie
               //idem
$MGPF=0; $MNPF=0; $MPPF=0; $pointPF=0; 
$MGPP2=0; $MNPP2=0; $MPPP2=0;  $pointPP2=0;          
              //Variable 3em et 3em tete de serie
              //idem
$MGPF2=0; $MNPF2=0;  $MPPF2=0;  $pointPF2=0;
$MGPE2=0; $MNPE2=0;  $MPPE2=0; $pointPE2=0; 


                  //Variable pour les sommes groupe A
                 //  aff1

$sommeGB=0; //Somme match gagner pour 1er tete de serie
$sommeNB=0; //Somme match nul pour 1er tete de seriel
 $sommePB=0; //Somme match perdu pour 1er tete de serie
  $sommePointB=0; //Somme point pour 1er tete de serie
//aff3
//Idem
$sommeGE=0;  $sommeNE=0;  $sommePE=0; $sommePointE=0;
//aff2
//Idem
$sommeGF=0; $sommeNF=0; $sommePF=0; $sommePointF=0;
//aff44$aff44
//Idem
$sommeGP=0; $sommeNP=0; $sommePP=0; $sommePointP=0;
          
                 
                 //Idem
                 
              // Pour la somme total du groupe B
                   //  aff11
$sommeGAR=0; $sommeNAR=0; $sommePAR=0;  $sommePointAR=0;
                   //aff33
$sommeGA=0;  $sommeNA=0;  $sommePA=0; $sommePointA=0;
                 //aff22
$sommeGI=0; $sommeNI=0; $sommePI=0; $sommePointI=0;
               //aff44
$sommeGH=0; $sommeNH=0; $sommePH=0; $sommePointH=0;


                   //Gestion des points pour l'equipe du 1er groupe A
   // Match pour aff1
 if($score1>$score11){
   $MGB1=1;
   $MNB1=0;
   $MPB1=0;
   $point1=3;

   $MGFrance=0;
   $MNFrance=0;
   $MPFrance=1;
 $pointFrance1=0;

 }else if($score1<$score11){
   $MGB1=0;
   $MNB1=0;
   $MPB1=1;
   $point=0;

   $MGFrance=1;
   $MNFrance=0;
   $MPFrance=0;
   $pointFrance1=3;
 }else{
   $MGB1=0;
   $MNB1=1;
   $MPB1=0;
   $point1=1;

   $MGFrance=0;
   $MNFrance=1;
   $MPFrance=0;
   $pointFrance1=1;
 }
//Idem
 if($score3>$score33){
  $MGB2=1;
  $MNB2=0;
  $MPB2=0;
  $point2=3;

  $MGEspagne=0;
  $MNEspagne=0;
  $MPEspagne=1;
  $pointEspagne1=0;
 
}else if($score3<$score33){
  $MGB2=0;
  $MNB2=0;
  $MPB2=1;
  $point2=0;

  $MGEspagne=1;
  $MNEspagne=0;
  $MPEspagne=0;
  $pointEspagne1=3;
}else{
  $MGB2=0;
  $MNB2=1;
  $MPB2=0;
  $point2=1;

  $MGEspagne=0;
  $MNEspagne=1;
  $MPEspagne=0;
  $pointEspagne1=1;
}
 //Idem
if($score5>$score55){
  $MGB3=1;
  $MNB3=0;
  $MPB3=0;
  $point3=3;

  $MGPortugal=0;
  $MNPortugal=0;
  $MPPortugal=1;
  $pointPortugal1=0;
}else if($score5<$score55){
  $MGB3=0;
  $MNB3=0;
  $MPB3=1;
  $point3=0;

  $MGPortugal=1;
  $MNPortugal=0;
  $MPPortugal=0;
  $pointPortugal1=3;
}else{
  $MGB3=0;
  $MNB3=1;
  $MPB3=0;
  $point3=1;

  $MGPortugal=0;
  $MNPortugal=1;
  $MPPortugal=0;
  $pointPortugal1=1;
}
                
              // aff3 Vs aff44
if($score2>$score22){
  $MGPE=1;
  $MNPE=0;
  $MPPE=0;
  $pointPE=3;

  $MGPP=0;
  $MNPP=0;
  $MPPP=1;
  $pointPP=0;
}else if($score2<$score22){
  $MGPE=0;
  $MNPE=0;
  $MPPE=1;
  $pointPE=0;

  $MGPP=1;
  $MNPP=0;
  $MPPP=0;
  $pointPP=3;
}else{
  $MGPE=0;
  $MNPE=1;
  $MPPE=0;
  $pointPE=1;

  $MGPP=0;
  $MNPP=1;
  $MPPP=0;
  $pointPP=1;
}
          // aff2 Vs aff44
if($score4>$score44){
  $MGPF=1;
  $MNPF=0;
  $MPPF=0;
  $pointPF=3;

  $MGPP2=0;
  $MNPP2=0;
  $MPPP2=1;
  $pointPP2=0;
}else if($score4<$score44){
  $MGPF=0;
  $MNPF=0;
  $MPPF=1;
  $pointPF=0;

  $MGPP2=1;
  $MNPP2=0;
  $MPPP2=0;
  $pointPP2=3;
}else{
              $MGPF=0;
              $MNPF=1;
              $MPPF=0;
              $pointPF=1;
              $MGPP2=0;
              $MNPP2=1;
              $MPPP2=0;
              $pointPP2=1;
}
                      // aff2 Vs aff3
if($score6>$score66){
  $MGPF2=1;
  $MNPF2=0;
  $MPPF2=0;
  $pointPF2=3;

  $MGPE2=0;
  $MNPE2=0;
  $MPPE2=1;
  $pointPE2=0;
}else if($score6<$score66){
  $MGPF2=0;
  $MNPF2=0;
  $MPPF2=1;
  $pointPF2=0;

  $MGPE2=1;
  $MNPE2=0;
  $MPPE2=0;
  $pointPE2=3;
}else{
                  $MGPF2=0;
                  $MNPF2=1;
                  $MPPF2=0;
                  $pointPF2=1;

                  $MGPE2=0;
                  $MNPE2=1;
                  $MPPE2=0;
                  $pointPE2=1;           
                     }
          
//Les calculs pour la formation aff1
   $sommeGB=$MGB1+$MGB2+$MGB3;
   $sommeNB=$MNB1+$MNB2+$MNB3;
   $sommePB=$MPB1+$MPB2+$MPB3;
   $sommePointB=$point1+$point2+$point3;

//Les calculs pour la formation aff3
$sommeGE=$MGEspagne+$MGPE+$MGPE2;
$sommeNE=$MNEspagne+$MNPE+$MNPE2;
$sommePE=$MPEspagne+$MPPE+$MPPE2;
$sommePointE=$pointEspagne1+$pointPE+$pointPE2;

//Les calculs pour la formation aff2
   $sommeGF=$MGFrance+$MGPF+$MGPF2;
   $sommeNF=$MNFrance+$MNPF+$MNPF2;
   $sommePF=$MPFrance+$MPPF+$MPPF2;
   $sommePointF=$pointFrance1+$pointPF+$pointPF2;
   
    //Les calculs pour la formation aff44
   $sommeGP=$MGPortugal+$MGPP+$MGPP2;
   $sommeNP=$MNPortugal+$MNPP+$MNPP2;
   $sommePP=$MPPortugal+$MPPP+$MPPP2;
   $sommePointP=$pointPortugal1+$pointPP+$pointPP2;

          //Variable pour gerer les classement
$Epr="";  $CMG=0;  $CMN=0;  $CMP=0;  $CBP=0;  $CBC=0;  $Dif1=0; $Cpoint=0;
$Epr2=""; $CMG2=0; $CMN2=0; $CMP2=0; $CBP2=0; $CBC2=0; $Dif2=0; $Cpoint2=0;
$Epr3=""; $CMG3=0; $CMN3=0; $CMP3=0; $CBP3=0; $CBC3=0; $Dif3=0; $Cpoint3=0;
$Epr4=""; $CMG4=0; $CMN4=0; $CMP4=0; $CBP4=0; $CBC4=0; $Dif4=0; $Cpoint4=0; 


$CBPP=0; //But Marquee
 $CBCP=0; // But encaisse
 $Dif1P=0; //Leur difference
 ////Idem
$CBP2P=0; $CBC2P=0; $Dif2P=0;
$CBP3P=0; $CBC3P=0; $Dif3P=0;
$CBP4P=0; $CBC4P=0; $Dif4P=0;

//Calcul des scores
$CBPP=$score1+$score3+$score5;
$CBCP=$score11+$score33+$score55;
//Leur difference
$Dif1P=$CBPP-$CBCP;

//Idem
$CBP2P=$score11+$score4+$score6;
$CBC2P=$score1+$score44+$score66;
$Dif2P=$CBP2P-$CBC2P;

//Idem
$CBP3P=$score2+$score33+$score66;
$CBC3P=$score22+$score3+$score6;
$Dif3P=$CBP3P-$CBC3P;

//Idem
$CBP4P=$score22+$score44+$score55;
$CBC4P=$score2+$score4+$score5;
$Dif4P=$CBP4P-$CBC4P;

      //Lecture des fichiers en mode lecture           
                $GroupeA1=fopen("Fichier/GroupeA1.txt","r");
                $GroupeA2=fopen("Fichier/GroupeA2.txt","r");
                $GroupeA3=fopen("Fichier/GroupeA3.txt","r");
                $GroupeA4=fopen("Fichier/GroupeA4.txt","r");
                //aff1 1er place
                
                //If principale
                //Verifier les sommes des points de chaque equipe
                //Si les points sont egaux, le gagnant sera l'equipe qui a la plus grande difference
if(($sommePointB>$sommePointE and $sommePointB>$sommePointF and $sommePointB>$sommePointP) || (($sommePointB>=$sommePointE and $sommePointB>=$sommePointF and $sommePointB>= $sommePointP) && ($Dif1P>=$Dif2P and $Dif1P>=$Dif3P && $Dif1P>=$Dif4P))){
        $Epr=fgets($GroupeA1);
        $CMG=$sommeGB;
        $CMN=$sommeNB;      
        $CMP=$sommePB;
        $CBP=$CBPP;
        $CBC=$CBCP; 
        $Dif1=$Dif1P;
        $Cpoint=$sommePointB;
        // 2em If poiur gerer la place du deuxieme
if(($sommePointE>$sommePointF and $sommePointE>$sommePointP) || (($sommePointE>=$sommePointF and $sommePointE>=$sommePointP) && ($Dif3P>=$Dif2P && $Dif3P>=$Dif4P))){
          $Epr2=fgets($GroupeA3); 
          $CMG2=$sommeGE; 
          $CMN2=$sommeNE; 
          $CMP2=$sommePE;
          $CBP2=$CBP3P;
          $CBC2=$CBC3P;
          $Dif2=$Dif3P;
          $Cpoint2=$sommePointE;

          //3em if pour gerer la palce du 3em
          if(($sommePointP>$sommePointF) || (($sommePointP>=$sommePointF) && ($Dif4P>=$Dif2P))){
            $Epr3=fgets($GroupeA4);
            $CMG3=$sommeGP; 
            $CMN3=$sommeNP; 
            $CMP3=$sommePP;
            $CBP3=$CBP4P;
            $CBC3=$CBC4P;
            $Dif3=$Dif4P;
            $Cpoint3=$sommePointP;
      
            
            //quatrieme equipe
            $Epr4=fgets($GroupeA2);
            $CMG4=$sommeGF; 
            $CMN4=$sommeNF; 
            $CMP4=$sommePF;
            $CBP4=$CBP2P;
            $CBC4=$CBC2P;
            $Dif4=$Dif2P;
            $Cpoint4=$sommePointF;
            
            //Autres possibilite de la troisieme If
          }else if(($sommePointP<$sommePointF) || (($sommePointP<=$sommePointF) && ($Dif2P>=$Dif4P))){
            $Epr3=fgets($GroupeA2);
            $CMG3=$sommeGF; 
            $CMN3=$sommeNF; 
            $CMP3=$sommePF;
            $CBP3=$CBP2P;
            $CBC3=$CBC2P;
            $Dif3=$Dif2P;
            $Cpoint3=$sommePointF;
  
            $Epr4=fgets($GroupeA4);
            $CMG4=$sommeGP; 
            $CMN4=$sommeNP; 
            $CMP4=$sommePP;
            $CBP4=$CBP4P;
            $CBC4= $CBC4P;
            $Dif4=$Dif4P;
            $Cpoint4=$sommePointP;
              }
              //Autres possibilite de la deuxieme If
}else if(($sommePointP>$sommePointF and $sommePointP>$sommePointE) || (($sommePointP>=$sommePointF and $sommePointP>=$sommePointE) && ($Dif4P>=$Dif2P and $Dif4P>=$Dif3P))){
          $Epr2=fgets($GroupeA4); 
          $CMG2=$sommeGP; 
          $CMN2=$sommeNP; 
          $CMP2=$sommePP;
          $CBP2=$CBP4P;
          $CBC2=$CBC4P;
          $Dif2=$Dif4P;
          $Cpoint2=$sommePointP;
          //Autres possibilite de la troisieme If
if(($sommePointE>$sommePointF) || (($sommePointE>=$sommePointF) && ($Dif3P>=$Dif2P))){
              $Epr3=fgets($GroupeA3);     
              $CMG3=$sommeGE; 
              $CMN3=$sommeNE; 
              $CMP3=$sommePE;
              $CBP3=$CBP3P;
              $CBC3=$CBC3P;
              $Dif3=$Dif3P;
              $Cpoint3=$sommePointE;
        
              $Epr4=fgets($GroupeA2); 
              $CMG4=$sommeGF; 
              $CMN4=$sommeNF; 
              $CMP4=$sommePF;
              $CBP4=$CBP2P;
              $CBC4=$CBC2P;
              $Dif4=$Dif2P;
              $Cpoint4=$sommePointF;
              //Autres possibilite de la troisieme If
}else if(($sommePointE<$sommePointF) || (($sommePointE<=$sommePointF) && ($Dif2P>=$Dif3P))){
              $Epr3=fgets($GroupeA2);
              $CMG3=$sommeGF; 
              $CMN3=$sommeNF; 
              $CMP3=$sommePF;
              $CBP3=$CBP2P;
              $CBC3=$CBC2P;
              $Dif3=$Dif2P;
              $Cpoint3=$sommePointE;

              $Epr4=fgets($GroupeA3);
              $CMG4=$sommeGE; 
              $CMN4=$sommeNE; 
              $CMP4=$sommePE;
               $CBP4=$CBP3P;
               $CBC4=$CBC3P;
              $Dif4=$Dif3P;
              $Cpoint4=$sommePointE;
           }
           //Autres possibilite de la deuxieme If
}else if(($sommePointF>$sommePointP and $sommePointF>$sommePointE) || (($sommePointF>=$sommePointP and $sommePointF>=$sommePointE) && ($Dif2P>=$Dif4P && $Dif2P>=$Dif3P))){
          $Epr2=fgets($GroupeA2);
          $CMG2=$sommeGF; 
          $CMN2=$sommeNF; 
          $CMP2=$sommePF;
          $CBP2=$CBP2P;
          $CBC2=$CBC2P;
           $Dif2=$Dif2P;
          $Cpoint2=$sommePointF;
          //Autres possibilite de la troisieme If
if(($sommePointE>$sommePointP) || (($sommePointE>=$sommePointP) and ($Dif3P>=$Dif4P))){
            $Epr3=fgets($GroupeA3); 
            $CMG3=$sommeGE; 
            $CMN3=$sommeNE; 
            $CMP3=$sommePE;
            $CBP3=$CBP3P;
            $CBC3=$CBC3P;
            $Dif3=$Dif3P;
            $Cpoint3=$sommePointE;
      
            $Epr4=fgets($GroupeA4); 
            $CMG4=$sommeGP; 
            $CMN4=$sommeNP; 
            $CMP4=$sommePP;
            $CBP4=$CBP4P;
            $CBC4=$CBC4P;
            $Dif4=$Dif4P;
            $Cpoint4=$sommePointP;
            //Autres possibilite de la troisieme If
}else if(($sommePointE<$sommePointP) || (($sommePointE<=$sommePointP) and ($Dif4P>=$Dif3P))){
            $Epr3=fgets($GroupeA4);
            $CMG3=$sommeGP; 
            $CMN3=$sommeNP; 
            $CMP3=$sommePP;
            $CBP3=$CBP4P;
            $CBC3=$CBC4P;
            $Dif3=$Dif4P;
            $Cpoint3=$sommePointP;
      
            $Epr4=fgets($GroupeA3); 
            $CMG4=$sommeGE; 
            $CMN4=$sommeNE; 
            $CMP4=$sommePE;
            $CBP4=$CBP3P;
            $CBC4=$CBC3P;
            $Dif4=$Dif3P;
            $Cpoint4=$sommePointE;
}
}else{
    //A determiner
}

                        //aff3 1er place
                         //Idem
}else if(($sommePointE>$sommePointB and $sommePointE>$sommePointF and $sommePointE>$sommePointP) || (($sommePointE>=$sommePointB and $sommePointE>=$sommePointF and $sommePointE>=$sommePointP) and ($Dif3P>=$Dif1P and $Dif3P>=$Dif2P and $Dif3P>=$Dif4P))){
      $Epr=fgets($GroupeA3);    
      $CMG=$sommeGE;
      $CMN=$sommeNE;      
      $CMP=$sommePE;
      $CBP=$CBP3P;
      $CBC=$CBC3P; 
      $Dif1=$Dif3P;     
      $Cpoint=$sommePointE;
      //Idem
if(($sommePointB>$sommePointF and $sommePointB>$sommePointP) || (($sommePointB>=$sommePointF and $sommePointB>=$sommePointP) and ($Dif1P>=$Dif2P and $Dif1P>=$Dif4P))){
        $Epr2=fgets($GroupeA1);  
        $CMG2=$sommeGB; 
        $CMN2=$sommeNB; 
        $CMP2=$sommePB;
        $CBP2=$CBPP;
        $CBC2=$CBCP;
        $Dif2=$Dif1P;
        $Cpoint2=$sommePointB;
        //Idem
if(($sommePointP>$sommePointF) || (($sommePointP>=$sommePointF) and ($Dif4P>=$Dif2P))){        
  $Epr3=fgets($GroupeA4);  
          $CMG3=$sommeGP; 
          $CMN3=$sommeNP; 
          $CMP3=$sommePP;
          $CBP3=$CBP4P;
          $CBC3=$CBC4P;
          $Dif3=$Dif4P;
          $Cpoint3=$sommePointP;
    //Idem
          $Epr4=fgets($GroupeA2);  
          $CMG4=$sommeGF; 
          $CMN4=$sommeNF; 
          $CMP4=$sommePF;
          $CBP4=$CBP2P;
          $CBC4=$CBC2P;
          $Dif4=$Dif2P;          
          $Cpoint4=$sommePointF;
          //Idem          
        }else if(($sommePointP<$sommePointF) || (($sommePointP<=$sommePointF) and ($Dif2P>=$Dif4P))){
          $Epr3=fgets($GroupeA2);  
          $CMG3=$sommeGF; 
          $CMN3=$sommeNF; 
          $CMP3=$sommePF;
          $CBP3=$CBP2P;
          $CBC3=$CBC2P;
          $Dif3=$Dif2P;
          $Cpoint3=$sommePointF;
//Idem
          $Epr4=fgets($GroupeA4);  
          $CMG4=$sommeGP; 
          $CMN4=$sommeNP; 
          $CMP4=$sommePP;
          $CBP4=$CBP4P;
          $CBC4=$CBC4P;
          $Dif4=$Dif4P;        
          $Cpoint4=$sommePointP;
            }
            //Idem
}else if(($sommePointP>$sommePointF and $sommePointP>$sommePointB) || (($sommePointP>=$sommePointF and $sommePointP>=$sommePointB) and ($Dif4P>=$Dif2P and $Dif4P>=$Dif1P))) {
        $Epr2=fgets($GroupeA4);  
        $CMG2=$sommeGP; 
        $CMN2=$sommeNP; 
        $CMP2=$sommePP;
        $CBP2=$CBP4P;
        $CBC2=$CBC4P;
        $Dif2=$Dif4P;
        $Cpoint2=$sommePointP;
if(($sommePointB>$sommePointF) || (($sommePointB>=$sommePointF) and ($Dif1P>=$Dif2P))){
            $Epr3=fgets($GroupeA1);  
            $CMG3=$sommeGB; 
            $CMN3=$sommeNB; 
            $CMP3=$sommePB;
            $CBP3=$CBPP;
            $CBC3=$CBCP;
            $Dif3=$Dif1P;
            $Cpoint3=$sommePointB;
      
            $Epr4=fgets($GroupeA2);  
            $CMG4=$sommeGF; 
            $CMN4=$sommeNF; 
            $CMP4=$sommePF;
            $CBP4=$CBP2P;
            $CBC4=$CBC2P;
            $Dif4=$Dif2P;
            $Cpoint4=$sommePointF;
}else if(($sommePointB<$sommePointF) || (($sommePointB<=$sommePointF) and ($Dif2P>=$Dif1P))) {
            $Epr3=fgets($GroupeA2);  
            $CMG3=$sommeGF; 
            $CMN3=$sommeNF; 
            $CMP3=$sommePF;
            $CBP3=$CBP2P;
            $CBC3=$CBC2P;
            $Dif3=$Dif2P;
            $Cpoint3=$sommePointE;
      
            $Epr4=fgets($GroupeA1);  
            $CMG4=$sommeGB; 
            $CMN4=$sommeNB; 
            $CMP4=$sommePB;
            $CBP4=$CBPP;
            $CBC4=$CBCP;
            $Dif4=$Dif1P;
            $Cpoint4=$sommePointB;
         }  
}else if(($sommePointF>$sommePointP and $sommePointF>$sommePointB) || (($sommePointF>=$sommePointP and $sommePointF>=$sommePointB) and ($Dif2P>=$Dif4P and $Dif2P>=$Dif1P))){
        $Epr2=fgets($GroupeA2);  
        $CMG2=$sommeGF; 
        $CMN2=$sommeNF; 
        $CMP2=$sommePF;
        $CBP2=$CBP2P;
        $CBC2=$CBC2P;
        $Dif2=$Dif2P;
        $Cpoint2=$sommePointF;

if(($sommePointB>$sommePointP) || (($sommePointB>=$sommePointP) and($Dif1P>=$Dif4P))){
          $Epr3=fgets($GroupeA1);  
          $CMG3=$sommeGB; 
          $CMN3=$sommeNB; 
          $CMP3=$sommePB;
          $CBP3=$CBPP;
          $CBC3=$CBCP;
          $Dif3=$Dif1P;
          $Cpoint3=$sommePointB;
    
          $Epr4=fgets($GroupeA4);  
          $CMG4=$sommeGP; 
          $CMN4=$sommeNP; 
          $CMP4=$sommePP;
          $CBP4=$CBP4P;
          $CBC4=$CBC4P;
          $Dif4=$Dif4P;        
          $Cpoint4=$sommePointP;
        }else if(($sommePointB<$sommePointP) || (($sommePointB<=$sommePointP) and ($Dif4P>=$Dif1P))) {
          $Epr3=fgets($GroupeA4);  
          $CMG3=$sommeGP; 
          $CMN3=$sommeNP; 
          $CMP3=$sommePP;
          $CBP3=$CBP4P;
          $CBC3=$CBC4P;
          $Dif3=$Dif4P;
          $Cpoint3=$sommePointP;
    
          $Epr4=fgets($GroupeA1);  
          $CMG4=$sommeGB; 
          $CMN4=$sommeNB; 
          $CMP4=$sommePB;
          $CBP4=$CBPP;
          $CBC4=$CBCP;
          $Dif4=$Dif1P;        
          $Cpoint4=$sommePointB;
      }
      }else{
  //A determiner
       }
                   //1er Place aff2          
}else if(($sommePointF>$sommePointE and $sommePointF>$sommePointB and $sommePointF>$sommePointP) || (($sommePointF>=$sommePointE and $sommePointF>=$sommePointB and $sommePointF>=$sommePointP) and ($Dif2P>=$Dif4P and $Dif2P>=$Dif1P and $Dif2P>=$Dif3P))){
          $Epr=fgets($GroupeA2);    
          $CMG=$sommeGF;
          $CMN=$sommeNF;      
          $CMP=$sommePF;
          $CBP=$CBP2P;
          $CBC=$CBC2P; 
          $Dif1=$Dif2P;
          $Cpoint=$sommePointF;
     if(($sommePointE>$sommePointB and $sommePointE>$sommePointP) || (($sommePointE>=$sommePointB and $sommePointE>=$sommePointP) and ($Dif3P>=$Dif1P and $Dif3P>=$Dif4P))){
            $Epr2=fgets($GroupeA3);  
            $CMG2=$sommeGE; 
            $CMN2=$sommeNE; 
            $CMP2=$sommePE;
            $CBP2=$CBP3P;
            $CBC2=$CBC3P; 
             $Dif2=$Dif3P;

             $Cpoint2=$sommePointE;
            if(($sommePointP>$sommePointB) || (($sommePointP>=$sommePointB) and ($Dif4P>=$Dif1P))){
              $Epr3=fgets($GroupeA4);  
              $CMG3=$sommeGP; 
              $CMN3=$sommeNP; 
              $CMP3=$sommePP;
              $CBP3=$CBP4P;
              $CBC3=$CBC4P;
              $Dif3=$Dif4P;
              $Cpoint3=$sommePointP;
        
              $Epr4=fgets($GroupeA1);  
              $CMG4=$sommeGB; 
              $CMN4=$sommeNB; 
              $CMP4=$sommePB;
              $CBP4=$CBPP;
              $CBC4=$CBCP;
              $Dif4=$Dif1P;
              $Cpoint4=$sommePointB;          
            }else if(($sommePointP<$sommePointB) || (($sommePointP<=$sommePointB) and ($Dif1P>=$Dif4P))){
            $Epr3=fgets($GroupeA1);  
              $CMG3=$sommeGB; 
              $CMN3=$sommeNB; 
              $CMP3=$sommePB;
              $CBP3=$CBPP;
              $CBC3=$CBCP;
              $Dif3=$Dif1P;
              $Cpoint3=$sommePointB;
    
              $Epr4=fgets($GroupeA4);  
              $CMG4=$sommeGP; 
              $CMN4=$sommeNP; 
              $CMP4=$sommePP;
              $CBP4=$CBP4P;
              $CBC4=$CBC4P;
              $Dif4=$Dif4P;
              $Cpoint4=$sommePointP;
                }
  }else if(($sommePointP>$sommePointB and $sommePointP>$sommePointE) || (($sommePointP>=$sommePointB and $sommePointP>=$sommePointE) and ($Dif4P>=$Dif1P and $Dif4P>=$Dif3P))){
            $Epr2=fgets($GroupeA4);  
            $CMG2=$sommeGP; 
            $CMN2=$sommeNP; 
            $CMP2=$sommePP;
            $CBP2=$CBP4P;
            $CBC2=$CBC4P;
            $Dif2=$Dif4P;
            $Cpoint2=$sommePointP;
if(($sommePointE>$sommePointB) || (($sommePointE>=$sommePointB) and ($Dif3P>=$Dif1P))){
                $Epr3=fgets($GroupeA3);  
                $CMG3=$sommeGE; 
                $CMN3=$sommeNE; 
                $CMP3=$sommePE;
                $CBP3=$CBP3P;
                $CBC3=$CBC3P;    
                $Dif3=$Dif3P;
                $Cpoint3=$sommePointE;
          
                $Epr4=fgets($GroupeA1);  
                $CMG4=$sommeGB; 
                $CMN4=$sommeNB; 
                $CMP4=$sommePB;
                $CBP4=$CBPP;
                $CBC4=$CBCP;
                $Dif4=$Dif1P;
                $Cpoint4=$sommePointB;
               }else if(($sommePointE<$sommePointB) || (($sommePointE<=$sommePointB) and ($Dif1P>=$Dif3P))){
                $Epr3=fgets($GroupeA1);  
                $CMG3=$sommeGB; 
                $CMN3=$sommeNB; 
                $CMP3=$sommePB;
                $CBP3=$CBPP;
                $CBC3=$CBCP;
                $Dif3=$Dif1P;
                $Cpoint3=$sommePointB;
          
                $Epr4=fgets($GroupeA3);  
                $CMG4=$sommeGE; 
                $CMN4=$sommeNE; 
                $CMP4=$sommePE;
                 $CBP4=$CBP3P;
                 $CBC4=$CBC3P;               
                 $Dif4=$Dif3P;
                $Cpoint4=$sommePointE;
             }
  }else if(($sommePointB>$sommePointP and $sommePointB>$sommePointE) || (($sommePointB>=$sommePointP and $sommePointB>=$sommePointE) and ($Dif1P>=$Dif4P and $Dif1P>=$Dif3P))){
            $Epr2=fgets($GroupeA1);  
            $CMG2=$sommeGB; 
            $CMN2=$sommeNB; 
            $CMP2=$sommePB;
            $CBP2=$CBPP;
            $CBC2=$CBCP;
            $Dif2=$Dif1P;
            $Cpoint2=$sommePointB;
  
            if(($sommePointE>$sommePointP) || (($sommePointE>=$sommePointP) and ($Dif3P>=$Dif4P))){
              $Epr3=fgets($GroupeA3);  
              $CMG3=$sommeGE; 
              $CMN3=$sommeNE; 
              $CMP3=$sommePE;
              $CBP3=$CBP3P;
              $CBC3=$CBC3P;
              $Dif3=$CBP3-$CBC3;
              $Cpoint3=$sommePointE;
        
              $Epr4=fgets($GroupeA4);  
              $CMG4=$sommeGP; 
              $CMN4=$sommeNP; 
              $CMP4=$sommePP;
              $CBP4=$CBP4P;
              $CBC4=$CBC4P;
              $Dif4=$Dif4P;
              $Cpoint4=$sommePointP;
            }else if(($sommePointE<$sommePointP) || (($sommePointE<=$sommePointP) and ($Dif4P>=$Dif3P))) {
              $Epr3=fgets($GroupeA4);  
              $CMG3=$sommeGP; 
              $CMN3=$sommeNP; 
              $CMP3=$sommePP;
              $CBP3=$CBP4P;
              $CBC3=$CBC4A;
              $Dif3=$Dif4P;
              $Cpoint3=$sommePointP;
        
              $Epr4=fgets($GroupeA3);  
              $CMG4=$sommeGE; 
              $CMN4=$sommeNE; 
              $CMP4=$sommePE;
              $CBP4=$CBP4P;
              $CBC4=$CBC4P;
              $Dif4=$Dif4P;
              $Cpoint4=$sommePointE;
          }
           }else{
      //A determiner
           }
                  //aff44 1er place
    }else if(($sommePointP>$sommePointE and $sommePointP>$sommePointF and $sommePointP>$sommePointB) || (($sommePointP>=$sommePointE and $sommePointP>=$sommePointF and $sommePointP>=$sommePointB) and ($Dif4P>=$Dif3P and $Dif4P>=$Dif2P and $Dif4P>=$Dif1P))){
              $Epr=fgets($GroupeA4);    
              $CMG=$sommeGP;
              $CMN=$sommeNP;      
              $CMP=$sommePP;
              $CBP=$CBP4P;
              $CBC=$CBC4P; 
              $Dif1=$Dif4P;            
              $Cpoint=$sommePointP;
      if(($sommePointE>$sommePointF and $sommePointE>$sommePointB) || (($sommePointE>=$sommePointF and $sommePointE>=$sommePointB) and ($Dif3P>=$Dif2P and $Dif3P>=$Dif1P))){
                $Epr2=fgets($GroupeA3);  
                $CMG2=$sommeGE; 
                $CMN2=$sommeNE; 
                $CMP2=$sommePE;
                $CBP2=$CBP3P;
                $CBC2=$CBC3P;
                $Dif2=$Dif3P;              
                $Cpoint2=$sommePointE;
                if(($sommePointB>$sommePointF) || (($sommePointB>=$sommePointF) and ($Dif1P>=$Dif2P))){
                  $Epr3=fgets($GroupeA1);  
                  $CMG3=$sommeGB; 
                  $CMN3=$sommeNB; 
                  $CMP3=$sommePB;
                  $CBP3=$CBPP;
                  $CBC3=$CBCP;
                  $Dif3=$Dif1P;
                  $Cpoint3=$sommePointB;
            
                  $Epr4=fgets($GroupeA2);  
                  $CMG4=$sommeGF; 
                  $CMN4=$sommeNF; 
                  $CMP4=$sommePF;
                  $CBP4=$CBP2P;
                  $CBC4=$CBC2P;
                  $Dif4=$Dif2P;
                  $Cpoint4=$sommePointF;          
                }else if(($sommePointB<$sommePointF) || (($sommePointB<=$sommePointF) and ($Dif2P>=$Dif1P))){
                $Epr3=fgets($GroupeA2);  
                  $CMG3=$sommeGF; 
                  $CMN3=$sommeNF; 
                  $CMP3=$sommePF;
                  $CBP3=$CBP2P;
                  $CBC3=$CBC2P;
                  $Dif3=$Dif2P;
                  $Cpoint3=$sommePointF;

                  $Epr4=fgets($GroupeA1);  
                  $CMG4=$sommeGB; 
                  $CMN4=$sommeNB; 
                  $CMP4=$sommePB;
                  $CBP4=$CBPP;
                  $CBC4= $CBCP;
                  $Dif4=$Dif1P;
                  $Cpoint4=$sommePointB;
                    }
      }else if(($sommePointB>$sommePointF and $sommePointB>$sommePointE) || (($sommePointB>=$sommePointF and $sommePointB>=$sommePointE) and ($Dif1P>=$Dif2P and $Dif1P>=$Dif3P))){
                $Epr2=fgets($GroupeA1);  
                $CMG2=$sommeGB; 
                $CMN2=$sommeNB; 
                $CMP2=$sommePB;
                $CBP2=$CBPP;
                $CBC2=$CBCP;
                $Dif2=$Dif1P;
                $Cpoint2=$sommePointB;
      if(($sommePointE>$sommePointF) || (($sommePointE>=$sommePointF) and ($Dif3P>=$Dif2P))){
                    $Epr3=fgets($GroupeA3);  
                    $CMG3=$sommeGE; 
                    $CMN3=$sommeNE; 
                    $CMP3=$sommePE;
                    $CBP3=$CBP3P;
                    $CBC3=$CBC3P;    
                    $Dif3=$Dif3P;
                    $Cpoint3=$sommePointE;
              
                    $Epr4=fgets($GroupeA2);  
                    $CMG4=$sommeGF; 
                    $CMN4=$sommeNF; 
                    $CMP4=$sommePF;
                    $CBP4=$CBP2P;
                    $CBC4=$CBC2P;
                    $Dif4=$Dif2P;
                    $Cpoint4=$sommePointF;
}else if(($sommePointE<$sommePointF) || (($sommePointE<=$sommePointF) and ($Dif2P>=$Dif3P))){
                    $Epr3=fgets($GroupeA2);  
                    $CMG3=$sommeGF; 
                    $CMN3=$sommeNF; 
                    $CMP3=$sommePF;
                    $CBP3=$CBP2P;
                    $CBC3=$CBC2P;
                    $Dif3=$Dif2P;
                    $Cpoint3=$sommePointF;
              
                    $Epr4=fgets($GroupeA3);  
                    $CMG4=$sommeGE; 
                    $CMN4=$sommeNE; 
                    $CMP4=$sommePE;
                    $CBP4=$CBP3P;
                    $CBC4=$CBC3P;
                    $Dif4=$Dif3P;
                    $Cpoint4=$sommePointE;
}
}else if(($sommePointF>$sommePointB and $sommePointF>$sommePointE) || (($sommePointF>=$sommePointB and $sommePointF>=$sommePointE) and ($Dif2P>=$Dif1P and $Dif2P>=$Dif3P))){
                $Epr2=fgets($GroupeA2);  
                $CMG2=$sommeGF; 
                $CMN2=$sommeNF; 
                $CMP2=$sommePF;
                $CBP2=$CBP2P;
                $CBC2=$CBC2P;
                $Dif2=$Dif2P;
               $Cpoint2=$sommePointF;
                if(($sommePointE>$sommePointB) || (($sommePointE>=$sommePointB) and ($Dif3>=$Dif1))){
                  $Epr3=fgets($GroupeA3);  
                  $CMG3=$sommeGE; 
                  $CMN3=$sommeNE; 
                  $CMP3=$sommePE;
                  $CBP3=$CBP3P;
                  $CBC3=$CBC3P;
                  $Dif3=$Dif3P;
                  $Cpoint3=$sommePointE;
            
                  $Epr4=fgets($GroupeA1);  
                  $CMG4=$sommeGB; 
                  $CMN4=$sommeNB; 
                  $CMP4=$sommePB;
                  $CBP4=$CBPP;
                  $CBC4=$CBCP;
                  $Dif4=$Dif1P;
                  $Cpoint4=$sommePointB;
}else if(($sommePointE<$sommePointB) || (($sommePointE<=$sommePointB) and($Dif1P>=$Dif3P))){
                  $Epr3=fgets($GroupeA1);  
                  $CMG3=$sommeGB; 
                  $CMN3=$sommeNB; 
                  $CMP3=$sommePB;
                  $CBP3=$CBPP;
                  $CBC3=$CBCP;
                  $Dif3=$Dif1P;
                  $Cpoint3=$sommePointB;
            
                  $Epr4=fgets($GroupeA3);  
                  $CMG4=$sommeGE; 
                  $CMN4=$sommeNE; 
                  $CMP4=$sommePE;
                  $CBP4=$CBP3P;
                  $CBC4=$CBC3P;
                  $Dif4=$Dif3P;    
                  $Cpoint4=$sommePointE;
}
}else{
          
} 
}
            //Fermeture des fichier 
fclose($GroupeA1);
fclose($GroupeA2);
fclose($GroupeA3);
fclose($GroupeA4);
       
//Idem pour le groupe B
        //Variable pour aff11
$MGAR1=0; $MNAR1=0; $MPAR1=0;  $pointAR1=0;
$MGItalie=0; $MNItalie=0; $MPItalie=0;  $pointItalie1=0;
$MGAR2=0; $MNAR2=0;  $MPAR2=0;  $pointAR2=0;
$MGAllemagne=0;  $MNAllemagne=0; $MPAllemagne=0;  $pointAllemagne1=0;
$MGAR3=0;  $MNAR3=0; $MPAR3=0; $pointAR3=0; 
$MGHaiti=0; $MNHaiti=0; $MPHaiti=0; $pointHaiti1=0;
            
                          // aff33 Vs aff44$aff444
          $MGPA=0;  $MNPA=0; $MPPA=0; $pointPA=0; 
          $MGPH=0; $MNPH=0;  $MPPH=0; $pointPH=0;
                          
                         //aff22 Vs aff44$aff444
          $MGPI=0; $MNPI=0; $MPPI=0; $pointPI=0; 
          $MGPH2=0; $MNPH2=0; $MPPH2=0;  $pointPH2=0;          
                                              
                            //Italie Vs Allemagne
          $MGPI2=0; $MNPI2=0;  $MPPI2=0;  $pointPI2=0;
          $MGPA2=0; $MNPA2=0;  $MPPA2=0; $pointPA2=0; 
          
                             //Variable pour gerer les classements
             // Match aff11
           if($scorea1>$scorea2){
             $MGAR1=1;
             $MNAR1=0;
             $MPAR1=0;
             $pointAR1=3;
          
             $MGItalie=0;
             $MNItalie=0;
             $MPItalie=1;
           $pointItalie1=0;
          
           }else if($scorea1<$scorea2){
             $MGAR1=0;
             $MNAR1=0;
             $MPAR1=1;
             $pointAR1=0;
          
             $MGItalie=1;
             $MNItalie=0;
             $MPItalie=0;
             $pointItalie1=3;
           }else{
             $MGAR1=0;
             $MNAR1=1;
             $MPAR1=0;
             $pointAR1=1;
          
             $MGItalie=0;
             $MNItalie=1;
             $MPItalie=0;
             $pointItalie1=1;
           }
           if($scorec1>$scorec2){
            $MGAR2=1;
            $MNAR2=0;
            $MPAR2=0;
            $pointAR2=3;
          
            $MGAllemagne=0;
            $MNAllemagne=0;
            $MPAllemagne=1;
            $pointAllemagne1=0;
           
          }else if($scorec1<$scorec2){
            $MGAR2=0;
            $MNAR2=0;
            $MPAR2=1;
            $pointAR2=0;
          
            $MGAllemagne=1;
            $MNAllemagne=0;
            $MPAllemagne=0;
            $pointAllemagne1=3;
          }else{
            $MGAR2=0;
            $MNAR2=1;
            $MPAR2=0;
            $pointAR2=1;
          
            $MGAllemagne=0;
            $MNAllemagne=1;
            $MPAllemagne=0;
            $pointAllemagne1=1;           
          }
          if($scoree1>$scoree2){
            $MGAR3=1;
            $MNAR3=0;
            $MPAR3=0;
            $pointAR3=3;
          
            $MGHaiti=0;
            $MNHaiti=0;
            $MPHaiti=1;
            $pointHaiti1=0;
           
          }else if($scoree1<$scoree2){
            $MGAR3=0;
            $MNAR3=0;
            $MPAR3=1;
            $pointAR3=0;

            $MGHaiti=1;
            $MNHaiti=0;
            $MPHaiti=0;
            $pointHaiti1=3;
          }else{
            $MGAR3=0;
            $MNAR3=1;
            $MPAR3=0;
            $pointAR3=1;
          
            $MGHaiti=0;
            $MNHaiti=1;
            $MPHaiti=0;
            $pointHaiti1=1;
          }
          
                        // aff33 Vs aff44
          if($scoreb1>$scoreb2){
            $MGPA=1;
            $MNPA=0;
            $MPPA=0;
            $pointPA=3;
          
            $MGPH=0;
            $MNPH=0;
            $MPPH=1;
            $pointPH=0;
          }else if($scoreb1<$scoreb2){
            $MGPA=0;
            $MNPA=0;
            $MPPA=1;
            $pointPA=0;
          
            $MGPH=1;
            $MNPH=0;
            $MPPH=0;
            $pointPH=3;
          }else{
            $MGPA=0;
            $MNPA=1;
            $MPPA=0;
            $pointPA=1;
          
            $MGPH=0;
            $MNPH=1;
            $MPPH=0;
            $pointPH=1;
          }
          
                    // aff22 Vs aff44
          if($scored1>$scored2){
            $MGPI=1;
            $MNPI=0;
            $MPPI=0;
            $pointPI=3;
          
            $MGPH2=0;
            $MNPH2=0;
            $MPPH2=1;
            $pointPH2=0;
          }else if($scored1<$scored2){
            $MGPI=0;
            $MNPI=0;
            $MPPI=1;
            $pointPI=0;
          
            $MGPH2=1;
            $MNPH2=0;
            $MPPH2=0;
            $pointPH2=3;
          }else{
                        $MGPI=0;
                        $MNPI=1;
                        $MPPI=0;
                        $pointPI=1;

                        $MGPH2=0;
                        $MNPH2=1;
                        $MPPH2=0;
                        $pointPH2=1;
          }
          // Italie Vs Allemagne
          if($scoref1>$scoref2){
            $MGPI2=1;
            $MNPI2=0;
            $MPPI2=0;
            $pointPI2=3;
          
            $MGPA2=0;
            $MNPA2=0;
            $MPPA2=1;
            $pointPA2=0;
          }else if($scoref1<$scoref2){
            $MGPI2=0;
            $MNPI2=0;
            $MPPI2=1;
            $pointPI2=0;
          
            $MGPA2=1;
            $MNPA2=0;
            $MPPA2=0;
            $pointPA2=3;
          }else{
                            $MGPI2=0;
                            $MNPI2=1;
                            $MPPI2=0;
                            $pointPI2=1;

                            $MGPA2=0;
                            $MNPA2=1;
                            $MPPA2=0;
                            $pointPA2=1;           
                               }
          //Les calculs pour la formation aff11
             $sommeGAR=$MGAR1+$MGAR2+$MGAR3;
             $sommeNAR=$MNAR1+$MNAR2+$MNAR3;
             $sommePAR=$MPAR1+$MPAR2+$MPAR3;
             $sommePointAR=$pointAR1+$pointAR2+$pointAR3;
          
          //Les calculs pour la formation aff33
          $sommeGA=$MGAllemagne+$MGPA+$MGPA2;
          $sommeNA=$MNAllemagne+$MNPA+$MNPA2;
          $sommePA=$MPAllemagne+$MPPA+$MPPA2;
          $sommePointA=$pointAllemagne1+$pointPA+$pointPA2;
          
          //Les calculs pour la formation aff22
          $sommeGI=$MGItalie+$MGPI+$MGPI2;
             $sommeNI=$MNItalie+$MNPI+$MNPI2;
             $sommePI=$MPItalie+$MPPI+$MPPI2;
             $sommePointI=$pointItalie1+$pointPI+$pointPI2;
             
              //Les calculs pour la formation aff44
             $sommeGH=$MGHaiti+$MGPH+$MGPH2;
             $sommeNH=$MNHaiti+$MNPH+$MNPH2;
             $sommePH=$MPHaiti+$MPPH+$MPPH2;
             $sommePointH=$pointHaiti1+$pointPH+$pointPH2;
          
          $EprA=""; $CMGA=0; $CMNA=0; $CMPA=0; $CBPA=0; $CBCA=0; $Dif1A=0; $CpointA=0;
          $Epr2A=""; $CMG2A=0; $CMN2A=0; $CMP2A=0; $CBP2A=0; $CBC2A=0; $Dif2A=0; $Cpoint2A=0;
          $Epr3A=""; $CMG3A=0; $CMN3A=0; $CMP3A=0; $CBP3A=0; $CBC3A=0; $Dif3A=0; $Cpoint3A=0;
          $Epr4A=""; $CMG4A=0; $CMN4A=0; $CMP4A=0; $CBP4A=0; $CBC4A=0; $Dif4A=0; $Cpoint4A=0;
          
          $CBPAP=0; $CBCAP=0; $Dif1AP=0;
          $CBP2AP=0; $CBC2AP=0; $Dif2AP=0;
          $CBP3AP=0; $CBC3AP=0; $Dif3AP=0;
          $CBP4AP=0; $CBC4AP=0; $Dif4AP=0;
          

          $CBPAP=$scorea1+$scorec1+$scoree1;
          $CBCAP=$scorea2+$scorec2+$scoree2;
          $Dif1AP=$CBPAP-$CBCAP;
          
          $CBP2AP=$scorea2+$scored1+$scoref1;
          $CBC2AP=$scorea1+$scored2+$scoref2;
          $Dif2AP=$CBP2AP-$CBC2AP;
          
          $CBP3AP=$scoreb1+$scorec2+$scoref2;
          $CBC3AP=$scoreb2+$scorec1+$scoref1;
          $Dif3AP=$CBP3AP-$CBC3AP;
          
          $CBP4AP=$scoreb2+$scored2+$scoree2;
          $CBC4AP=$scoreb1+$scored1+$scoree1;
          $Dif4AP=$CBP4AP-$CBC4AP;

          //Ouverture des fichiers en mode Lecture
          $GroupeB1=fopen("Fichier2/GroupeB1.txt","r");
          $GroupeB2=fopen("Fichier2/GroupeB2.txt","r");
          $GroupeB3=fopen("Fichier2/GroupeB3.txt","r");
          $GroupeB4=fopen("Fichier2/GroupeB4.txt","r");
                           //aff11 1er place
if(($sommePointAR>$sommePointA and $sommePointAR>$sommePointI and $sommePointAR>$sommePointH) || (($sommePointAR>=$sommePointA and $sommePointAR>=$sommePointI and $sommePointAR>=$sommePointH) and ($Dif1AP>=$Dif3AP and $Dif1AP>=$Dif2AP and $Dif1AP>=$Dif4AP))){
                  $EprA=fgets($GroupeB1);   
                  $CMGA=$sommeGAR;
                  $CMNA=$sommeNAR;      
                  $CMPA=$sommePAR;
                  $CBPA=$CBPAP;
                  $CBCA=$CBCAP; 
                  $Dif1A=$Dif1AP;  
                  $CpointA=$sommePointAR;
          if(($sommePointA>$sommePointI and $sommePointA>$sommePointH)|| (($sommePointA>=$sommePointI and $sommePointA>=$sommePointH) and ($Dif3AP>=$Dif2AP and $Dif3AP>=$Dif4AP))){
                    $Epr2A=fgets($GroupeB3); 
                    $CMG2A=$sommeGA; 
                    $CMN2A=$sommeNA; 
                    $CMP2A=$sommePA;
                    $CBP2A=$CBP3AP;
                    $CBC2A=$CBC3AP;
                    $Dif2A=$Dif3AP;
                    $Cpoint2A=$sommePointA;
                    if(($sommePointH>$sommePointI) || (($sommePointH>=$sommePointI) and ($Dif4AP>=$Dif2AP))){
                      $Epr3A=fgets($GroupeB4); 
                      $CMG3A=$sommeGH; 
                      $CMN3A=$sommeNH; 
                      $CMP3A=$sommePH;
                      $CBP3A=$CBP4AP;
                      $CBC3A=$CBC4AP;
                       $Dif3A=$Dif4AP;             
                      $Cpoint3A=$sommePointH;

                      $Epr4A=fgets($GroupeB2); 
                      $CMG4A=$sommeGI; 
                      $CMN4A=$sommeNI; 
                      $CMP4A=$sommePI;
                      $CBP4A=$CBP2AP;
                      $CBC4A=$CBC2AP;
                      $Dif4A=$Dif2AP; 
                      $Cpoint4A=$sommePointI;          
                    }else if(($sommePointH<$sommePointI) || (($sommePointH<=$sommePointI) and ($Dif2AP>=$Dif4AP))){
                      $Epr3A=fgets($GroupeB2); 
                      $CMG3A=$sommeGI; 
                      $CMN3A=$sommeNI; 
                      $CMP3A=$sommePI;
                      $CBP3A=$CBP2AP;
                      $CBC3A=$CBC2AP;
                       $Dif3A=$Dif2AP;
                      $Cpoint3A=$sommePointI;
            
                      $Epr4A=fgets($GroupeB4); 
                      $CMG4A=$sommeGH; 
                      $CMN4A=$sommeNH; 
                      $CMP4A=$sommePH;
                      $CBP4A=$CBP4AP;
                      $CBC4A=$CBC4AP;
                      $Dif4A=$Dif4AP;  
                      $Cpoint4A=$sommePointH;
                        }
          }else if(($sommePointH>$sommePointI and $sommePointH>$sommePointA) and (($sommePointH>=$sommePointI and $sommePointH>=$sommePointA) and ($Dif4AP>=$Dif2AP and $Dif4AP>=$Dif3AP))){
                    $Epr2A=fgets($GroupeB4); 
                    $CMG2A=$sommeGH; 
                    $CMN2A=$sommeNH; 
                    $CMP2A=$sommePH;
                    $CBP2A=$CBP4AP;
                    $CBC2A=$CBC4AP; 
                    $Dif2A=$Dif4AP;
                    $Cpoint2A=$sommePointH;
                       if(($sommePointA>$sommePointI) ||(($sommePointA>=$sommePointI) and ($Dif3AP>=$Dif2AP))){
                        $Epr3A=fgets($GroupeB3);
                        $CMG3A=$sommeGA; 
                        $CMN3A=$sommeNA; 
                        $CMP3A=$sommePA;
                        $CBP3A=$CBP3AP;
                        $CBC3A=$CBC3AP;   
                        $Dif3A=$Dif3AP;                  
                  
                        $Cpoint3A=$sommePointA;
                        $Epr4A=fgets($GroupeB2); 
                        $CMG4A=$sommeGI; 
                        $CMN4A=$sommeNI; 
                        $CMP4A=$sommePI;
                        $CBP4A=$CBP2AP;
                        $CBC4A=$CBC2AP;    
                        $Dif4A=$Dif2AP; 
                        $Cpoint4=$sommePointI;
                       }else if(($sommePointA<$sommePointI) || (($sommePointA<=$sommePointI) and ($Dif2AP>=$Dif3AP))){
                        $Epr3A=fgets($GroupeB2); 
                        $CMG3A=$sommeGI; 
                        $CMN3A=$sommeNI; 
                        $CMP3A=$sommePI;
                        $CBP3A=$CBP2AP;
                        $CBC3A=$CBC2AP;
                        $Dif3A=$Dif2A;             
                        $Cpoint3A=$sommePointI;
                  
                        $Epr4A=fgets($GroupeB3);
                        $CMG4A=$sommeGA; 
                        $CMN4A=$sommeNA; 
                        $CMP4A=$sommePA;
                        $CBP4A=$CBP3AP;
                        $CBC4A=$CBC3AP;
                        $Dif4A=$Dif3AP; 
                        $Cpoint4A=$sommePointA;
                     }
          }else if(($sommePointI>$sommePointH and $sommePointI>$sommePointA) || (($sommePointI>=$sommePointH and $sommePointI>=$sommePointA) and ($Dif2AP>=$Dif4AP and $Dif2AP>=$Dif3AP))){
                    $Epr2A=fgets($GroupeB2); 
                    $CMG2A=$sommeGI; 
                    $CMN2A=$sommeNI; 
                    $CMP2A=$sommePI;
                    $CBP2A=$CBP2AP;
                    $CBC2A=$CBC2AP;
                    $Dif2A=$Dif2AP;
                    $Cpoint2A=$sommePointI;
          
                    if(($sommePointA>$sommePointH) || (($sommePointA>=$sommePointH) and ($Dif3AP>=$Dif4AP))) {
                      $Epr3A=fgets($GroupeB3);
                      $CMG3A=$sommeGA; 
                      $CMN3A=$sommeNA; 
                      $CMP3A=$sommePA;
                      $CBP3A=$CBP3AP;
                      $CBC3A=$CBC3AP;
                      $Dif3A=$Dif3AP;
                      $Cpoint3A=$sommePointA;
                
                      $Epr4A=fgets($GroupeB4); 
                      $CMG4A=$sommeGH; 
                      $CMN4A=$sommeNH; 
                      $CMP4A=$sommePH;
                      $CBP4A=$CBP4AP;
                      $CBC4A=$CBC4AP;
                      $Dif4A=$Dif4AP;     
                      $Cpoint4A=$sommePointH;
}else if(($sommePointA<$sommePointH) || (($sommePointA<=$sommePointH) and ($Dif4AP>=$Dif3AP))){
                      $Epr3A=fgets($GroupeB4); 
                      $CMG3A=$sommeGH; 
                      $CMN3A=$sommeNH; 
                      $CMP3A=$sommePH;
                      $CBP3A=$CBP4AP;
                      $CBC3A=$CBC4AP;
                       $Dif3A=$Dif4AP;
                      $Cpoint3A=$sommePointH;
                
                      $Epr4A=fgets($GroupeB3);
                      $CMG4A=$sommeGA; 
                      $CMN4A=$sommeNA; 
                      $CMP4A=$sommePA;
                      $CBP4A=$CBP3AP;
                      $CBC4A=$CBC3AP;
                        $Dif4A=$Dif3AP;   
                      $Cpoint4A=$sommePointA;
          }
          }else{
              //A determiner
          }
          
                                  //aff33 1er place
}else if(($sommePointA>$sommePointAR and $sommePointA>$sommePointI and $sommePointA>$sommePointH) || (($sommePointA>=$sommePointAR and $sommePointA>=$sommePointI and $sommePointA>=$sommePointH) and ($Dif3AP>=$Dif1AP and $Dif3AP>=$Dif2AP and $Dif3AP>=$Dif4AP))){
                $EprA=fgets($GroupeB3);   
                $CMGA=$sommeGA;
                $CMNA=$sommeNA;      
                $CMPA=$sommePA;
                $CBPA=$CBP3AP;
                $CBCA=$CBC3AP; 
                $Dif1A=$Dif3AP;
                $CpointA=$sommePointA;
          if(($sommePointAR>$sommePointI and $sommePointAR>$sommePointH) || (($sommePointAR>=$sommePointI and $sommePointAR>=$sommePointH) and ($Dif1AP>=$Dif2AP and $Dif1AP>=$Dif4AP))){
                  $Epr2A=fgets($GroupeB1); 
                  $CMG2A=$sommeGAR; 
                  $CMN2A=$sommeNAR; 
                  $CMP2A=$sommePAR;
                  $CBP2A=$CBPAP;
                  $CBC2A=$CBCAP;
                  $Dif2A=$Dif1AP;
                  $Cpoint2A=$sommePointAR;
                  if(($sommePointH>$sommePointI) || (($sommePointH>=$sommePointI) and ($Dif4AP>=$Dif2AP))) {
                    $Epr3A=fgets($GroupeB4); 
                    $CMG3A=$sommeGH; 
                    $CMN3A=$sommeNH; 
                    $CMP3A=$sommePH;
                    $CBP3A=$CBP4AP;
                    $CBC3A=$CBC4AP;
                    $Dif3A=$Dif4AP;
                    $Cpoint3A=$sommePointH;
                    
                    $Epr4A=fgets($GroupeB2); 
                    $CMG4A=$sommeGI; 
                    $CMN4A=$sommeNI; 
                    $CMP4A=$sommePI;
                    $CBP4A=$CBP2AP;
                    $CBC4A=$CBC2AP;
                    $Dif4A=$Dif2AP;       
                    $Cpoint4A=$sommePointI;          
                  }else if(($sommePointH<$sommePointI) || (($sommePointH<=$sommePointI) and ($Dif2AP>=$Dif4AP))){
                  $Epr3A=fgets($GroupeB2); 
                    $CMG3A=$sommeGI; 
                    $CMN3A=$sommeNI; 
                    $CMP3A=$sommePI;
                    $CBP3A=$CBP2AP;
                    $CBC3A=$CBC2AP;
                    $Dif3A=$Dif2AP;
                    $Cpoint3A=$sommePointI;
          
                    $Epr4A=fgets($GroupeB4); 
                    $CMG4A=$sommeGH; 
                    $CMN4A=$sommeNH; 
                    $CMP4A=$sommePH;
                    $CBP4A=$CBP4AP;
                    $CBC4A=$CBC4AP;
                    $Dif4A=$Dif4AP;
                    $Cpoint4A=$sommePointH;
                      }
          }else if(($sommePointH>$sommePointI and $sommePointH>$sommePointAR) ||  (($sommePointH>=$sommePointI and $sommePointH>=$sommePointAR) and ($Dif4AP>=$Dif2AP and $Dif4AP>=$Dif1AP))){
                  $Epr2A=fgets($GroupeB4); 
                  $CMG2A=$sommeGH; 
                  $CMN2A=$sommeNH; 
                  $CMP2A=$sommePH;
                  $CBP2A=$CBP4AP;
                  $CBC2A=$CBC4AP;
                  $Dif2A=$Dif4AP;
                  
                  $Cpoint2A=$sommePointH;
                     if(($sommePointAR>$sommePointI) || (($sommePointAR>=$sommePointI) and ($DifA1P>=$Dif2AP))){
                      $Epr3A=fgets($GroupeB1); 
                      $CMG3A=$sommeGAR; 
                      $CMN3A=$sommeNAR; 
                      $CMP3A=$sommePAR;
                      $CBP3A=$CBPAP;
                      $CBC3A=$CBCAP;
                       $Dif3A=$Dif1AP;
                      $Cpoint3A=$sommePointAR;
                
                      $Epr4A=fgets($GroupeB2); 
                      $CMG4A=$sommeGI; 
                      $CMN4A=$sommeNI; 
                      $CMP4A=$sommePI;
                      $CBP4A=$CBP2AP;
                      $CBC4A=$CBC2AP;
                      $Dif4A=$Dif2AP; 
                      $Cpoint4A=$sommePointI;
                     }else if(($sommePointAR<$sommePointI) || (($sommePointAR<=$sommePointI) and ($Dif2AP>=$Dif1AP))){
                      $Epr3A=fgets($GroupeB2); 
                      $CMG3A=$sommeGI; 
                      $CMN3A=$sommeNI; 
                      $CMP3A=$sommePI;
                      $CBP3A=$CBP2AP;
                      $CBC3A=$CBC2AP;
                      $Dif3A=$Dif2AP;
                      $Cpoint3A=$sommePointI;
                
                      $Epr4A=fgets($GroupeB1); 
                      $CMG4A=$sommeGAR; 
                      $CMN4A=$sommeNAR; 
                      $CMP4A=$sommePAR;
                      $CBP4A=$CBPAP;
                      $CBC4A=$CBCAP;
                      $Dif4A=$Dif1AP;
                      $Cpoint4A=$sommePointAR;
                   }
          }else if(($sommePointI>$sommePointH and $sommePointI>$sommePointAR) || (($sommePointI>=$sommePointH and $sommePointI>=$sommePointAR) and ($Dif2AP>=$Dif4AP and $Dif2AP>=$DifA1P))){
                  $Epr2A=fgets($GroupeB2); 
                  $CMG2A=$sommeGI; 
                  $CMN2A=$sommeNI; 
                  $CMP2A=$sommePI;
                  $CBP2A=$CBP2AP;
                  $CBC2A=$CBC2AP;
                  $Dif2A=$Dif2AP;
                  $Cpoint2A=$sommePointI;
          
                  if(($sommePointAR>$sommePointH) || (($sommePointAR>=$sommePointH) and ($DifA1P>=$Dif4AP))){
                    $Epr3A=fgets($GroupeB1); 
                    $CMG3A=$sommeGAR; 
                    $CMN3A=$sommeNAR; 
                    $CMP3A=$sommePAR;
                    $CBP3A=$CBPAP;
                    $CBC3A=$CBCAP;
                    $Dif3A=$Dif1AP;
                    $Cpoint3A=$sommePointAR;
              
                    $Epr4A=fgets($GroupeB4); 
                    $CMG4A=$sommeGH; 
                    $CMN4A=$sommeNH; 
                    $CMP4A=$sommePH;
                    $CBP4A=$CBP4AP;
                    $CBC4A=$CBC4AP;
                    $Dif4A=$Dif4AP;
                    $Cpoint4A=$sommePointH;
                  }else if(($sommePointAR<$sommePointH) || (($sommePointAR<=$sommePointH) and ($Dif4AP>=$DifA1P))){
                    $Epr3A=fgets($GroupeB4); 
                    $CMG3A=$sommeGH; 
                    $CMN3A=$sommeNH; 
                    $CMP3A=$sommePH;
                    $CBP3A=$CBP4AP;
                    $CBC3A=$CBC4AP;
                    $Dif3A=$Dif4AP;
                    $Cpoint3A=$sommePointH;
              
                    $Epr4A=fgets($GroupeB1); 
                    $CMG4A=$sommeGAR; 
                    $CMN4A=$sommeNAR; 
                    $CMP4A=$sommePAR;
                    $CBP4A=$CBPAP;
                    $CBC4A=$CBCAP;
                    $Dif4A=$Dif1AP; 
                    $Cpoint4A=$sommePointAR;
                }
                 }else{
            //A determiner
                 }
                 
                             //1er Place aff22          
}else if(($sommePointI>$sommePointA and $sommePointI>$sommePointAR and $sommePointI>$sommePointH) || (($sommePointI>=$sommePointA and $sommePointI>=$sommePointAR and $sommePointI>=$sommePointH) and ($Dif2AP>=$Dif3AP and $Dif2AP>=$Dif1AP and $Dif2AP>=$Dif4AP))){
                    $EprA=fgets($GroupeB2);   
                    $CMGA=$sommeGI;
                    $CMNA=$sommeNI;      
                    $CMPA=$sommePI;
                    $CBPA=$CBP2AP;
                    $CBCA=$CBC2AP; 
                    $Dif1A=$Dif2AP;
                    $CpointA=$sommePointI;
    if(($sommePointA>$sommePointAR and $sommePointA>$sommePointH) || (($sommePointA>=$sommePointAR and $sommePointA>=$sommePointH) and ($Dif3AP>=$Dif3AP and $Dif3AP>=$Dif4AP))){
                      $Epr2A=fgets($GroupeB3); 
                      $CMG2A=$sommeGA; 
                      $CMN2A=$sommeNA; 
                      $CMP2A=$sommePA;
                      $CBP2A=$CBP3AP;
                      $CBC2A=$CBC3AP;
                      $Dif2A=$Dif3AP;
                      $Cpoint2A=$sommePointA;
                      if(($sommePointH>$sommePointAR) || (($sommePointH>=$sommePointAR) and ($Dif4AP>=$Dif1AP))){
                        $Epr3A=fgets($GroupeB4); 
                        $CMG3A=$sommeGH; 
                        $CMN3A=$sommeNH; 
                        $CMP3A=$sommePH;
                        $CBP3A=$CBP4AP;
                        $CBC3A=$CBC4AP;
                        $Dif3A=$Dif4AP;     
                        $Cpoint3A=$sommePointH;
                  
                        $Epr4A=fgets($GroupeB1); 
                        $CMG4A=$sommeGAR; 
                        $CMN4A=$sommeNAR; 
                        $CMP4A=$sommePAR;
                        $CBP4A=$CBPAP;
                        $CBC4A=$CBCAP; 
                        $Dif4A=$Dif1AP;     
                        $Cpoint4A=$sommePointAR;          
                      }else if(($sommePointH<$sommePointAR) || (($sommePointH<=$sommePointAR) and ($Dif1AP>=$Dif4AP))) {
                        $Epr3A=fgets($GroupeB1); 
                        $CMG3A=$sommeGAR; 
                        $CMN3A=$sommeNAR; 
                        $CMP3A=$sommePAR;
                        $CBP3A=$CBPAP;
                        $CBC3A=$CBCAP;
                        $Dif3A=$Dif1AP;    
                        $Cpoint3A=$sommePointAR;
              
                        $Epr4A=fgets($GroupeB4); 
                        $CMG4A=$sommeGH; 
                        $CMN4A=$sommeNH; 
                        $CMP4A=$sommePH;
                        $CBP4A=$CBP4AP;
                        $CBC4A=$CBC4AP;
                        $Dif4A=$Dif4AP; 
                        $Cpoint4A=$sommePointH;
                          }
            }else if(($sommePointH>$sommePointAR and $sommePointH>$sommePointA) || (($sommePointH>=$sommePointAR and $sommePointH>=$sommePointA) and ($Dif4AP>=$DifA1P and $Dif4AP>=$Dif3AP))){
                      $Epr2A=fgets($GroupeB4); 
                      $CMG2A=$sommeGH; 
                      $CMN2A=$sommeNH; 
                      $CMP2A=$sommePH;
                      $CBP2A=$$CBP4AP;
                      $CBC2A=$$CBC4AP;
                      $Dif2A=$Dif4AP;
                      $Cpoint2A=$sommePointH;
                         if(($sommePointA>$sommePointAR) || (($sommePointA>=$sommePointAR) and ($Dif3AP>=$DifA1P))){
                          $Epr3A=fgets($GroupeB3); 
                          $CMG3A=$sommeGA; 
                          $CMN3A=$sommeNA; 
                          $CMP3A=$sommePA;
                          $CBP3A=$CBP3AP;
                          $CBC3A=$CBC3AP;
                          $Dif3A=$Dif3AP;      
                          $Cpoint3A=$sommePointA;
                    
                          $Epr4A=fgets($GroupeB1); 
                          $CMG4A=$sommeGAR; 
                          $CMN4A=$sommeNAR; 
                          $CMP4A=$sommePAR;
                          $CBP4A=$CBPAP;
                          $CBC4A=$CBCAP;
                          $Dif4A=$Dif1AP;   
                          $Cpoint4A=$sommePointAR;
                         }else if(($sommePointA<$sommePointAR) || (($sommePointA<=$sommePointAR) and ($DifA1P>=$Dif3AP))){
                          $Epr3A=fgets($GroupeB1); 
                          $CMG3A=$sommeGAR; 
                          $CMN3A=$sommeNAR; 
                          $CMP3A=$sommePAR;
                          $CBP3A=$CBPAP;
                          $CBC3A=$CBCAP;          
                          $Dif3A=$Dif1AP;
                          $Cpoint3A=$sommePointAR;
                    
                          $Epr4A=fgets($GroupeB3); 
                          $CMG4A=$sommeGA; 
                          $CMN4A=$sommeNA; 
                          $CMP4A=$sommePA;
                          $CBP4A=$CBP3AP;
                          $CBC4A=$CBC3AP; 
                          $Dif4A=$Dif3AP;  
                          $Cpoint4A=$sommePointA;
                       }
            }else if(($sommePointAR>$sommePointH and $sommePointAR>$sommePointA) || (($sommePointAR>=$sommePointH and $sommePointAR>=$sommePointA) and ($DifA1P>=$Dif4AP and $DifA1P>=$Dif3AP))){
                      $Epr2A=fgets($GroupeB1); 
                      $CMG2A=$sommeGAR; 
                      $CMN2A=$sommeNAR; 
                      $CMP2A=$sommePAR;
                      $CBP2A=$CBPAP;
                      $CBC2A=$CBCAP;
                      $Dif2A=$Dif1AP;
                      $Cpoint2A=$sommePointAR;
            
                      if(($sommePointA>$sommePointH) || (($sommePointA>=$sommePointH) and ($Dif3AP>=$Dif4AP))){
                        $Epr3A=fgets($GroupeB3); 
                        $CMG3A=$sommeGA; 
                        $CMN3A=$sommeNA; 
                        $CMP3A=$sommePA;
                        $CBP3A=$CBP3AP;
                        $CBC3A=$CBC3AP;
                        $Dif3A=$Dif3AP;    
                        $Cpoint3A=$sommePointA;
                  
                        $Epr4A=fgets($GroupeB4); 
                        $CMG4A=$sommeGH; 
                        $CMN4A=$sommeNH; 
                        $CMP4A=$sommePH;
                        $CBP4A=$CBP4AP;
                        $CBC4A=$CBC4AP;
                        $Dif4A=$Dif4AP;
                        $Cpoint4A=$sommePointH;
                      }else if(($sommePointA<$sommePointH) || (($sommePointA<=$sommePointH) and ($Dif4AP>=$Dif3AP))){
                        $Epr3A=fgets($GroupeB4); 
                        $CMG3A=$sommeGH; 
                        $CMN3A=$sommeNH; 
                        $CMP3A=$sommePH;
                        $CBP3A=$CBP4AP;
                        $CBC3A=$CBC4AP;
                        $Dif3A=$Dif4AP;
                        $Cpoint3A=$sommePointH;
                  
                        $Epr4A=fgets($GroupeB3); 
                        $CMG4A=$sommeGA; 
                        $CMN4A=$sommeNA; 
                        $CMP4A=$sommePA;
                        $CBP4A=$CBP3AP;
                        $CBC4A=$CBC3AP; 
                        $Dif4A=$Dif3AP;     
                        $Cpoint4A=$sommePointA;
                    }
                     }else{
                //A determiner
                     }
                     
                            //aff44 1er place              
        }else if(($sommePointH>$sommePointA and $sommePointH>$sommePointI and $sommePointH>$sommePointAR) || (($sommePointH>=$sommePointA and $sommePointH>=$sommePointI and $sommePointH>=$sommePointAR) and ($Dif4AP>=$Dif3AP and $Dif4AP>=$Dif2AP and $Dif4AP>=$Dif1AP))){
                        $EprA=fgets($GroupeB4);   
                        $CMGA=$sommeGH;
                        $CMNA=$sommeNH;      
                        $CMPA=$sommePH;
                        $CBPA=$CBP4AP;
                        $CBCA=$CBC4AP; 
                        $Dif1A=$Dif4AP;
                        $CpointA=$sommePointH;
                if(($sommePointA>$sommePointI and $sommePointA>$sommePointAR) || (($sommePointA>=$sommePointI and $sommePointA>=$sommePointAR) and ($Dif3AP>=$Dif2AP and $Dif3AP>=$Dif1AP))){
                          $Epr2A=fgets($GroupeB3); 
                          $CMG2A=$sommeGA; 
                          $CMN2A=$sommeNA; 
                          $CMP2A=$sommePA;
                          $CBP2A=$CBP3AP;
                          $CBC2A=$CBC3AP;
                          $Dif2A=$Dif3AP;
                          $Cpoint2A=$sommePointA;
                          if(($sommePointAR>$sommePointI) || (($sommePointAR>=$sommePointI) and($Dif1AP>=$Dif2AP))) {
                            $Epr3A=fgets($GroupeB1); 
                            $CMG3A=$sommeGAR; 
                            $CMN3A=$sommeNAR; 
                            $CMP3A=$sommePAR;
                            $CBP3A=$CBPAP;
                            $CBC3A=$CBCAP;
                            $Dif3A=$Dif1AP;
                            $Cpoint3A=$sommePointAR;
                      
                            $Epr4A=fgets($GroupeB2); 
                            $CMG4A=$sommeGI; 
                            $CMN4A=$sommeNI; 
                            $CMP4A=$sommePI;
                            $CBP4A=$CBP2AP;
                            $CBC4A=$CBC2AP;
                            $Dif4A=$Dif2AP; 
                            $Cpoint4A=$sommePointI;          
                          }else if(($sommePointAR<$sommePointI) || (($sommePointAR<=$sommePointI) and ($Dif2AP>=$Dif1AP))){
                          $Epr3A=fgets($GroupeB2); 
                            $CMG3A=$sommeGI; 
                            $CMN3A=$sommeNI; 
                            $CMP3A=$sommePI;
                            $CBP3A=$CBP2AP;
                            $CBC3A=$CBC2AP;
                            $Dif3A=$Dif2AP;
                            $Cpoint3A=$sommePointI;
                  
                            $Epr4A=fgets($GroupeB1); 
                            $CMG4A=$sommeGAR; 
                            $CMN4A=$sommeNAR; 
                            $CMP4A=$sommePAR;
                            $CBP4A=$CBPAP;
                            $CBC4A=$CBCAP; 
                            $Dif4A=$Dif1AP; 
                            $Cpoint4A=$sommePointAR;
                              }
}else if(($sommePointAR>$sommePointI and $sommePointAR>$sommePointA) || (($sommePointAR>=$sommePointI and $sommePointAR>=$sommePointA) and ($Dif1AP>=$Dif2AP and $Dif1AP>=$Dif3AP))){
                          $Epr2A=fgets($GroupeB1); 
                          $CMG2A=$sommeGAR; 
                          $CMN2A=$sommeNAR; 
                          $CMP2A=$sommePAR;
                          $CBP2A=$CBPAP;
                          $CBC2A=$CBCAP;
                          $Dif2A=$Dif1AP;  
                          $Cpoint2A=$sommePointAR;
    if(($sommePointA>$sommePointI) || (($sommePointA>=$sommePointI) and ($Dif3AP>=$Dif2AP))){
                              $Epr3A=fgets($GroupeB3); 
                              $CMG3A=$sommeGA; 
                              $CMN3A=$sommeNA; 
                              $CMP3A=$sommePA;
                              $CBP3A=$CBP3AP;
                              $CBC3A=$CBC3AP;             
                              $Dif3A=$Dif3AP;
                              $Cpoint3A=$sommePointA;
                        
                              $Epr4A=fgets($GroupeB2); 
                              $CMG4A=$sommeGI; 
                              $CMN4A=$sommeNI; 
                              $CMP4A=$sommePI;
                              $CBP4A=$CBP2AP;
                              $CBC4A=$CBC2AP;
                              $Dif4A=$Dif2AP;
                              $Cpoint4A=$sommePointI;
                             
          }else if(($sommePointA<$sommePointI) ||(($sommePointA<=$sommePointI) and ($Dif2AP>=$Dif3AP))){
                              $Epr3A=fgets($GroupeB2); 
                              $CMG3A=$sommeGI; 
                              $CMN3A=$sommeNI; 
                              $CMP3A=$sommePI;
                              $CBP3A=$CBP2AP;
                              $CBC3A=$CBC2AP;
                              $Dif3A=$Dif2AP;
                              $Cpoint3A=$sommePointI;
                        
                              $Epr4A=fgets($GroupeB3); 
                              $CMG4A=$sommeGA; 
                              $CMN4A=$sommeNA; 
                              $CMP4A=$sommePA;
                              $CBP4A=$CBP3AP;
                              $CBC4A=$CBC3AP;
                              $Dif4A=$Dif3AP;   
                              $Cpoint4A=$sommePointA;
          }
          }else if(($sommePointI>$sommePointAR and $sommePointI>$sommePointA) || (($sommePointI>=$sommePointAR and $sommePointI>=$sommePointA) and ($Dif2AP>=$Dif1AP and $Dif2AP>=$Dif3AP))){
                          $Epr2A=fgets($GroupeB2); 
                          $CMG2A=$sommeGI; 
                          $CMN2A=$sommeNI; 
                          $CMP2A=$sommePI;
                          $CBP2A=$CBP2AP;
                          $CBC2A=$CBC2AP;
                          $Dif2A=$Dif2AP;  
                          $Cpoint2A=$sommePointI;
                
    if(($sommePointA>$sommePointAR) || (($sommePointA>=$sommePointAR) and ($Dif3AP>=$Dif1AP))){
                            $Epr3A=fgets($GroupeB3); 
                            $CMG3A=$sommeGA; 
                            $CMN3A=$sommeNA; 
                            $CMP3A=$sommePA;
                            $CBP3A=$CBP3AP;
                            $CBC3A=$CBC3AP;
                            $Dif3A=$Dif3AP;
                            $Cpoint3A=$sommePointA;
                      
                            $Epr4A=fgets($GroupeB1); 
                            $CMG4A=$sommeGAR; 
                            $CMN4A=$sommeNAR; 
                            $CMP4A=$sommePAR;
                            $CBP4A=$CBPAP;
                            $CBC4A=$CBCAP; 
                            $Dif4A=$Dif1AP;
                            $Cpoint4A=$sommePointAR;
          }else if(($sommePointA<$sommePointAR) || (($sommePointA<=$sommePointAR) and ($Dif1AP>=$Dif3AP))){
                            $Epr3A=fgets($GroupeB1); 
                            $CMG3A=$sommeGAR; 
                            $CMN3A=$sommeNAR; 
                            $CMP3A=$sommePAR;
                            $CBP3A=$CBPAP;
                            $CBC3A=$CBCAP;
                            $Dif3A=$Dif1AP;
                            $Cpoint3A=$sommePointAR;
                      
                            $Epr4A=fgets($GroupeB3); 
                            $CMG4A=$sommeGA; 
                            $CMN4A=$sommeNA; 
                            $CMP4A=$sommePA;
                            $CBP4A=$CBP3AP;
                            $CBC4A=$CBC3AP;
                            $Dif4A=$Dif3AP;     
                            $Cpoint4A=$sommePointA;
          }
          }else{
                    //A determiner
          }
        }
        //Fermeture des fichiers du Groupe B
        fclose($GroupeB1);
        fclose($GroupeB2);
        fclose($GroupeB3);
        fclose($GroupeB4);
          ?>
      <center>
        <h2>Le Classement et Les Statistiques du Groupe A</h2><br>


        <!-- Tableau D'affichage des equipes par Position -->
<form method="get" action="Demiefinal.php">
<table border="3">
<thead>
<tr bgcolor="gray">
<th colspan="10">Groupe A</th>
</tr>
<tr>
<th>

</th>
<th>
<strong>MJ</Strong>
</th>
<th>
<strong>MG</Strong>
</th>
<th>
<strong>MN</Strong>
</th>
<th>
<strong>MP</Strong>
</th>
<th>
<strong>BP</Strong>
</th>
<th>
  <strong>BC</Strong>
</th>
<th>
<strong>Dif</Strong>
</th>
<th>
<strong>Point</Strong>
</th>
</tr>
</thead>
<tbody>
</tbody>
<tr>
<td>
<?php
echo $Epr;
?>
</td>
<td>
3
</td>
<td>
<?php
echo $CMG;
?>
</td>
<td>
<?php
echo $CMN;
?>
</td>
<td>
<?php
echo $CMP;
?>
</td>
<td>
<?php
echo $CBP;
?>
</td>
<td>
<?php
echo $CBC;
?>
</td>
<td>
<?php
echo $Dif1;
?>
</td>
<td>
<?php
echo $Cpoint;
?>
</td>
</tr>
<tr>
<td>
<?php
echo $Epr2;
?>
</td>
<td>
3
</td>
<td>
<?php
echo $CMG2;
?>
</td>
<td>
<?php
echo $CMN2;
?>
</td>
<td>
<?php
echo $CMP2;
?>
</td>
<td>
<?php
echo $CBP2;
?>
</td>
<td>
<?php
echo $CBC2;
?>
</td>
<td>
<?php
echo $Dif2;
?>
</td>
<td>
<?php
echo $Cpoint2;
?>
</td>
</tr>

<tr>
<td class="elimine">
<?php
echo $Epr3;
?>
</td>
<td class="elimine">
3
</td>
<td class="elimine">
<?php
echo $CMG3;
?>
</td>
<td class="elimine">
<?php
echo $CMN3;
?>
</td>
<td class="elimine">
<?php
echo $CMP3;
?>
</td>
<td class="elimine">
<?php
echo $CBP3;
?>
</td>
<td class="elimine">
<?php
echo $CBC3;
?>
</td>
<td class="elimine">
<?php
echo $Dif3;
?>
</td>
<td class="elimine">
<?php
echo $Cpoint3;
?>
</td>
</tr>

<tr >
<td class="elimine">
<?php
echo $Epr4;
?>
</td>
<td class="elimine">
3
</td>
<td class="elimine">
<?php
echo $CMG4;
?>
</td>
<td class="elimine">
<?php
echo $CMN4;
?>
</td>
<td class="elimine">
<?php
echo $CMP4;
?>
</td>
<td class="elimine">
<?php
echo $CBP4;
?>
</td>
<td class="elimine">
<?php
echo $CBC4;
?>
</td>
<td class="elimine">
<?php
echo $Dif4;
?>
</td>
<td class="elimine">
<?php
echo $Cpoint4;
?>
</td> 
</tr>
</table>


<br/>
<br/>
<!-- //Tableau Pour les Classements -->
<h2>Le Classement et Les Statistiques du Groupe B</h2><br>
<table border="3">
<thead>
<tr bgcolor="gray">
<th colspan="10" >GROUPE B</th>
</tr>
<tr>
<th>

</th>
<th>
<strong>MJ</Strong>
</th>
<th>
<strong>MG</Strong>
</th>
<th>
<strong>MN</Strong>
</th>
<th>
<strong>MP</Strong>
</th>
<th>
<strong>BP</Strong>
</th>
<th>
  <strong>BC</Strong>
</th>
<th>
<strong>Dif</Strong>
</th>
<th>
<strong>Point</Strong>
</th>
</tr>
</thead>
<tbody>
</tbody>
<tr>
<td>
<?php
echo $EprA;
?>
</td>
<td>
3
</td>
<td>
<?php
echo $CMGA;
?>
</td>
<td>
<?php
echo $CMNA;
?>
</td>
<td>
<?php
echo $CMPA;
?>
</td>
<td>
<?php
echo $CBPA;
?>
</td>
<td>
<?php
echo $CBCA;
?>
</td>
<td>
<?php
echo $Dif1A;
?>
</td>
<td>
<?php
echo $CpointA;
?>
</td>
</tr>
<tr>
<td>
  <?php
echo $Epr2A;
?>
</td>
<td>
3
</td>
<td>
<?php
echo $CMG2A;
?>
</td>
<td>
<?php
echo $CMN2A;
?>
</td>
<td>
<?php
echo $CMP2A;
?>
</td>
<td>
<?php
echo $CBP2A;
?>
</td>
<td>
<?php
echo $CBC2A;
?>
</td>
<td>
<?php
echo $Dif2A;
?>
</td>
<td>
<?php
echo $Cpoint2A;
?>
</td>
</tr>
<tr>
<td class="elimine">
<?php
echo $Epr3A;
?>
</td>
<td class="elimine">
3
</td>
<td class="elimine">
<?php
echo $CMG3A;
?>
</td>
<td class="elimine">
<?php
echo $CMN3A;
?>
</td>
<td class="elimine">
<?php
echo $CMP3A;
?>
</td>
<td class="elimine">
<?php
echo $CBP3A;
?>
</td>
<td class="elimine">
<?php
echo $CBC3A;
?>
</td>
<td class="elimine">
<?php
echo $Dif3A;
?>
</td>
<td class="elimine">
<?php
echo $Cpoint3A;
?>
</td>
</tr>
<tr>
<td class="elimine">
<?php
echo $Epr4A;
?>
</td>
<td class="elimine">
3
</td>
<td class="elimine">
<?php
echo $CMG4A;
?>
</td>
<td class="elimine">
<?php
echo $CMN4A;
?>
</td>
<td class="elimine">
<?php
echo $CMP4A;
?>
</td>
<td class="elimine">
<?php
echo $CBP4A;
?>
</td>
<td class="elimine">
<?php
echo $CBC4A;
?>
</td>
<td class="elimine">
<?php
echo $Dif4A;
?>
</td>
<td class="elimine">
<?php
echo $Cpoint4A;
?>
</td> 
</tr>
</table>
<br/>
<br/>
<div class="lance">
<button type="submit" name="DMF" value="Demie_Final">1/2 final</button>
      </div>
</form>

</center>

<?php
$G1=fopen("Fichier3/premierA.txt","w");
fwrite($G1,$Epr);
fclose($G1);

$G11=fopen("Fichier3/DeuxiemeA.txt","w");
fwrite($G11,$Epr2);
fclose($G11);

$G2=fopen("Fichier3/PremierB.txt","w");
fwrite($G2,$EprA);
fclose($G2);

$G22=fopen("Fichier3/DeuxiemeB.txt","w");
fwrite($G22,$Epr2A);
fclose($G22);
 }
 ?> 

</body>

</html>