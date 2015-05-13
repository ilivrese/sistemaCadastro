  <?php
include "conexao.php";

$hoje = date("Y-m-d", time());
$stgsql = " SELECT data, horario, micro FROM atendimento
WHERE idusuario = '".$idusuario."'
and data = '".$hoje."'";
$res = mysql_query($stgsql,$conec);
$contador = mysql_num_rows($res);
echo "O usuário já usou <font color='red'><b>".$contador."</b></font> vezes hoje";
echo "<br>";


$linhaini = 0;
while ($linhaini < $contador){
$dados = mysql_fetch_array($res);
$horario = $dados['horario'];
$micro = $dados['micro'];
echo "<font face='Arial' size='1'>";
echo "<b>".$horario."</b>(".$micro.") ";
echo "</font>";

$linhaini++;

}

echo "</br>";






//backup
/*
include "conexao.php";

$hoje = date("Y-m-d", time());
$stgsql = " SELECT data FROM atendimento
WHERE idusuario = '".$idusuario."'
and data = '".$hoje."'";
$res = mysql_query($stgsql,$conec);
$contador = mysql_num_rows($res);
echo "O usuário já usou <font color='red'><b>".$contador."</b></font> vezes hoje";
*/

?>

