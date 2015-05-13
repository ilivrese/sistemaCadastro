<html><head><title></title></head><body  link="blue" vlink="blue">







 <?php
$horario = "10h30";
include "conexao.php";
$stgsql = " SELECT micro FROM dia WHERE horario = '".$horario."' AND disponivel = 'sim'
AND idusuario IS NULL ";
$res = mysql_query($stgsql,$conec);
$vagas = mysql_num_rows($res);
echo $vagas;



     ?>
</body></html>
