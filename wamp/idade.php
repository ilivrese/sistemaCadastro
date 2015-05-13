<?php




$auxnascimento = explode ("-", $nascimento);
$auxhoje = explode ("-", $hoje);

$diferenca = $auxhoje[0] - $auxnascimento[0];


if ($diferenca < 12){
 $a ++;
}
 else{
 if ($diferenca < 18 )   {
 $b ++;
 }
 else {
      if ($diferenca < 36){
      $c ++;
      }
      else {
           if ($diferenca < 60){
           $d ++;
           }
           else {
                 if ($nascimento == '0000-00-00'){
                      $invalido ++;
                        }
                          else{
                               $e ++;
                                  }
           }
      }
 }
}





?>
