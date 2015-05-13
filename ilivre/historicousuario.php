<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<?php

$idusuario = $_POST['idusuario'];
echo "Histórico do usuário de ID <font color='red'><b>".$idusuario."</b>:</font>";
echo "<br>";

$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {


$stgsql = " SELECT atendimento.data,atendimento.horario,atendimento.micro,atendimento.idusuario,usuarios.nome FROM atendimento, usuarios
WHERE atendimento.idusuario = usuarios.idusuario and atendimento.idusuario = '".$idusuario."'
order by atendimento.data desc, atendimento.horario desc,atendimento.micro";

$res = mysql_query($stgsql,$conec);
$dados = mysql_fetch_array($res);
$ocupados = mysql_num_rows($res);
$nome = $dados['nome'];

echo "<b>Nome:</b> <font color='red'>".$nome."</font><br>";

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
echo "Micro";
echo "</b>";
echo "</font>";
echo "</td>";


echo "</tr>";



$linhaini = 0;
while ($linhaini < $ocupados){
        $data = $dados['data'];
        $horario = $dados['horario'];
        $micro = $dados['micro'];


        if (strstr($data, "-")){
					$aux = explode ("-", $data);
					$data = $aux[2] . "/". $aux[1] . "/" . $aux[0];
				}
        echo "<tr>";

        echo "<td><font face='Arial' size='2'>".$data."</font></td>";
        echo "<td><font face='Arial' size='2'>".$horario."</font></td>";
        echo "<td><font face='Arial' size='2'>".$micro."</font></td>";


        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }



echo "</table>";











// TESTE HISTORICO OFICINAS

/*
$stgsq2 = " SELECT oficinas.nomeofic,oficinas.datainicio,oficinas.datafim,
oficinas.idoficina FROM oficinas, usuarios, participantesofic
WHERE participantesofic.idusuario '".$idusuario."' and participantesofic.idoficina = oficinas.idoficina
order by oficinas.datainicio desc";

$res2 = mysql_query($stgsq2,$conec);
$dados2 = mysql_fetch_array($res2);
$oficinas = mysql_num_rows($res2);
$nome = $dados['nome'];



echo "<table border='1'>";

echo "<tr>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Oficina";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
 echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Início";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Fim";
echo "</b>";
echo "</font>";
echo "</td>";


echo "</tr>";



$linhaini = 0;
while ($linhaini < $oficinas){
        $nomeofic = $dados['data'];
        $horario = $dados['horario'];
        $micro = $dados['micro'];


        if (strstr($data, "-")){
					$aux = explode ("-", $data);
					$data = $aux[2] . "/". $aux[1] . "/" . $aux[0];
				}
        echo "<tr>";

        echo "<td><font face='Arial' size='2'>".$data."</font></td>";
        echo "<td><font face='Arial' size='2'>".$horario."</font></td>";
        echo "<td><font face='Arial' size='2'>".$micro."</font></td>";


        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }



echo "</table>";







*/

//   FIM DO TESTE DE HISTÓRICO DE OFICINAS



}


?>
</BODY>
</HTML>
