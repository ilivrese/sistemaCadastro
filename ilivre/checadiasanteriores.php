<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<?php

$data = $_POST['data'];


if (strstr($data, "/")){
					$aux = explode ("/", $data);
					$dataok = $aux[2] . "-". $aux[1] . "-" . $aux[0];
				}


echo "Agenda do dia <font color='red'><b>".$data."</b></font>";
echo "<br>";

$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {


$stgsql = " SELECT atendimento.horario,atendimento.micro,atendimento.idusuario,usuarios.nome FROM atendimento, usuarios
WHERE atendimento.idusuario = usuarios.idusuario and atendimento.data = '".$dataok."'
order by atendimento.horario,atendimento.micro asc";

$res = mysql_query($stgsql,$conec);
$dados = mysql_fetch_array($res);
$ocupados = mysql_num_rows($res);

echo "<table border='1'>";

echo "<tr>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Horário";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
 echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Micro";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Usu&aacute;rios cadastrados";
echo "</b>";
echo "</font>";
echo "</td>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "ID";
echo "</b>";
echo "</font>";
echo "</td>";

echo "</tr>";



$linhaini = 0;
while ($linhaini < $ocupados){
        $horario = $dados['horario'];
        $micro = $dados['micro'];
        $idusuario = $dados['idusuario'];
        $nome = $dados['nome'];

        echo "<tr>";

        echo "<td><font face='Arial' size='2'>".$horario."</font></td>";
        echo "<td><font face='Arial' size='2'>".$micro."</font></td>";
        echo "<td><font face='Arial' size='2'>".$nome."</font></td>";
        echo "<td><font face='Arial' size='2'>".$idusuario."</font></td>";


        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }



echo "</table>";



}


?>
</BODY>
</HTML>
