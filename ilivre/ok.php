<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">

<?php

$conec;
			$bco;
			$conectou = 0;

			include "conexao.php";
			$hoje = date("Y-m-d", time());
			if ($conectou) {

echo "<td>";

$horario = $_GET['horario'];


echo "Hor&aacute;rio: ".$horario;
echo "<br>";


$micro = $_GET['microok'];

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Escolhido micro = [".$micro."].\r\n";
include "escrevefechalog.php";
// fim da mensagem log<b></b>


echo "Micro: ".$micro;
echo "<br>";

                    $stgsql4 = "select valor from infos where parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
                    $dados4 = mysql_fetch_array($res4);
                    $linhas4 = mysql_num_rows($res4);
                    $idusuario = $dados4[0];
                    
//$idusuario = $_POST['idusuario'];
echo "ID Usu&aacute;rio ".$idusuario;

echo "<hr>";




               $stgsql = "UPDATE ilivre.atendimento SET
               `idusuario` = '$idusuario'
               WHERE data = '$hoje' and CONVERT(atendimento.horario USING utf8) = '$horario'
               AND atendimento.micro = '$micro' LIMIT 1;";

				$res = mysql_query($stgsql, $conec);
				if ($res) {

					echo "<b>OK</b>";
                             // criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Usuário ID = [".$idusuario."] Agendado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log<b></b>
				}
				else {
  					echo "<b>erro</b>";

				}

			}


echo "<hr>";
echo "<a href='agendamento.php' target='principal'>Nova consulta</a><br>";
echo "<a href='veroficinas.php' target='lado'>Inscrever em Oficinas</a><br>";
echo "<a href='espera1.php' target='b'>Lista de Espera</a>";

/*
echo "<form method='post' name='reinicia' target='principal' action='teste3.php'>";
echo "<input type='submit' name='submit' value='Nova consulta'>";
echo "</form>";
*/



?>

</BODY>
</HTML>
