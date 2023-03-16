<?php include 'cv.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de CV</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<style>
    #competences{
        height: 200px;
        width: 400px;
    }
    #profil{
        height: 200px;
        width: 400px;
    }
    #soumettre{
        padding: 20px;
    }
    h2{
        text-align: center;
    }
    #experiences{
        height: 200px;
        width: 400px;
    }
    #formation{
        height: 200px;
        width: 400px;
    }
    #centre{
        height: 200px;
        width: 400px; 
    }
    body{
        background-color: aliceblue;
    }
    .container{
        background-color: darkslategray;
    }
</style>
<body>
    <div class="container">
        <h2>Generateur de CV</h2>
        <form action="Generer.php" method="GET">
            <div class="row">
                <div class="col-sm-4"></div>
                 <div class="col-sm-4">
                     <h3>Informations Personelles</h3>
                     <label for="">Nom</label>  &nbsp; &nbsp; &nbsp;
                     <input type="text" name="nom" required><br><br>
                     <label for="">Prenom</label> &nbsp;
                     <input type="text"  name="prenom" required><br><br>
                     <label for="">Age</label> &nbsp; &nbsp; &nbsp; &nbsp;
                     <input type="number"  name="age" required><br><br>
                     <label for="">Adresse</label> &nbsp; 
                     <input type="text"  name="addresse" required><br><br>
                     <label for="">Contact</label> &nbsp;
                     <input type="text"  name="contact" required>
                 </div>  
                 <div class="col-sm-4"></div>
             </div>
             <div class="row">
                 <div class="row">
                     <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <h3>Langues</h3>
                          <label for="">Langues</label> &nbsp;
                          <input type="text" name="langue" required><br> <br>
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp;  &nbsp; <input type="text" name="langue" required><br>

                      </div>
                      <div class="col-sm-4"></div>
                  </div>
             </div>
             <div class="row">
                 <div class="row">
                     <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <h3>Votre profil</h3>
                          <label for="">Profil</label> &nbsp;
                          <input type="text" id="profil"  name="profil" required><br>
                      </div>
                      <div class="col-sm-4"></div>
                  </div>
             </div>
             <div class="row">
                 <div class="row">
                     <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <h3>Votre experiences professionnelles</h3>
                          <label for="">Expériences professionnelles</label> &nbsp;<br>
                          <label for="">Années</label> &nbsp;<br>
                          <input type="date" name="annee" required><br>
                          <label for="">Poste</label> &nbsp;<br>
                          <input type="text" name="poste" required><br>
                          <label for="">Description</label> &nbsp;<br>
                          <input type="text" id="experiences"  name="experience" required><br>
                          <?php $cv->ajoutexperience(); ?>
                          <button name="ajout_experience">ajouter</button><br>
                         
                      </div>
                      <div class="col-sm-4"></div>
                  </div>
             </div>
             <div class="row">
                 <div class="row">
                     <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <h3>Mettez vos Competences</h3>
                          <label for="">Competences</label> &nbsp;<br>
                          <input type="text" name="competence" required><br>
                          <?php $cv->ajoutcompetence();  $cv->ajoutcompetence(); ?>
                          <button name="ajout_competence">ajouter</button><br>
                      </div>
                      <div class="col-sm-4"></div>
                  </div>
             </div>
             <div class="row">
                 <div class="row">
                     <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <h3>Vos Formations</h3>
                          <label for="">Années</label> &nbsp;<br>
                          <input type="date" name="anne" required><br>
                          <label for="">Formation</label> &nbsp;<br>
                          <input type="text" name="formation" required><br>
                          <label for="">Description</label> &nbsp;<br>
                          <input type="text" name="formation" required><br>
                          <?php $cv->ajoutFormation(); ?>
                          <button name="ajoutformation">ajouter</button><br>
                      </div>
                      <div class="col-sm-4"></div>
                  </div>
             </div>
             <div class="row">
                 <div class="row">
                     <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <h3>Vos centres d'intérêts</h3>
                          <label for="">Centre d'intérêts</label> &nbsp;
                          <input type="text"  name="interet" required><br>
                          <?php $cv->ajoutinteret(); ?>
                          <button name="inte">ajouter</button><br>
                          
                      </div>
                      <div class="col-sm-4"></div>
                  </div>
             </div>
        </form>
        <div class="row">
            <div class="col-sm-4"></div>
                 <div class="col-sm-4"  id="soumettre">
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; <!--<a href="Generer.php"><input type="submit"  name="submit"></a>-->
                    <button  name="submit">Valider</button>
                    <?php
                    if(isset($_GET['submit']) & empty($nom) || empty($_GET['nom']) || empty($_GET['prenom']) || empty($_GET['age'])|| empty($_GET['addresse'])|| empty($_GET['contact'])|| empty($_GET['formation'])
                    || empty($_GET['experience'])|| empty($_GET['profil'])|| empty($_GET['competence'])
                     || empty($_GET['interet'])|| empty($_GET['poste'])|| empty($_GET['annee'])|| empty($_GET['anne'])){
                    echo'<div class="alert alert-danger" role="alert">
                    Hola....veuillez remplir tous les champs avant de soumettre le cv
                   </div>';
                  }else{
                    echo' <button  name="submit">Continuer</button>';
                  }
                 ?>
                 </div>
                 <div class="col-sm-4"></div>
        </div>
        
    </div>
</body>
</html>