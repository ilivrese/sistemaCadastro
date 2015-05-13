<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="yellow"  link="blue" vlink="blue">
<?php

$conec;
$bco;
$conectou = 0;
$idoficina = $_POST['idoficina'];
$hoje = date("Y-m-d", time());


include "conexao.php";

if ($conectou) {
$stgsql = "SELECT oficinas.nomeofic, participantesofic.idusuario, usuarios.nome, usuarios.contato
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
                 echo "Eliminar";
                 echo "</td>";
                 
                 echo "</tr>" ;
                 
                while ($linhaini <= $linhas){
                $nome = $dados['nome'];
                $idusuario = $dados['idusuario'];
                $contato = $dados['contato'];
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
                 echo "<form name='eliminaparticipante' method='post'
                 action='validaeliminapartic.php'>";
                 echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
                 echo "<input type='hidden' name='idoficina' value='".$idoficina."'>";
                 echo "<input type='submit' name='submit' value='>'>";
                 echo "</form>";
                 echo "</td>";
                 

                 echo "</tr>" ;
                 $linhaini ++;
                 $dados = mysql_fetch_array($res) ;
                  }
                  echo "</table>";


}











?>
<a href="veroficinas2.php">Voltar</a>
</BODY>
</HTML>
