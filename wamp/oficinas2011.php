<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">

<?php

$conec;
$bco;
$conectou = 0;
$idoficina = $_POST['idoficina'];
$hoje = date("Y-m-d", time());


include "conexao.php";

if ($conectou) {

  $stgsql = "select * from oficinas
where datainicio >= '2011'-'01'-01' and datainicio < '2011-12-31' order by datainicio asc";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$linhaini =1;
$totalofic = $linhas;
$dados = mysql_fetch_array($res) ;



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



    echo "<table border='2'>";
     echo "<tr>";

        echo "<td>";
        echo "<font face='Arial' size='2'>";
          echo "<b>Nome da Oficina</b>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
          echo "<b>Período</b>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
          echo "<b>Vagas</b>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
          echo "<b>Inscrições</b>";
          echo "</font>";
        echo "</td>";





        echo "</tr>";





    while ($linhaini <= $linhas){
      $idoficina = $dados['idoficina'];
      $nomeofic = $dados['nomeofic'];
      $datainicio = $dados['datainicio'];
      $datainicio2 = trim($datainicio);
                  if (strstr($datainicio2, '-')){
                     $aux = explode ('-', $datainicio2);
				     $datainicio2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                    }

      $datafim = $dados['datafim'];
      $datafim2 = trim($datafim);
                  if (strstr($datafim2, '-')){
                     $aux = explode ('-', $datafim2);
				     $datafim2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                    }


      $vagas = $dados['vagas'];
      $inicioinscricao = $dados['inicioinscricao'];
      $inicioinscricao2 = trim($inicioinscricao);
                  if (strstr($inicioinscricao2, '-')){
                     $aux = explode ('-', $inicioinscricao2);
				     $inicioinscricao2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                    }

      $stgsql2 = "select * from participantesofic where idoficina = '$idoficina'";
				$res2 = mysql_query($stgsql2,$conec);
				$ocupados = mysql_num_rows($res2);



      echo "<tr>";

        echo "<td>";
        echo "<font face='Arial' size='2'>";
          echo "<a href='detalhesdaofic.php?idoficina=".$idoficina."&link=".$link."'>".$nomeofic."</a>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";



          if ($datafim >= $hoje){
           echo "De ".$datainicio2." a ".$datafim2;
         }
         else{

          echo "<font color='red'><b>ENCERRADA</b></font><br>";
         echo "<font size='1'>De ".$datainicio2." a ".$datafim2."</font>";
         }

          echo "</font>";
        echo "</td>";





         echo "<td>";
         echo "<font face='Arial' size='2'>";

         echo "<a href='chamadaofic.php?idoficina=".$idoficina."&link=".$link."'>";
         $ins = $vagas - $ocupados;
         if ($ins <= 0){
         echo "<font color='red'><b>LOTADO</b></font>";
         }
         else{
         echo $ins;
         echo "/";
          echo $vagas;
         }

          echo "</a>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";


          echo $inicioinscricao2;

          echo "</font>";
        echo "</td>";



        echo "</tr>";


        $linhaini ++;
         $dados = mysql_fetch_array($res) ;
      }
          echo "</table>"   ;












}
?>
</BODY>
</HTML>
