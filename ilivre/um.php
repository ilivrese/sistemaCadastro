<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());
include "conexao.php";

 if ($conectou) {
 

  $pesquisa = "select horarios from tiposdeagenda where tipo = '1'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $horarios = $dados[0];


$todos_os_horarios = explode (", ", $horarios);
$numerodehorarios =count($todos_os_horarios);

echo $horarios;
echo "<br>";
echo  $numerodehorarios;
echo "<br>";

for ($linhaini = 0;  $linhaini < $numerodehorarios ;   $linhaini ++) {
echo $todos_os_horarios[$linhaini];
echo "<br>";
}

 
 }

?>
</BODY>
</HTML>
