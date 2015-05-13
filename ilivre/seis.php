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
/*
  $pesquisa = "select tipo,micros from agenda where data = '$hoje'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $tipo = $dados['tipo'];
  $micros = $dados['micros'];
  $todos_os_micros = explode(', ',$micros);
  $numerodemicros = count($todos_os_micros);
*/
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


echo "<table><tr><td>";
echo "<form name='horario' method='post' target='micros' action='mostramicros.php'>";
echo "<font face='Arial' size='2'>";
echo "<b>Hor&aacute;rios</b></br>";


for ($a = 0; $a < $numerodehorarios; $a++) {

echo " <input type='radio' name='horario' value='".$todos_os_horarios[$a]."'>" ;
echo $todos_os_horarios[$a];
include "mostravagas.php";
echo "(".$vagas.")<br>";

}

//vagasdodia.php


echo "</font>";
echo "</td></tr><tr><td align='center'>";
echo " <input type='submit' name='submit' value='>'>";
echo "</td></<tr></table>";
?>

</BODY>
</HTML>
