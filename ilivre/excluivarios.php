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

 $horario = $_POST['horario'];
 $hoje = date("Y-m-d", time());
 $hojeok = date("d/m/Y", time());

    echo $horario;


//if (isset($_POST['ck14'])){
// echo $_POST['ck14'];
//}

 /*
  $pesquisa2 = "select micros from agenda where data = '".$hoje."'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $micros = $dados2[0];

  $todos_os_micros = explode (", ", $micros);
  $maxnumerodemicros =count($todos_os_micros);
*/
//echo     $maxnumerodemicros;
//echo "<br>";


$microsexcluidos1 = array(); //CRIA UMA ARRAY


for($x=1; $x<=9; $x++){ //INÍCIO DO LOOP QUE VERIFICA QUAIS CHECKBOX ESTÃO MARCADOS
    if(isset($_POST['ck0'.$x])) { //SE ALGUM ESTIVER MARCADO INSERE SEU VALOR NA ARRAY
        $microsexcluidos1[] = $_POST['ck0'.$x];
     }
}


for($x=10; $x<=15; $x++){ //INÍCIO DO LOOP QUE VERIFICA QUAIS CHECKBOX ESTÃO MARCADOS
    if(isset($_POST['ck'.$x])) { //SE ALGUM ESTIVER MARCADO INSERE SEU VALOR NA ARRAY
        $microsexcluidos2[] = $_POST['ck'.$x];
     }
}

$nummicrosexluidos1 = count($microsexcluidos1);

//print $microsexcluidos;
echo "<br>";

echo $nummicrosexluidos1;
echo "<br>";

for($a=0; $a<$nummicrosexluidos1; $a++){
 $stgsql = "UPDATE atendimento SET idusuario = ''
WHERE data = '".$hoje."' AND
horario = '".$horario."' AND
micro = '".$microsexcluidos1[$a]."'" ;
$res = mysql_query($stgsql,$conec);

if ($res){
echo "Data: ".$hojeok." - Horário: ".$horario." - Micro: ".$microsexcluidos1[$a]." -
<b>Excluído</b><br>";
 }
}




$nummicrosexluidos2 = count($microsexcluidos2);

//print $microsexcluidos;
echo "<br>";

echo $nummicrosexluidos2;
echo "<br>";

for($a=0; $a<$nummicrosexluidos2; $a++){
 $stgsql = "UPDATE atendimento SET idusuario = ''
WHERE data = '".$hoje."' AND
horario = '".$horario."' AND
micro = '".$microsexcluidos2[$a]."'" ;
$res = mysql_query($stgsql,$conec);

if ($res){
echo "Data: ".$hojeok." - Horário: ".$horario." - Micro: ".$microsexcluidos2[$a]." -
<b>Excluído</b><br>";
 }
}

 echo "<a href='sete.php?horario=".$horario."'>Voltar</a>";






}

?>
</BODY>
</HTML>
