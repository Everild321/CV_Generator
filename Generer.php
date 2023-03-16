<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<style>
    #left{
        background-color: black;
        color: aliceblue;
    }

    #right{
        background-color: whitesmoke;
    }
    h4{
        text-decoration: underline;
    }
    h2{
        text-decoration: underline;
    }
</style>
<body>
    <?php 
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
     $age=$_GET['age'];
     $addresse=$_GET['addresse'];
     $contact=$_GET['contact'];
     $profil=$_GET['profil'];
     $experience=$_GET['experience'];
     $competence=$_GET['competence'];
     $formation=$_GET['formation'];
     $interet=$_GET['interet'];
     $annee=$_GET['annee'];
     $poste=$_GET['poste'];
     $anne=$_GET['anne'];

    
     $file1="C:\\Site\\xampp\\htdocs\\Tp_php\\info.txt";
     $filew1= fopen("$file1",'a');
      fwrite($filew1,$nom."\n");
      fwrite($filew1,$prenom."\n");
      fwrite($filew1,$age."\n");
      fwrite($filew1,$addresse."\n");
      fwrite($filew1,$contact."\n");
      $file2="C:\\Site\\xampp\\htdocs\\Tp_php\\competence.txt";
      $filew2= fopen("$file2",'a');
       fwrite($filew2,$competence."\n");
       $file3="C:\\Site\\xampp\\htdocs\\Tp_php\\experience.txt";
       $filew3= fopen("$file3",'a');
        fwrite($filew3,$annee."\n");
        fwrite($filew3,$poste."\n");
        fwrite($filew3,$experience."\n");
        $file4="C:\\Site\\xampp\\htdocs\\Tp_php\\formation.txt";
        $filew4= fopen("$file4",'a');
         fwrite($filew4,$anne."\n");
         fwrite($filew4,$formation."\n");
         $file5="C:\\Site\\xampp\\htdocs\\Tp_php\\inte.txt";
         $filew5= fopen("$file3",'a');
          fwrite($filew5, $interet."\n");
         $read1=file($file1);
         $read2=file($file2);
         $read3=file($file3);
         $read4=file($file4);
         $read5=file($file5);
       
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" id="left">
                <h4>Informations Personnnelles</h4>
            <?php
                    for($i=0;$i<count($read1);$i++){
                        echo'<label>'.$read1[$i].'</label>';
                        echo '<br>';
                    } 
                    
            ?>  
    
                <h4>Langues</h4>
            </div>
            <div class="col-sm-8" id="right">
                <h2>Profil</h2>
                <h2>Experience professionnelles</h2>
                <?php
                    for($i=0;$i<count($read3);$i++){
                        echo'<label>'.$read3[$i].'</label>';
                        echo '<br>';
                    } 
            ?>  
                <h2>Competences</h2>
                <?php
                    for($i=0;$i<count($read2);$i++){
                        echo'<label>'.$read2[$i].'</label>';
                        echo '<br>';
                    } 
            ?>  
                <h2>Education</h2>
                <?php
                    for($i=0;$i<count($read4);$i++){
                        echo'<label>'.$read4[$i].'</label>';
                        echo '<br>';
                    } 
            ?>  
                <h2>Centre d'Intérêts</h2>
                <?php
                    for($i=0;$i<count($read5);$i++){
                        echo'<label>'.$read5[$i].'</label>';
                        echo '<br>';
                    } 
            ?>  
            </div>
        </div>
       <form>
       <a href="cvgenerer.php">Generer PDF</a>
       </form>
        
    </div>
</body>
</html>