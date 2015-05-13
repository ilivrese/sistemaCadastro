<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php


$hoje = date("Y-m-d", time());
$horario = $_GET['horario'];
$micro = $_GET['micro'];
$linhaini = 1;

include "conexao.php";


$stgsql = "UPDATE atendimento SET idusuario =''
WHERE data = '".$hoje."' AND
horario = '".$horario."' AND
micro = '".$micro."'" ;



$res = mysql_query($stgsql,$conec);

if ($res){

echo "OK<br>";

echo "<a href='sete.php?horario=".$horario."'>Voltar</a>";
/*
echo "<table border='0' align='center'>";
echo "<tr><td>";
echo "<form method='post' name='listadohorario' target='ver' action='listacompletadohorario.php'>";
echo "<input type='hidden' name='horario' value='".$horario."'>";
echo "<input type='submit' name='submit' value='Ver lista completa das ".$horario."'>";
echo "</form>";
echo "</td><td>";
echo "</td></tr></table>";
*/


}
else {
echo "Erro!";
echo "<a href='sete.php?horario=".$horario."'>Erro - retornar</a>";
}


?>
</BODY>
</HTML>
