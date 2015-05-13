<html>
    <head>
	    <title>
   Teste de bdd
		</title>
	</head>
	<body>


		<?php

		    $conec;
			$bco;
			$conectou = 0;

			include "conexao.php";

/* transfere registro de A para B*/

			if ($conectou) {
                $a = '1322';
                $ = count($elimine);
                echo $a;
                echo $elimine[0];
                echo $elimine[1];
                echo "<br>";
                $elemento = 0;
                while ($elemento < $a){
                  $busque = $elimine[$elemento];
				$stgsql = "delete from USUARIOS where idusuario = '$busque' ";
				$res = mysql_query($stgsql,$conec);
                $dados = mysql_fetch_array($res);
                     echo $dados['idusuario'];
                     echo ' - ';
                     echo $dados['nome'];
                     echo "<br>";
                  $elemento++;
                     }


     }


?>
</BODY>
</HTML>
