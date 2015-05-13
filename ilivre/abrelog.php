 <?php


 
   $hoje = date("Y-m-d", time());
   $nomelog = "C:\\xampp\\htdocs\\ilivre\\log\\".$hoje.".txt";
   $arquivolog = fopen($nomelog, 'a');
   $horalog = date("G:i:s",time());
   $headlog = "[".$horalog."] ";
   
   ?>
