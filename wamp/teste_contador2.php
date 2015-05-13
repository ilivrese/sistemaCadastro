  <?php
include "conexao.php";

$hoje = date("Y-m-d", time());
$stgsql = " SELECT data, horario, micro FROM atendimento
WHERE idusuario = '".$idusuario."'
and data = '".$hoje."'";
$res = mysql_query($stgsql,$conec);
$contador = mysql_num_rows($res);
?>

