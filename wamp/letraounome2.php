<html>
    <head>
	    <title>
			Buscando um Usu&aacute;rio
		</title>
	</head>
	<body link="blue" vlink="blue">


		<?php


		    $conec;
			$bco;
			$conectou = 0;

			include "conexao.php";


			if ($conectou) {


				if ($idusuario){
				$stgsql = "select * from USUARIOS
					where idusuario = \"$idusuario\"";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {
					$dados = mysql_fetch_array($res);

					$mynome = $dados['nome'];
					$mynascimento = $dados['nascimento'];
						$datanascimento= trim($mynascimento);
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $mynascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}

					$myRGouRE = $dados['RGouRE'];
					$mySESC = $dados['SESC'];
					$myOUTRO = $dados['OUTRO'];
					$myOBS = $dados['OBS'];


                include "frameid.php";

				}
				else {
					echo "ID ".$idusuario." n&atilde;o encontrada.";

                    echo "<form method='post' name='volta' action='consultausuario.php'>";
					echo "<input type='hidden' name='horario' value='".$horario."'>";
					echo "<input type='hidden' name='micro' value='".$micro."'>";
					echo "<input type='submit' name='submit' value='Voltar'>";
					echo "</form>";

					 echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
                     echo "<input type='submit' name='submit' value='Cadastrar'>";
					 echo "</form>";


				}

			}



			if ($nome){
				$stgsql = "select * from USUARIOS
					where nome = \"$nome\"";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {
					$dados = mysql_fetch_array($res);

					$myidusuario = $dados['idusuario'];
					$mynascimento = $dados['nascimento'];
					$datanascimento= trim($mynascimento);
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $mynascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
					$myRGouRE = $dados['RGouRE'];
					$mySESC = $dados['SESC'];
					$myOUTRO = $dados['OUTRO'];
					$myOBS = $dados['OBS'];

                   include "framenome.php";

				}
				else {
					echo "Nome ".$nome." n&atilde;o encontrado.";
                    echo "<form method='post' name='volta' action='consultausuario.php'>";
					echo "<input type='hidden' name='horario' value='".$horario."'>";
					echo "<input type='hidden' name='micro' value='".$micro."'>";
					echo "<input type='submit' name='submit' value='Voltar'>";
					echo "</form>";
					 echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
                     echo "<input type='hidden' name='nome' value='".$nome."'>";
                     echo "<input type='submit' name='submit' value='Cadastrar'>";
					 echo "</form>";
				}

			}

			if ($RGouRE){
				$stgsql = "select * from USUARIOS
					where RGouRE = \"$RGouRE\"";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {
					$dados = mysql_fetch_array($res);

					$myidusuario = $dados['idusuario'];
					$mynome = $dados['nome'];
					$mynascimento = $dados['nascimento'];
					$datanascimento= trim($mynascimento);
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $mynascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
					$mySESC = $dados['SESC'];
					$myOUTRO = $dados['OUTRO'];
					$myOBS = $dados['OBS'];

         include "framergoure.php";

				}
				else {
					echo "RG ou RE ".$RGouRE." n&atilde;o encontrado.";
                    echo "<form method='post' name='volta' action='consultausuario.php'>";
					echo "<input type='hidden' name='horario' value='".$horario."'>";
					echo "<input type='hidden' name='micro' value='".$micro."'>";
					echo "<input type='submit' name='submit' value='Voltar'>";
					echo "</form>";

					echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
					 echo "<input type='hidden' name='rgoure' value='".$rgoure."'>";
                     echo "<input type='hidden' name='numeroRGouRE' value='".$numeroRGouRE."'>";
                     echo "<input type='submit' name='submit' value='Cadastrar'>";
					 echo "</form>";
				}

			}

			if ($SESC){
				$stgsql = "select * from USUARIOS
					where SESC = \"$SESC\"";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {
					$dados = mysql_fetch_array($res);

					$myidusuario = $dados['idusuario'];
					$mynome = $dados['nome'];
					$mynascimento = $dados['nascimento'];
					$datanascimento= trim($mynascimento);
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $mynascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
					$myRGouRE = $dados['RGouRE'];
					$myOUTRO = $dados['OUTRO'];
					$myOBS = $dados['OBS'];

     include "framesesc.php";

				}
				else {
					echo "Cadastro SESC ".$SESC." n&atilde;o encontrado.";
                    echo "<form method='post' name='volta' action='consultausuario.php'>";
					echo "<input type='hidden' name='horario' value='".$horario."'>";
					echo "<input type='hidden' name='micro' value='".$micro."'>";
					echo "<input type='submit' name='submit' value='Voltar'>";
					echo "</form>";
	            echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
                     echo "<input type='hidden' name='sesc' value='".$sesc."'>";
                     echo "<input type='hidden' name='numeroSESC' value='".$numeroSESC."'>";
                     echo "<input type='submit' name='submit' value='Cadastrar'>";
					 echo "</form>";
				}

			}


			if ($OUTRO){
				$stgsql = "select * from USUARIOS
					where OUTRO = \"$OUTRO\"";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

	if (($res) and ($linhas)) {
    $dados = mysql_fetch_array($res);

					$myidusuario = $dados['idusuario'];
					$mynome = $dados['nome'];
					$mynascimento = $dados['nascimento'];
					$datanascimento= trim($mynascimento);
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $mynascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
					$myRGouRE = $dados['RGouRE'];
					$mySESC = $dados['SESC'];
					$myOUTRO = $dados['OUTRO'];
					$myOBS = $dados['OBS'];

         include "frameoutro.php";


				}
				else {
					echo "Cadastro Alternativo ".$OUTRO." n&atilde;o encontrado.";
                    echo "<form method='post' name='volta' action='consultausuario.php'>";
					echo "<input type='hidden' name='horario' value='".$horario."'>";
					echo "<input type='hidden' name='micro' value='".$micro."'>";
					echo "<input type='submit' name='submit' value='Voltar'>";
					echo "</form>";
					echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
                     echo "<input type='hidden' name='nome' value='".$OUTRO."'>";
                     echo "<input type='submit' name='submit' value='Cadastrar'>";
					 echo "</form>";
				}


                }


			}


		else {
			echo "Erro de conex&atilde;o";
		}
		?>
	</body>
</html>
