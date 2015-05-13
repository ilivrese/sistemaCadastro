<HTML>
<HEAD>
 <TITLE>eFETIVO</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$hoje = '2008-12-29';
$ano = '2008';
$mes = '12';


$conec;
$bco;
$conectou = 0;

include "conexao.php";
 if ($conectou) {

$stgsql = "select idusuario from atendimento where data >= '".$ano."-".$mes."-01' and
data <= '".$ano."-".$mes."-31' and idusuario is not null";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$total = $linhas;

// primeira linha
echo $total;
echo "<br>";

$stgsql2 = "select idusuario from atendimento where data ='".$hoje."' and idusuario is not null ORDER by idusuario ASC";
$res2 = mysql_query($stgsql2,$conec);
$linhas2 = mysql_num_rows($res2);
$total2 = $linhas2;

// segunda linha
echo $total2;
echo "<br>";

$linhaini = 0;
$dados = mysql_fetch_array($res2);
$idusuario1 = $dados['idusuario'];

// terceira linha
echo $idusuario1;
echo "<br>";
$linhaini++;

$totalefetivo = 1;

while ($linhaini <= $linhas2){
$dados = mysql_fetch_array($res2);
$idusuario2 = $dados['idusuario'];

if ($idusuario1 != $idusuario2){
 $totalefetivo++;
}
$idusuario1 = $idusuario2;
$linhaini++;
}
echo $totalefetivo;




}







?>
</BODY>
</HTML>
