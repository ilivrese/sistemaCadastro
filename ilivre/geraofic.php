
<?php

$hoje = date("y-m-d", time());
$conec;
$bco;
$conectou = 0;
include "conexao.php";


if ($conectou) {


$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$linhaini =1;
$totalofic = $linhas;
$dados = mysql_fetch_array($res) ;


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

