<HTML>
<HEAD>
 <TITLE>Vagasdodia</TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0" link="blue" vlink="blue">

<?php


$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
include "conexao.php";
 if ($conectou) {

//echo "<form name='horario' method='post' target='ok' action='espera.php'>";


echo "<b>Hor&aacute;rios</b></br>";

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Escolhido Lista de Espera.\r\n";
include "escrevefechalog.php";
// fim da mensagem log


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


for ($a = 0; $a < $numerodehorarios; $a++) {
echo "<a href='espera.php?horario=".$todos_os_horarios[$a]."' target='a'>";
echo $todos_os_horarios[$a]."</a>";
echo "<br>";
}







/*
  $pesquisa = "select tipo from agenda where data = '$hoje'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $tipo = $dados[0];

  switch($tipo){
   case 1:
        include "tipo1h2.php";
        break;
    case 2:
        include "tipo2h2.php";
        break;
    case 3:
        include "tipo3h2.php";
        break;
    case 4:
        include "tipo4h2.php";
        break;
    case 5:
        include "tipo5h2.php";
        break;
    case 6:
        include "tipo6h2.php";
        break;
    case 7:
        include "tipo7h2.php";
        break;
    default:
        echo "Falha";
 }

echo "</font>";
echo "</td></tr><tr><td align='center'>";
echo " <input type='submit' name='submit' value='>'>";
echo "</td></<tr></table>";


*/

}



?>

</BODY>
</HTML>
