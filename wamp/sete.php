<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="lightyellow" topmargin="2" bottommargin="2"  link="blue" vlink="blue">
<?php

$linhaini = 1;
		    $conec;
			$bco;
			$conectou = 0;
include "conexao.php";
if ($conectou) {
echo "<form name='excluivarios' method='post' action='excluivarios.php' size='10'>";


$hoje = date("Y-m-d", time());
$horario=$_GET['horario'];
echo "<a href='sete.php?horario=".$horario."'>Atualizar</a>";


$stgsql = "SELECT atendimento.micro,atendimento.idusuario,usuarios.nome FROM atendimento, usuarios
WHERE atendimento.idusuario = usuarios.idusuario and atendimento.data = '".$hoje."'
and atendimento.horario = '".$horario."' order by atendimento.micro asc";



$res = mysql_query($stgsql,$conec);
$dados = mysql_fetch_array($res);
$ocupados = mysql_num_rows($res);

 echo " - ";

echo "<input type='submit' name='submit' value='apagar'>";

echo "<table border='1'>";

echo "<tr>";

echo "<td>";
echo "</td>";


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



echo "<input type='hidden' name='horario' value='".$horario."'>";
while ($linhaini <= $ocupados){
        $micro = $dados['micro'];
        $idusuario = $dados['idusuario'];
        $nome = $dados['nome'];

        echo "<tr>";
        
        echo "<td>";
          echo "<input type='checkbox' name ='ck".$micro."' value='".$micro."'> ";

        echo "</td>";
        
        echo "<td><font face='Arial' size='2'>".$micro."</font></td>";
        echo "<td><font face='Arial' size='2'>".$nome."</font>";
        echo "</td>";
        echo "<td><font face='Arial' size='2'>".$idusuario."</font></td>";

        echo "<td><font face='Arial' size='2'>";
         echo "<a href='validaexclusao.php?micro=".$micro."&horario=".$horario."'>
          > </a>";

        echo "</font></td>";
         
         
        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }


echo "</form>";
echo "</table>";







 }

?>
</BODY>
</HTML>
