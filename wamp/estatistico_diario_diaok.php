<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$diaok1 = $_POST['diaok'];

				if (strstr($diaok1, "/")){
					$aux = explode ("/", $diaok1);
					$diaok = $aux[2] . "-". $aux[1] . "-" . $aux[0];
				}




$conec;
$bco;
$conectou = 0;

include "conexao.php";
 if ($conectou) {

/*$stgsql = "select idusuario from atendimento where data = '$diaok' and
idusuario is not null";   */

$stgsql = "select idusuario from atendimento where data = '$diaok' and
idusuario != ''";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$total = $linhas;


/*$stgsql2 = "select idusuario from atendimento where data = '$diaok' and
idusuario is not null ORDER by idusuario ASC";*/

$stgsql2 = "select idusuario from atendimento where data = '$diaok' and
idusuario != '' ORDER by idusuario ASC";
$res2 = mysql_query($stgsql2,$conec);
$linhas2 = mysql_num_rows($res2);
$total2 = $linhas2;
$linhaini = 0;
$dados = mysql_fetch_array($res2);
$idusuario1 = $dados['idusuario'];
$linhaini++;

$totalefetivo = 0;

while ($linhaini <= $linhas2){
$dados = mysql_fetch_array($res2);
$idusuario2 = $dados['idusuario'];

if ($idusuario1 != $idusuario2){
 $totalefetivo++;
}
$idusuario1 = $idusuario2;
$linhaini++;
}



echo "<font face='Arial' size='2'>";


echo "<h2>Internet Livre - Dados estat�sticos do dia ".$diaok1."</h2>" ;

echo "<h3>Uso Livre</h3>" ;
echo "<font size='1'><i>INTERNET LIVRE - SESC CARMO.</i></font><BR>";
echo "<font size='1'><i>Hor�rios de 30 minutos e de 1 hora em 15 computadores.</i></font>";
echo "<br><font size='1'><i>De segunda a sexta, das 9h00 �s 17h30.</i></font>";
echo "<br><font size='1'><i>N�o h� navega��o livre durante o per�odo das oficinas.</i></font>";
echo "<hr>";
echo "<b>Total de Atendimentos do dia:</b> ".$total;
echo "<br>";
echo "<b>Total de Usu�rios Atendidos no dia:</b> ".$totalefetivo;
echo "<br>";
echo "<hr>";



}
else {
echo "&nbsp;";
}


 echo "<a href='estatistico.php'>Voltar</a>";

 echo "</font>";

?>
</BODY>
</HTML>
