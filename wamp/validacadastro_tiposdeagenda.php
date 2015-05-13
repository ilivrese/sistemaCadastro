<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$sobreotipo = $_POST['sobreotipo'];
$horarios = $_POST['horarios'];

$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {

$busca1 = "insert into tiposdeagenda values ('','$sobreotipo', '$horarios')";
$res1 = mysql_query($busca1, $conec);
if ($res1) {
echo "<font face='Arial' size='2'>";
echo "<b>Agenda incluída com sucesso!</b></br></font>";

$busca2 = "select * from tiposdeagenda order by tipo desc";
$res2 = mysql_query($busca2, $conec);
$dados = mysql_fetch_array($res2);
$tipo = $dados['0'];
if ($res2) {
   echo "<font face='Arial' size='2'>";
   echo "<b>Agenda tipo: <font color='red'>".$tipo."</font></b><br>";
   echo "<b>Descrição :</b> ".$sobreotipo."<br>";
   echo "<b>Horarios disponíveis:</b> ".$horarios."<br>";
}
}
echo "<a href='adm.php'>Voltar</a>";
 }
?>
</BODY>
</HTML>
