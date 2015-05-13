
<html>
    <head>
	    <title>
			Buscando um Usu&aacute;rio
		</title>
	</head>
	<body  link="blue" vlink="blue">
	
	
		<?php
		

		    $conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {

			
			
      
                  
			
			if ((isset($_POST['rdSESC'])) && (isset($_POST['txSESC']))){
			
   $sesc =  $_POST['rdSESC'];
   $numeroSESC = $_POST['txSESC'];
   $SESC =  $sesc.$numeroSESC;
			
			
			
			
			
			
				$stgsql = "select idusuario from usuarios 
                where SESC = '$SESC'";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res);
				$linhas = mysql_num_rows($res);
				
				if (($res) and ($linhas)) {
                   $idusuario = $dados['idusuario'];
                   include "prevframeid.php";
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Cart&atilde;o Sesc [".$SESC."] encontrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log

                   

				}
				else {
					echo "Cadastro SESC <b>".$SESC."</b> n&atilde;o encontrado.";
                   echo "<br><a href='consultausuario.php'>Voltar</a>";

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Cart&atilde;o Sesc [".$SESC."] n&atilde;o encontrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log

				}

			}
			
			
			}


		else {
			echo "Erro de conex&atilde;o";
		}
		?>
	</body>
</html>
