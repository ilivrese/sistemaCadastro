 <?php
include "conexao.php";
$hoje = date("Y-m-d", time());
//echo $hoje." -- ".$todos_os_horarios[$a]."<br>";

$stgsql = " SELECT micro FROM atendimento WHERE data = '".$hoje."' and horario = '".$todos_os_horarios[$a]."'
AND idusuario = '' ";
$res = mysql_query($stgsql,$conec);
$vagas = mysql_num_rows($res);
?>
