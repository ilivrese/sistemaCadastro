<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="lightpink" link="blue" vlink="blue">

<?php
$hoje = date("Y-m-d", time());

$data= trim($hoje);
						if (strstr($data, '-')){
							$aux = explode ('-', $data);
							$data = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}

 $mes = $aux[1];
 $ano = $aux[0];





$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {
   $stgsql4 = "select valor from infos where parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
                    $dados4 = mysql_fetch_array($res4);
                    $linhas4 = mysql_num_rows($res4);
                    $idusuario = $dados4[0];






				$stgsql = "select idoficina,datainicio,datafim,nomeofic,vagas from oficinas
					where datafim >= '$hoje' and inicioinscricao <= '$hoje' order by datainicio asc";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);
				 $linhaini =1;
                 $dados = mysql_fetch_array($res) ;









    echo "<form name='escolheoficina' method='post' action='validaescolhaoficina.php'>";
    echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
    echo "<table border='2'>";
     echo "<tr>";
       echo "<td>";

          echo "&nbsp;";

        echo "</td>";
        echo "<td>";
        echo "<font face='Arial' size='2'>";
          echo "<b>Nome da Oficina</b>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
          echo "<b>Periodo</b>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
          echo "<b>Vagas</b>";
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
          echo "<b>Status</b>";
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



      $stgsql2 = "select * from participantesofic where idoficina = '$idoficina'";
				$res2 = mysql_query($stgsql2,$conec);
				$ocupados = mysql_num_rows($res2);

				$ins = $vagas - $ocupados;

        $stgsql3 = "select * from participantesofic where
            idusuario = '$idusuario' and idoficina = '$idoficina'";
				$res3 = mysql_query($stgsql3,$conec);
                $l = mysql_num_rows($res3);
				if(($l == '0') && ($ins > 0)){

				$status = "inscrever";                   ;
                          }
                          else{
                          if ($ins <= 0){
                          $status = "Lotado";
                          }
                          else{
                         $status = "inscrito";
                           }
                           }




      echo "<tr>";

            echo "<td>";

           if(($l == 0) && ($ins > 0)){
         echo "<input type='radio' name='idoficina' value='".$idoficina."'>";
         }
         else{
         echo "&nbsp;";
         }
           echo "</td>";
        echo "<td>";
        echo "<font face='Arial' size='2'>";
          echo $nomeofic;
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";

         if ($datafim < $hoje){
         echo "ENCERRADA";
         }
         else{
          echo "De ".$datainicio2." a ".$datafim2;
         }


          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
         echo $vagas - $ocupados;
         echo "/";
          echo $vagas;
          echo "</font>";
        echo "</td>";
         echo "<td>";
         echo "<font face='Arial' size='2'>";
         if (($l == 0) && ($ins > 0)){
         echo "<font color='green'><b>".$status."</b></font>";

         }
         else{
         echo "<font color='red'><b>".$status."</b></font>";
          }

          echo "</font>";
        echo "</td>";
        echo "</tr>";


        $linhaini ++;
         $dados = mysql_fetch_array($res) ;
      }
          echo "</table>"   ;
          echo "<input type='submit' name='submit' value='OK'>";
          echo "</form>";
}




?>
</BODY>
</HTML>
