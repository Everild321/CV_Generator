<?php
 use Dompdf\Dompdf;
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
?>