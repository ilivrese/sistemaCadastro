<HTML>
<HEAD>
 <TITLE></TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$hoje = date("Y-m-d", time());
$horario = $_POST['horario'];
$linhaini = 1;




		    $conec;
			$bco;
			$conectou = 0;
include "conexao.php";
if ($conectou) {



$stgsql = " SELECT atendimento.micro,atendimento.idusuario,usuarios.nome FROM atendimento, usuarios
WHERE atendimento.idusuario = usuarios.idusuario and atendimento.data = '".$hoje."'
and atendimento.horario = '".$horario."' order by atendimento.micro asc";

$res = mysql_query($stgsql,$conec);
$dados = mysql_fetch_array($res);
$ocupados = mysql_num_rows($res);





echo "<table border='1'>";

echo "<tr>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo $horario;
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

  while ($linhaini <= $ocupados){
        $micro = $dados['micro'];
        $idusuario = $dados['idusuario'];
        $nome = $dados['nome'];

        echo "<tr>";
        echo "<td><font face='Arial' size='2'>".$micro."</font></td>";
        echo "<td><font face='Arial' size='2'>".$nome."</font>";
        echo "</td>";
        echo "<td><font face='Arial' size='2'>".$idusuario."</font></td>";
        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }






echo "</table>";





  }
  else {
  echo "erro na conex�o";
    }

?>
</BODY>
</HTML>
