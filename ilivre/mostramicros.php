<html><head><title></title></head>
<body topmargin="0" leftmargin="0"  link="blue" vlink="blue">

<?php

//  $horario = $_POST['horario'];
  $horario = $_GET['horario'];
  $linhaini = 1;


include "conexao.php";
$hoje = date("Y-m-d", time());
$stgsql = " SELECT micro FROM atendimento WHERE data = '".$hoje."' and
horario = '".$horario."'
AND idusuario = '' ";
$res = mysql_query($stgsql,$conec);
$vagas = mysql_num_rows($res);
$dados = mysql_fetch_array($res);


// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Escolhido horário = [".$horario."].\r\n";
include "escrevefechalog.php";
// fim da mensagem log




//$idusuario = $_POST['idusuario'];

echo "<table><tr><td>";

//echo "<form name='escolhemicro' method='post' action='ok.php' target='ok'>";
//echo "<font face='Arial' size='2'>";

echo "<b>";
echo $horario;
echo "</b><br>";

  while ($linhaini <= $vagas){
        $micro = $dados['micro'];

        //echo "<input type='radio' name='micro' value='".$micro."'>";
        
        echo "<a href='ok.php?horario=".$horario."&microok=".$micro."'target='a'>";
        echo $micro;
        echo "</a>";
        echo "<br>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }
/*
if ($vagas != 0) {

echo "<input type='hidden' name='horario' value='".$horario."'>";
echo "</font>";
echo "</td></tr><tr><td align='center'>";
echo "<input type='submit' name='submit' value='>'>";
echo "</form>";
echo "</td></tr></table>";
}



if ($vagas == 0) {
echo "Hor&aacute;rio<br>lotado!";
//echo "</form>";
//echo "</td></tr></table>";
}
*/


  ?>
  </body></html>
