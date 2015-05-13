<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<?php

$micro = $_POST['micro'];


echo "Histórico do micro <font color='red'><b>".$micro."</b></font>";
echo "<br>";

$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {


$stgsql = " SELECT atendimento.data,atendimento.horario,atendimento.micro,atendimento.idusuario,usuarios.nome FROM atendimento, usuarios
WHERE atendimento.idusuario = usuarios.idusuario and atendimento.micro = '".$micro."'
order by atendimento.data desc,atendimento.horario asc";

$res = mysql_query($stgsql,$conec);
$dados = mysql_fetch_array($res);
$ocupados = mysql_num_rows($res);

echo "<table border='1'>";

echo "<tr>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Data";
echo "</b>";
echo "</font>";
echo "</td>";


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
        $idusuario = $dados['idusuario'];
        $nome = $dados['nome'];
        $data = $dados['data'];
        if (strstr($data, "-")){
					$aux = explode ("-", $data);
					$data = $aux[2] . "/". $aux[1] . "/" . $aux[0];
				}
        
        
        echo "<tr>";

        echo "<td><font face='Arial' size='2'>".$data."</font></td>";
        echo "<td><font face='Arial' size='2'>".$horario."</font></td>";
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
