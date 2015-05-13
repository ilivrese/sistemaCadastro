

<html>
<head><title></title></head>
<body link="blue" vlink="blue">


<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());
include "conexao.php";

 if ($conectou) {



 $pesquisa = "select data from agenda order by data desc";
  $res = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($res);
  $data = $dados['data'];
  print_r($data); echo "<br>";
  print_r($hoje); echo "<br>";
  $flag = 0;
 //echo "LOOP =========<br>";
 while ($flag == 0){
 //$i=0;
 //while( $i < count($dados) )
  $proximodia = $data;
  
  $dados = mysql_fetch_array($res);
  $data = $dados['data'];
  //print_r($data); echo "<br>";
  //print_r($proximodia); echo "<br>";
 	if($data == $hoje){
 		$flag = 1;
 		}
  //echo "--------------------<br>";
 }//end while
//*/

$stgsql00 = "update infos set valor='$proximodia' where parametro='proximodia'";
   $res00 = mysql_query($stgsql00, $conec);




  $pesquisa = "select tipo from agenda where data = '$hoje'";
  $resposta = mysql_query($pesquisa,$conec);
  
  //echo("resposta: ");print_r($resposta);     echo("<br>");
  $dados = mysql_fetch_array($resposta);
  //echo("dados: ");print_r($dados);        echo("<br>");
  $atipo = mysql_num_rows($resposta);
  //echo("atipo: ");print_r($atipo);                   echo("<br>");
  $tipo = $dados['tipo'];
  //echo("<br>tipo de dados: <br>");
  //print_r($tipo);
  //echo("<br>----------<br>");
  
  $pesquisa0 = "select horarios from tiposdeagenda where tipo = '$tipo'";
  $resposta0 = mysql_query($pesquisa0,$conec);
  $dados0 = mysql_fetch_array($resposta0);
  $ahorarios = mysql_num_rows($resposta0);
  $horarios = $dados0['horarios'];

  

  $pesquisa2 = "select * from atendimento where data  = '$hoje'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $ahorarios2 = mysql_num_rows($resposta2);
//  $horarios2 = $dados2['horarios'];
  
  
// parei aqui dia 02/06
//  if($atipo == 0 || $ahorarios == 0){
  if($atipo == 0 && $ahorarios2 == 0){


// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Sem agenda pré-definida\r\n.";
include "escrevefechalog.php";
// fim da mensagem log

 echo "<table border='1' align='left' width='450'>";
  echo "<form name='tipo' method='post' action='ok2.php'>";

  echo "<input type='hidden' name='hoje' value='".$hoje."'>";
  // indicar quais micros estão disponíveis


  
  echo "<tr><td></td><td>";
  echo "Micros disponíveis no dia: ";
  echo "<br>";
  


  $pesquisa2 = "select valor from infos where parametro = 'micros'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $micros = $dados2[0];


  $todos_os_micros = explode (", ", $micros);
  $numerodemicros =count($todos_os_micros);
   echo "<input type='hidden' name='maxnumerodemicros' value='".$numerodemicros."'>";

for ($linhaini = 0;  $linhaini < $numerodemicros ;   $linhaini ++) {
echo "<input type='checkbox' name ='ck".$todos_os_micros[$linhaini]."'
value='".$todos_os_micros[$linhaini].
"' checked> ".$todos_os_micros[$linhaini]." ";
}
  

  
  
  echo "</td></tr>";



  echo "<tr><td></td><td>";
  echo "Escolha a agenda de hoje: ";
  echo "</td></tr>";


   $pesquisa3 = "select * from tiposdeagenda";
  $resposta3 = mysql_query($pesquisa3,$conec);
  $dados3 = mysql_fetch_array($resposta3);
  $tipo = $dados3['tipo'];
  $sobreotipo = $dados3['sobreotipo'];
  $horarios = $dados3['horarios'];
  $linhas = mysql_num_rows($resposta3);



   for ($linhaini = 0; $linhaini < $linhas; $linhaini++) {
       $tipo = $dados3['tipo'];
       $sobreotipo = $dados3['sobreotipo'];
       $horarios = $dados3['horarios'];
       echo "<tr>";
       echo "<td><input type='radio' name='tipo' value='".$tipo."'></td>";

       echo "<td>";
       echo "<b>Tipo <font color='red'>".$tipo."</font></b><br>";
       echo "<b>Descrição: </b><font size='1'>".$sobreotipo."</font><br>";
       echo "<b>Horários disponíveis: </b><font size='1'>".$horarios.".</font><br>";
       echo "</td>";
       echo "</tr>";
       $dados3 = mysql_fetch_array($resposta3);
       }



       echo "<tr><td></td><td>";
   echo "<input type='submit' name='submit' value='OK'></td></tr>";
   echo "</form>";
   echo "</table>";


}

//echo "<h1>Insere previos</h1>";
//include "insere_previos.php";


if($atipo != 0 && $ahorarios2 == 0){



  echo "<h1>Insere previos</h1>";
  include "teste2.php";
  
  //include "insere_previos.php";

  }

  else{

echo "Banco de Dados já foi configurado para o dia <b>".$hojeok."</b>.<br>";
echo "<a href='agendamento.php' target='principal'>Iniciar agendamento.</a>";

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Banco de Dados já foi configurado para o dia ".$hojeok.".\r\n";
include "escrevefechalog.php";
// fim da mensagem log

  }//*/

      
}
else{
     echo("Conexão falhou<br>");
     
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Conexão falhou.\r\n";
include "escrevefechalog.php";
// fim da mensagem log
     
     
}


?>
</body>
</html>
