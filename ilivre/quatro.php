<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php
/* lista todos os tipos de agenda */

$conec;
$bco;
$conectou = 0;

include "conexao.php";

 if ($conectou) {


  $pesquisa = "select * from tiposdeagenda";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $tipo = $dados['tipo'];
  $sobreotipo = $dados['sobreotipo'];
  $horarios = $dados['horarios'];
  $linhas = mysql_num_rows($resposta);

   echo "<table border='1' align='left' width='50%'>";

   for ($linhaini = 0; $linhaini < $linhas; $linhaini++) {
       $tipo = $dados['tipo'];
       $sobreotipo = $dados['sobreotipo'];
       $horarios = $dados['horarios'];
       echo "<tr><td>";
       echo "<b>Tipo <font color='red'>".$tipo."</font></b><br>";
       echo "<b>Descrição: </b>".$sobreotipo."<br>";
       echo "<b>Horários disponíveis: </b>".$horarios.".<br>";
       $dados = mysql_fetch_array($resposta);
       }

   echo "</table>";

 }


?>
</BODY>
</HTML>
