<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<?php

$idoficina = $_GET['idoficina'];
$link = $_GET['link'];

$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {

                    $pergunta = "select * from oficinas where idoficina = '$idoficina' ";
    				$resposta = mysql_query($pergunta,$conec);
                    $dados = mysql_fetch_array($resposta);
                    $linhas = mysql_num_rows($resposta);

				if (($resposta) and ($linhas)) {
				//	$dados = mysql_fetch_array($resposta);

$nomeofic = $dados['nomeofic'];
$descricao = $dados['descricao'];
$prerequisito = $dados['prerequisito'];
$datainicio = trim( $dados['datainicio']);
if (strstr($datainicio, "-")){
					$aux = explode ("-", $datainicio);
					$datainicio = $aux[2] . "/". $aux[1] . "/" . $aux[0];
}
$datafim = trim ($dados['datafim']);
if (strstr($datafim, "-")){
					$aux = explode ("-", $datafim);
					$datafim = $aux[2] . "/". $aux[1] . "/" . $aux[0];
}

$horainicio = $dados['horainicio'];
$horafim = $dados['horafim'];
$instrutor = $dados['instrutor'];
$vagas = $dados['vagas'];
$inicioinscricao = trim($dados['inicioinscricao']);
if (strstr($inicioinscricao, "-")){
					$aux = explode ("-", $inicioinscricao);
					$inicioinscricao = $aux[2] . "/". $aux[1] . "/" . $aux[0];
}



echo "<font face='Arial' size='2'>";
/*
echo "<b>ID da Oficina: </b>".$idoficina."<br>";
echo "<hr>";
*/
 echo "<b>";
 echo "<font size='3'>".$nomeofic."</font>";
 echo "<br>";
  echo "</b>";


 echo "<font size='1'><i>";
 echo $descricao;
 echo "</i></font>";
 echo "<br>";

  echo "<b>Pré-requisitos: </b>".$prerequisito;
  echo "<br>";
  echo "<b>Período:</b> de ".$datainicio." a ".$datafim;
  echo "<br>";
  echo "<b>Horário:</b> das ".$horainicio." às ".$horafim;
  echo "<br>";
  echo "<b>Vagas oferecidas:</b> ".$vagas;
  echo "<br>";
  echo "<b>Instrutor responsável:</b> ".$instrutor;
  echo "<br>";
    echo "<b>Início das inscrições:</b> ".$inicioinscricao;
  echo "<br><hr>";
echo "</font>";

echo "<br>";

 if ($link == 1){
  echo "<a href='veroficinas2.php'>Voltar</a>";
 }
 if ($link == 2){
  echo "<a href='infooficinas.php'>Voltar</a>";
 }
  }
  }




?>
</BODY>
</HTML>
