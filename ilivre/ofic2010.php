<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php

echo "<h1 align='center'>Lista de Oficinas 2010</h1>";
echo "<h3 align='center'>Internet Livre SESC Carmo</h3><br><br>";

		    $conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {

                $stgsql = "select * from oficinas
                where left(datafim,4)= '2010' order by inicioinscricao asc;";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {

$linhaini =1;
$totalofic = $linhas;
$dados = mysql_fetch_array($res) ;


    while ($linhaini <= $linhas){
    
    
 $idoficina = $dados['idoficina'];
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
    
    
    



      $stgsql2 = "select * from participantesofic where idoficina = '$idoficina'";
				$res2 = mysql_query($stgsql2,$conec);
				$ocupados = mysql_num_rows($res2);





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
  echo "<b>Vagas ocupadas:</b> ".$ocupados;
  echo "<br>";
  echo "<b>Instrutor responsável:</b> ".$instrutor;
  echo "<br>";
    echo "<b>Início das inscrições:</b> ".$inicioinscricao;
  echo "<br>";
echo "</font>";




$stgsql3 = "SELECT participantesofic.idusuario, usuarios.nome, usuarios.sexo,
usuarios.RGouRE, usuarios.SESC,  usuarios.nascimento,  usuarios.contato
FROM participantesofic, oficinas, usuarios
WHERE participantesofic.idoficina = oficinas.idoficina
AND participantesofic.idusuario = usuarios.idusuario
AND participantesofic.idoficina = '$idoficina' order by usuarios.nome asc";

				$res3 = mysql_query($stgsql3,$conec);
				$linhas3 = mysql_num_rows($res3);
				 $linhaini3 =1;
                 $dados3 = mysql_fetch_array($res3) ;



                 echo "<table border='1'>";
                 echo "<tr>";

                 echo "<td>";
                 echo "&nbsp;";
                 echo "</td>";
                 
                 echo "<td>";
                 echo "ID";
                 echo "</td>";
                 
                 echo "<td>";
                 echo "Nome";
                 echo "</td>";

                 echo "<td>";
                 echo "Sexo";
                 echo "</td>";

                 echo "<td>";
                 echo "Nascimento";
                 echo "</td>";

                 echo "<td>";
                 echo "Documento";
                 echo "</td>";

                 echo "<td>";
                 echo "SESC";
                 echo "</td>";

                 echo "<td>";
                 echo "Contato";
                 echo "</td>";
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 

                 echo "</tr>" ;

                while ($linhaini3 <= $linhas3){
                $nome = $dados3['nome'];
                $idusuario = $dados3['idusuario'];
                $contato = $dados3['contato'];
                $sexo = $dados3['sexo'];
                $RGouRE = $dados3['RGouRE'];
                $SESC = $dados3['SESC'];
 //              $nascimento = $dados3['nascimento'];
                

                $nascimento = trim ($dados3['nascimento']);
                if (strstr($nascimento, "-")){
					$aux = explode ("-", $nascimento);
					$nascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                }

                
                
                
                
                
                
                
                 echo "<tr>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $linhaini3;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $idusuario;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $nome;
                 echo "</font>";
                 echo "</td>";

                  echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $sexo;
                 echo "</font>";
                 echo "</td>";


                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $nascimento;
                 echo "</font>";
                 echo "</td>";
                 
                                  echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $RGouRE;
                 echo "</font>";
                 echo "</td>";
                 
                                  echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $SESC;
                 echo "</font>";
                 echo "</td>";
                 
                                  echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $contato;
                 echo "</font>";
                 echo "</td>";

                 echo "</tr>" ;
                 $linhaini3 ++;
                 $dados3 = mysql_fetch_array($res3) ;
                  }
                  echo "</table>";

  echo "<br><hr>";



        $linhaini ++;
         $dados = mysql_fetch_array($res) ;
      }



				}
 			}

?>
</BODY>
</HTML>
