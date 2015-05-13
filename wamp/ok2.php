<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<?php


$tipo = $_POST['tipo'];
$maxnumerodemicros = $_POST['maxnumerodemicros'];

$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());

$micros = array(); //CRIA UMA ARRAY

for($x=1; $x<=$maxnumerodemicros; $x++){ //INÍCIO DO LOOP QUE VERIFICA QUAIS CHECKBOX ESTÃO MARCADOS
    if(isset($_POST['ck'.$x])) { //SE ALGUM ESTIVER MARCADO INSERE SEU VALOR NA ARRAY
        $micros[] = $_POST['ck'.$x];
 }
 }

$microsok = implode(', ', $micros)   ;


        
$conec;
$bco;
$conectou = 0;
include "conexao.php";
 if ($conectou) {
 
 


  $pesquisa = "insert into agenda values ('$hoje', '$tipo','$microsok')";
  $resposta = mysql_query($pesquisa,$conec);
  
  


  
  $pesquisa2 = "select horarios from tiposdeagenda where tipo = '$tipo'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados = mysql_fetch_array($resposta2);
  $horarios = $dados['horarios'];

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Valores escolhidos: tipo [".$tipo."], microsok [".$microsok."],
horarios [".$horarios."]";
include "escrevefechalog.php";
// fim da mensagem log

echo "<b>Data: </b>".$hojeok."<br>";
echo "<b>Tipo de agenda: </b>".$tipo."<br>";
echo "<b>Horários disponíveis: </b>".$horarios."</br>";
echo "<b>Micros disponíveis: </b>".$microsok."</br>";

echo "<a href='tipodeagenda.php'>Voltar</a>";


}
?>
</BODY>
</HTML>
