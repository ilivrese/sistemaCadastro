<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php
$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {

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



echo "<form name='excluitiposdeagenda' method='post' action='validaexclusao_tiposdeagenda.php'>";
echo "<table border='1'>";

echo "<tr>";

echo "<td>&nbsp;</td>";
echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Tipo";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Descrição";
echo "</b>";
echo "</font>";


echo "</td>";




echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Horários disponíveis";
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







}


?>
</BODY>
</HTML>
