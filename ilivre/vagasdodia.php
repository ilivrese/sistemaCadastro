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

  $pesquisa = "select tipo from agenda where data = '$hoje'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $atipo = mysql_num_rows($resposta);
  $tipo = $dados['tipo'];


  $pesquisa2 = "select horarios from tiposdeagenda where tipo = '$tipo'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $horarios = $dados2[0];
  $todos_os_horarios = explode (", ", $horarios);
  $numerodehorarios =count($todos_os_horarios);
  

sort($todos_os_horarios);  
  

  //print_r($todos_os_horarios);
  //echo "<br>".$todos_os_horarios[1]."<br>";
  //echo "<br>".$numerodehorarios."<br>";
  /*
  foreach($todos_os_horarios as $hora){
      $stgsql = " SELECT micro FROM atendimento WHERE data = '".$hoje."' and horario = '".$hora."' AND idusuario = '' ";
      $res = mysql_query($stgsql,$conec);
      $vagas = mysql_num_rows($res);
      //include "mostravagas.php";
          //if ($vagas != 0){
             echo "<a href='mostramicros.php?horario=".$hora."' target='c'>";
             echo $hora."</a>";
             //echo $horarios[$a]."</a>";
             echo "(".$vagas.")<br>";
             //echo "<br>";
          //   }
      } //*/


for ($a = 0; $a < $numerodehorarios; $a++) {
include "mostravagas.php";
if ($vagas != 0){
echo "<a href='mostramicros.php?horario=".$todos_os_horarios[$a]."' target='c'>";
echo $todos_os_horarios[$a]."</a>";
echo "(".$vagas.")<br>";
}
}//*/

/*
INSERT INTO `ilivre`.`atendimento` (`data`, `horario`, `micro`, `idusuario`) VALUES ('2013-12-27', '17h00', '06', ''),
('2013-12-27', '17h00', '07', ''),
('2013-12-27', '17h00', '08', ''),
('2013-12-27', '17h00', '09', ''),
('2013-12-27', '17h00', '10', ''),
('2013-12-27', '17h00', '11', ''),
('2013-12-27', '17h00', '12', ''),
('2013-12-27', '17h00', '13', ''),
('2013-12-27', '17h00', '14', ''),
('2013-12-27', '18h00', '01', ''),
('2013-12-27', '18h00', '02', ''),
('2013-12-27', '18h00', '03', ''),
('2013-12-27', '18h00', '05', ''),
('2013-12-27', '18h00', '06', ''),
('2013-12-27', '18h00', '07', ''),
('2013-12-27', '18h00', '08', ''),
('2013-12-27', '18h00', '09', ''),
('2013-12-27', '18h00', '10', ''),
('2013-12-27', '18h00', '11', ''),
('2013-12-27', '18h00', '12', ''),
('2013-12-27', '18h00', '13', ''),
('2013-12-27', '18h00', '14', ''),
('2013-12-27', '19h00', '01', ''),
('2013-12-27', '19h00', '02', ''),
('2013-12-27', '19h00', '03', ''),
('2013-12-27', '19h00', '05', ''),
('2013-12-27', '19h00', '06', ''),
('2013-12-27', '19h00', '07', ''),
('2013-12-27', '19h00', '08', ''),
('2013-12-27', '19h00', '09', ''),
('2013-12-27', '19h00', '10', ''),
('2013-12-27', '19h00', '11', ''),
('2013-12-27', '19h00', '12', ''),
('2013-12-27', '19h00', '13', ''),
('2013-12-27', '19h00', '14', ''),
;
*/



?>

</BODY>
</HTML>
