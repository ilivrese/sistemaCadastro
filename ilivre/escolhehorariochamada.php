<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<form name="escolhehorariochamada" method="post"  target="enxergar" action="listacompletadohorario.php">
<font size="2" face="Arial">
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
  $tipo = $dados[0];

  switch($tipo){
   case 1:
        include "tipo1h.php";
        break;
    case 2:
        include "tipo2h.php";
        break;
    case 3:
        include "tipo3h.php";
        break;
    case 4:
        include "tipo4h.php";
        break;
    case 5:
        include "tipo5h.php";
        break;
    case 6:
        include "tipo6h.php";
        break;
    case 7:
        include "tipo7h.php";
        break;
    default:
        echo "Falha";
 }

echo "</font>";
 }
?>
</font>
<input type="submit" name="submit" value="OK">
</form>
</BODY>
</HTML>
