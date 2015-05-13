<?php

     /*
 $menor12 = 0;
 $12a16  = 0;
 $acima16 = 0;
 $invalido = 0;

   */
$terceiraidade = 0;
$hoje = date("Y-m-d", time());
$auxnascimento = explode ("-", $datanascimento);
$auxhoje = explode ("-", $hoje);




//inicio
//*



if ($auxnascimento[1] < $auxhoje[1]){
  $diferenca = $auxhoje[0] - $auxnascimento[0];
}
else{

  if ($auxnascimento[1] > $auxhoje[1]){
       $diferenca = $auxhoje[0] - $auxnascimento[0] - 1;
  }
  else{
   if ($auxnascimento[2] > $auxhoje[2]){
    $diferenca = $auxhoje[0] - $auxnascimento[0] - 1;
   }
   else{
    $diferenca = $auxhoje[0] - $auxnascimento[0];
   }
   
  }
}
   
 
 
//*/
//fim



//$diferenca = $auxhoje[0] - $auxnascimento[0] ;







if ($diferenca < 12){
 //$menor12 ++;
 echo "<b>Idade:</b> ".$diferenca.". <font color='red'><b>Necessário a companhia de um dos pais.</b></font><br>";
}
 else{
 if ($diferenca < 16 )   {
 //$12a16 ++;
  echo "<b>Idade:</b> ".$diferenca.". <font color='red'><b>Necessário autorização de um dos pais.</b></font><br>";
 }
 else {
      if ($diferenca < 60){
   //  $acima16 ++;
     echo "<b>Idade:</b> ".$diferenca."<br>";
      }
      else {
           if ($datanascimento == '0000-00-00'){
             echo "<b>Idade:</b> ".$diferenca.". <font color='red'><b>DATA DE NASCIMENTO INVÁLIDA.</b></font><br>";
                   //   $invalido ++;
                        }
                          else{
                          $terceiraidade =1;
                              echo "<b>Idade:</b> ".$diferenca.". <font color='red'><b>Preferencial por idade.</b></font><br>";
                                  }
           }
      }
 }






?>
