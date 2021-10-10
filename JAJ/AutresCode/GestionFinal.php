
    
    <?php
    //Recuperation des scores de la final
if(isset ($_POST['Champion'])){
    //Si score egaux inclure la page final a nouveau
$scoreequipe1=$_POST['scoreequipe1']; $scoreequipe2=$_POST['scoreequipe2'];
if($scoreequipe1==$scoreequipe2){
    //Confirmation de l'inclusion
include 'Final.php';
?>
<!-- Message d'alert -->
<script>
alert ('Impossible de valider les scores, car ils sont egaux');    
</script>

<?php
}else{
    //S les scores sont differents
 if($scoreequipe1>$scoreequipe2){
    $PetiteF1=fopen("Fichier4/Final1.txt","r");
    $PetiteF1=fgets($PetiteF1);

    $V22=fopen("Fichier5/GagnantFinal.txt","w");
     fwrite($V22,$PetiteF1);
     fclose($V22);

     $PetiteF2=fopen("Fichier4/Final2.txt","r");
    $PetiteF2=fgets($PetiteF2);

    $V222=fopen("Fichier5/PerdantFinal.txt","w");
     fwrite($V222,$PetiteF2);
     fclose($V222);
}else{
    $PetiteF1=fopen("Fichier4/Final1.txt","r");
    $PetiteF1=fgets($PetiteF1);

    $V22=fopen("Fichier5/PerdantFinal.txt","w");
     fwrite($V22,$PetiteF1);
     fclose($V22);

     $PetiteF2=fopen("Fichier4/Final2.txt","r");
    $PetiteF2=fgets($PetiteF2);

    $V222=fopen("Fichier5/GangantFinal.txt","w");
     fwrite($V222,$PetiteF2);
     fclose($V222);
} 
//Inclure la page Fin
include 'Fin.php';    
}
}
    ?>

