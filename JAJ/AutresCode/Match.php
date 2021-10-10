<?php 
//Recuperation des scores du demie_Final
if(isset ($_POST['DemieFinal'])){
$scoreDF1=$_POST['scoreDF1']; $scoreDF11=$_POST['scoreDF11'];
$scoreDF2=$_POST['scoreDF2']; $scoreDF22=$_POST['scoreDF22'];
//Test Si score Egaux
if($scoreDF1==$scoreDF11 || $scoreDF2 ==$scoreDF22){
include 'DemieFinal.php';
?>
<!-- Message avec Script -->
<script>
  alert ('Verification des score'); 
</script>
<?php

//Si score Non egaux
}else{
  
                  //Petite final 1
  if($scoreDF1>$scoreDF11){
    //Ouverture du fichier en mode Lecture
    $PetiteF1=fopen("Fichier3/DeuxiemeB.txt","r");
    $PetiteF1=fgets($PetiteF1);

    //Creation et ouverture du fichier 
     $V22=fopen("Fichier4/PetiteFinal1.txt","w");
    // ecrire dans le fichier
     fwrite($V22,$PetiteF1);
     fclose($V22);
//Idem
     $Final=fopen("Fichier3/premierA.txt","r");
     $Final=fgets($Final);
 
      $Vvv=fopen("Fichier4/Final1.txt","w");
      fwrite($Vvv,$Final);
      fclose($Vvv);
    
  }else{
    //Idem
    $PetiteF1=fopen("Fichier3/premierA.txt","r");
    $PetiteF1=fgets($PetiteF1);
//Idem
    $V22=fopen("Fichier4/PetiteFinal1.txt","w");
     fwrite($V22,$PetiteF1);
     fclose($V22);
//Idem
     $Final=fopen("Fichier3/DeuxiemeB.txt","r");
    $Final=fgets($Final);

    $Vvv=fopen("Fichier4/Final1.txt","w");
     fwrite($Vvv,$Final);
     fclose($Vvv);
  }
                 //Petite Final equipe 2
                 //Idem
  if($scoreDF2>$scoreDF22){
    //Idem
    $PetiteF2=fopen("Fichier3/DeuxiemeA.txt","r");
    $PetiteF2=fgets($PetiteF2);
//Idem
     $V222=fopen("Fichier4/PetiteFinal2.txt","w");
     fwrite($V222,$PetiteF2);
     fclose($V222);
//Idem
     $Final2=fopen("Fichier3/premierB.txt","r");
     $Final2=fgets($Final2);
 //Idem
      $Vaaa=fopen("Fichier4/Final2.txt","w");
      fwrite($Vaaa,$Final2);
      fclose($Vaaa);
  }else{
    $PetiteF2=fopen("Fichier3/premierB.txt","r");
    $PetiteF2=fgets($PetiteF2);

    $V222=fopen("Fichier4/PetiteFinal2.txt","w");
     fwrite($V222,$PetiteF2);
     fclose($V222);

     $Final2=fopen("Fichier3/DeuxiemeA.txt","r");
    $Final2=fgets($Final2);

    $Vaaa=fopen("Fichier4/Final2.txt","w");
     fwrite($Vaaa,$Final2);
     //Fermeture du fichier
     fclose($Vaaa);
  }
  //Inclure la page PetiteFinal
  include 'petiteFinal.php';
}


}
?>