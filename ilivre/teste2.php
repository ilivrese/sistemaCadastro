
 <?php


 $pesquisa = "select tipo,micros from agenda where data = '$hoje'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $tipo = $dados['tipo'];
  $micros = $dados['micros'];
  $todos_os_micros = explode(', ',$micros);
  $numerodemicros = count($todos_os_micros);

  $pesquisa2 = "select horarios from tiposdeagenda where tipo = '$tipo'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $horarios = $dados2[0];
  $todos_os_horarios = explode (", ", $horarios);
  sort($todos_os_horarios);  
  $numerodehorarios =count($todos_os_horarios);
  
  


  
  
  
  
  
  

  // criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Agenda pré-escolhida: tipo [".$tipo."], micros[".$micros."],
horarios [".$horarios."]";
include "escrevefechalog.php";
// fim da mensagem log


// 30/abril/2014
$stgsql00 = "update infos set valor='$horarios' where parametro='horarios'";
   $res00 = mysql_query($stgsql00, $conec);



/*
for ($a = 0; $a < $numerodehorarios; $a++) {
  for ($b = 0; $b < $numerodemicros; $b++) {
  
  $pesquisa3 = "select pdidusuario from pdatendimento where pddata = '$hoje' and
  pdhorario = '$todos_os_horarios[$a]' and pdmicro = '$todos_os_micros[$b]'";
  $resposta3 = mysql_query($pesquisa3,$conec);
  $dados3 = mysql_fetch_array($resposta3);
  $idusuario = $dados3['pdidusuario'];
  
  
  
   $stgsql = "insert into atendimento (data, horario, micro, idusuario)
   values ('$hoje','$todos_os_horarios[$a]', '$todos_os_micros[$b]', '$idusuario')";
   $res = mysql_query($stgsql, $conec);
   
   

  }
}//*/


for ($a = 0; $a < $numerodehorarios; $a++) {
  for ($b = 0; $b < $numerodemicros; $b++) {
  
    //$int_micro = intval()

  $pesquisa3 = "select pdidusuario from pdatendimento where pddata = '$hoje' and
  pdhorario = '$todos_os_horarios[$a]' and pdmicro = '$todos_os_micros[$b]'";
  $resposta3 = mysql_query($pesquisa3,$conec);
  $dados3 = mysql_fetch_array($resposta3);
  $idusuario = $dados3['pdidusuario'];
  
   echo "hora: ".$todos_os_horarios[$a]."   micro: ".$todos_os_micros[$b]."  -  ".$idusuario."<br>";
  
   $stgsql = "insert into atendimento (data, horario, micro, idusuario)
   values ('$hoje','$todos_os_horarios[$a]', '$todos_os_micros[$b]', '$idusuario')";
   $res = mysql_query($stgsql, $conec);
   
   

  }
}


 // criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Horários inseridos.\r\n";
include "escrevefechalog.php";
// fim da mensagem log






if ($res) {

//

//


				$stgsq3 = "delete from atendimento where data < '$hoje' and
                idusuario =''";
				$res3 = mysql_query($stgsq3, $conec);

                $stgsql2 = "delete from atendimento where data < '$hoje' and
                idusuario = '1'";
				$res2 = mysql_query($stgsql2, $conec);


                if ($res3) {
                echo "<br>Agenda limpa<br>";
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Horários ociosos anteriores removidos.\r\n";
include "escrevefechalog.php";
// fim da mensagem log
                   }
                else {
                echo "Erro em limpar agenda";
                
                // criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Erro ao limpar agenda.\r\n";
include "escrevefechalog.php";
// fim da mensagem log
                }


echo "Configuração OK!<br>";




echo "<a href='agendamento.php' target='principal'>Iniciar agendamento.</a>";

}
/*
else {
echo "Banco de Dados já foi configurado para o dia <b>".$hojeok."</b>.<br>";
echo "<a href='agendamento.php' target='principal'>Iniciar agendamento.</a>";
}
*/


?>
