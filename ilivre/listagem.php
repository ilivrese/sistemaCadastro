
<html>
    <head>
	    <title>
   Lista de registro
		</title>
	</head>
	<body  link="blue" vlink="blue">


		<?php


		    $conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {

                $stgsql = "select * from USUARIOS order by nome asc;";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);
                $dados = mysql_fetch_array($res);





echo "<table border='1'>";
echo "<tr>";
echo "<td>ID</td><td>Nome</td><td>Sexo</td><td>Nascimento</td>
<td>País</td><td>RGouRE</td><td>SESC</td><td>Contato</td><td>OBS</td>;";
echo "</tr>";

$linhaini = 1;
while ($linhaini <= $linhas){
$idusuario = $dados['idusuario'];
$nome = $dados['nome'];
$sexo = $dados['sexo'];
$nascimento = $dados['nascimento'];
$nacionalidade = $dados['nacionalidade'];
$RGouRE = $dados['RGouRE'];
$SESC = $dados['SESC'];
$contato = $dados['contato'];
$OBS = $dados['OBS'];

        echo "<tr>";

        echo "<td>";
         echo $idusuario;
        echo "</td>";

                echo "<td>";
         echo $nome;
        echo "</td>";
        
                echo "<td>";
         echo $sexo;
        echo "</td>";
        
                echo "<td>";
         echo $nascimento;
        echo "</td>";
        
                echo "<td>";
         echo $nacionalidade;
        echo "</td>";
        
                echo "<td>";
         echo $RGouRE;
        echo "</td>";
        
                echo "<td>";
         echo $SESC;
        echo "</td>";
        
                echo "<td>";
         echo $contato;
        echo "</td>";

                echo "<td>";
         echo $OBS;
        echo "</td>";


        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }
echo "</table>";
 }
		?>
	</body>
</html>
