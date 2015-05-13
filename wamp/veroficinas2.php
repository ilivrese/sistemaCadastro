<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<a href="infooficinas.php">Ver todas as oficinas</a> <br>
<?php
$hoje = date("Y-m-d", time());

echo "Oficinas do mês: <br>";
$mes = date("m", time());
$ano = date("Y", time());

$link = 1;
$stgsql = "select * from oficinas
where datainicio >= '".$ano."-".$mes."-01' and datainicio < '".$ano."-".($mes+1)."-01' order by datainicio asc";
include "geraofic.php";
?>



</BODY>
</HTML>
