 <html><head><title></title></head>
<body bgcolor="lightgreen" topmargin="0"  link="blue" vlink="blue">

<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
include "conexao.php";
 if ($conectou) {


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

echo "<font color='red'><b>Mapa de horários</b></font> - ";
echo "<font size='1'><a href='rodape2.php'>Atualizar</a></font>";
echo "<br>";

if ($tipo){
echo "<table border='1'>";
 echo "<tr>";


for ($a = 0; $a < $numerodehorarios; $a++) {
if ($a % 5 == 0){
echo "</tr>"    ;
echo "<tr>" ;
}
echo "<td>";


echo "<a href='sete.php?horario=".$todos_os_horarios[$a]."' target='lado'>";
echo $todos_os_horarios[$a];
echo "</a>";
include "mostravagas.php";
echo "(".$vagas.")";
echo "</form>";


echo "</td>";

}
echo "</tr></table>";
}

}


?>
</body>
</html>
