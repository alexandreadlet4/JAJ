<?php
//Recuperation des scores de la petite final
if(isset ($_POST['PetiteFinal'])){
$scorePF1=$_POST['scorePF1']; $scorePF2=$_POST['scorePF2'];
if($scorePF1==$scorePF2){
include 'petiteFinal.php';
?>
<!-- Message d'alert -->
<script>
    alert ("impossible les scores ne doit pas egaux");
</script>
<?php
}else{
    //inclure la page final
    include 'Final.php';
    //Test score
 if($scorePF1>$scorePF2){
    $PetiteF1=fopen("Fichier4/PetiteFinal1.txt","r");
    $PetiteF1=fgets($PetiteF1);

    $V22=fopen("Fichier5/GagnantPetiteFinal.txt","w");
     fwrite($V22,$PetiteF1);
     fclose($V22);

     $PetiteF2=fopen("Fichier4/PetiteFinal2.txt","r");
    $PetiteF2=fgets($PetiteF2);

    $V222=fopen("Fichier5/PerdantPetiteFinal.txt","w");
     fwrite($V222,$PetiteF2);
     fclose($V222);
}else{
    $PetiteF1=fopen("Fichier4/PetiteFinal1.txt","r");
    $PetiteF1=fgets($PetiteF1);

    $V22=fopen("Fichier5/PerdantPetiteFinal.txt","w");
     fwrite($V22,$PetiteF1);
     fclose($V22);

     $PetiteF2=fopen("Fichier4/PetiteFinal2.txt","r");
    $PetiteF2=fgets($PetiteF2);

    $V222=fopen("Fichier5/GagnantPetiteFinal.txt","w");
     fwrite($V222,$PetiteF2);
     fclose($V222);
}
}
}
?>