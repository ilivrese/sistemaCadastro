<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$hoje = date("Y-m-d", time());
$horario = $_POST['horario'];

$linhaini = 1;


include "conexao.php";





$stgsql = " SELECT atendimento.micro, atendimento.idusuario, usuarios.nome FROM atendimento, usuarios
WHERE atendimento.idusuario = usuarios.idusuario and atendimento.data = '$hoje'
and atendimento.horario = '$horario' order by atendimento.micro asc";


$res = mysql_query($stgsql,$conec);


$dados = mysql_fetch_array($res);

$ocupados = mysql_num_rows($res);




echo "<form name='eliminando' method='post' target = 'ver' action='validaexclusao.php'>";
echo "<input type='hidden' name='horario' value='".$horario."'>";
echo "<table border='1'>";

echo "<tr>";

echo "<td>&nbsp;</td>";
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
        $nome = $dados['nome'];
        $idusuario = $dados['idusuario'];
        echo "<tr>";
        echo "<td>";
        echo "<input type='radio' name='micro' value='".$micro."'>";
        echo "<td><font face='Arial' size='2'>".$micro."</font></td>";
        echo "<td><font face='Arial' size='2'>".$nome."</font>";
        echo "</td>";
        echo "<td><font face='Arial' size='2'>".$idusuario."</font></td>";
        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }
  
echo "</table>";
echo "<input type='submit' name='submit' value='OK'>"  ;
echo "</form>";










?>
</BODY>
</HTML>
