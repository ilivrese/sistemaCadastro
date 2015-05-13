<HTML>
<HEAD>
 <TITLE>Vagasdodia</TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0" link="blue" vlink="blue">

<?php


echo "<table><tr><td>";
echo "<form name='horario' method='post' target='micros' action='mostramicros.php'>";
$idusuario = $_POST['idusuario'];
echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
echo "<font face='Arial' size='2'>";

echo "<b>Hor&aacute;rios</b></br>";




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

}





echo "</font>";





echo "</font>";
echo "</td></tr><tr><td align='center'>";
echo " <input type='submit' name='submit' value='>'>";
echo "</td></<tr></table>";
?>

</BODY>
</HTML>
