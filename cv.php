<?php
      /* use Dompdf\Dompdf;
   trait pdf{ 
        public function genepdf(){   
     require_once 'C:\Site\xampp\htdocs\Tp_php\dompdf\dompdf\autoload.inc.php';
     $dompdf = new Dompdf();
            include 'cv.php';
            ob_start();
            require_once('Generer.php');
            $html= ob_get_contents();
            ob_end_clean();
            $dompdf->loadHtml($html);
            $dompdf->render();
            $fichier='Mon CV';
            $dompdf->stream($fichier);
        }
    }*/
    class cv{

    public function ajoutexperience(){
        if(isset($_GET['ajout_experience'])){
            echo'<br>';
                        echo' <label for="">Années</label> &nbsp;<br>
            <input type="date" required><br>
            <label for="">Poste</label> &nbsp;<br>
            <input type="text" required><br>
            <label for="">Description</label> &nbsp;<br>
            <input type="text" id="experiences"  name="experience" required><br>';
            echo'<br>';
        }
       
    }

    public function ajoutcompetence(){
        if(isset($_GET['ajout_competence'])){
            echo'<br>';
                        echo'<input type="text" name="competence" required><br>';
            echo'<br>';
        }
       }

       public function ajoutFormation(){
        if(isset($_GET['ajoutformation'])){
            echo'<br>';
                        echo'<label for="">Années</label> &nbsp;<br>
                        <input type="date"><br>
                        <label for="">Formation</label> &nbsp;<br>
                        <input type="text" required><br>
                        <label for="">Description</label> &nbsp;<br>
                        <input type="text" name="formation" required><br>';
            echo'<br>';
        }
       }
       public function ajoutinteret(){
        if(isset($_GET['inte'])){
            echo'<br>';
                        echo'&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp; <input type="text"  name="interet" required><br>';
            echo'<br>';
        }
       }
      // use pdf;
       
}
$cv=new cv;
?>