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
$hoje = date("Y-m-d", time());


include "conexao.php";

if ($conectou) {
$stgsql = "SELECT oficinas.nomeofic, participantesofic.idusuario, usuarios.nome,  usuarios.nascimento,  usuarios.contato, usuarios.sesc
FROM participantesofic, oficinas, usuarios
WHERE participantesofic.idoficina = oficinas.idoficina
AND participantesofic.idusuario = usuarios.idusuario
AND participantesofic.idoficina = '$idoficina' order by usuarios.nome asc";

				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);
				 $linhaini =1;
                 $dados = mysql_fetch_array($res) ;
                  $nomeofic = $dados['nomeofic'];


                  echo "<font face='Arial' size='2' color='red'>";
                 echo "<b>".$nomeofic."(ID: ".$idoficina.")</b></font><br>";

                 echo "<table border='1'>";
                 echo "<tr>";

                 echo "<td>";
                 echo "&nbsp;";
                 echo "</td>";

                 echo "<td>";
                 echo "Nome";
                 echo "</td>";

                 echo "<td>";
                 echo "ID";
                 echo "</td>";

                 echo "<td>";
                 echo "Contato";
                 echo "</td>";

                 echo "<td>";
                 echo "Nascimento";
                 echo "</td>";
                 
                 
                  echo "<td>";
                 echo "SESC";
                 echo "</td>";
                 
                 
                 echo "<td>";
                 echo "Eliminar";
                 echo "</td>";

                 echo "</tr>" ;

                while ($linhaini <= $linhas){
                $nome = $dados['nome'];
                $idusuario = $dados['idusuario'];
                $contato = $dados['contato'];
                $sesc = $dados['sesc'];
                
                 $nascimento = trim ($dados['nascimento']);
                if (strstr($nascimento, "-")){
					$aux = explode ("-", $nascimento);
					$nascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                }

                
                
                
                
                
                
                 echo "<tr>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $linhaini;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $nome;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $idusuario;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $contato;
                 echo "</font>";
                 echo "</td>";


                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $nascimento;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $sesc;
                 echo "</font>";
                 echo "</td>";


  // parei aqui  - 23/06/2009
                 echo "<td>";
                 echo "<a href='validaeliminapartic.php?idusuario=".$idusuario.
                 "&idoficina=".$idoficina."&link=".$link."'> > </a>";

                 echo "</td>";


                 echo "</tr>" ;
                 $linhaini ++;
                 $dados = mysql_fetch_array($res) ;
                  }
                  echo "</table>";
  if ($link == 1){
  echo "<a href='veroficinas2.php'>Voltar</a>";
 }
 if ($link == 2){
  echo "<a href='infooficinas.php'>Voltar</a>";
 }

}













?>
</BODY>
</HTML>
