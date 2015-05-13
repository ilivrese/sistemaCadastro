<html>
<head><title></title></head>
<body  link="blue" vlink="blue">


<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());
include "conexao.php";

// teste

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
  $numerodehorarios =count($todos_os_horarios);

for ($a = 0; $a < $numerodehorarios; $a++) {
  for ($b = 0; $b < $numerodemicros; $b++) {
  
  echo $hoje."-".$todos_os_horarios[$a]."-".$todos_os_micros[$b]."<br>";
/*
   $stgsql = "insert into atendimento (data, horario, micro)
   values ('$hoje','$todos_os_horarios[$a]', '$todos_os_micros[$b]')";
   $res = mysql_query($stgsql, $conec);
   */

  }
}

?>
</BODY>
</HTML>
