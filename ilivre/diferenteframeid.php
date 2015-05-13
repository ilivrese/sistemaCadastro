<?php

                    $stgsql = "select * from USUARIOS where idusuario = '$idusuario'";
    				$res = mysql_query($stgsql,$conec);
                    $dados = mysql_fetch_array($res);

                    
                    //dados obrigatórios
					$mynome = $dados['nome'];
					$datanascimento = $dados['nascimento'];
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $datanascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
					$mysexo = $dados['sexo'];
					$mynacionalidade = $dados['nacionalidade'];
					

				    echo "<font color='red'><b>ID: ".$idusuario."</b></font><br>";
					echo "<b>Nome:</b> ".$mynome."<br>";
					echo "<b>Data de Nascimento:</b> ".$mynascimento."&nbsp;&nbsp;&nbsp;";
					echo "<b>Sexo:</b> ".$mysexo."<br>";
					echo "<b>País de Origem:</b> ".$mynacionalidade."<br>";

					
					
					
					// não é obrigatório


					if(isset($dados['RGouRE'])){
     				   echo "<b>RG ou RE:</b> ".$dados['RGouRE']."<br>";
                    }

					if(isset($dados['SESC'])){
                       echo "<b>Cadastro SESC:</b> ".$dados['SESC']."<br>";
                    }
                    if (isset($dados['contato'])){
					echo "<b>Contato:</b> ".$dados['contato']."<br>";
                     }
                     if (isset($dados['OBS'])){
					 echo "<b>OBS:</b><font color='red'> ".$dados['OBS']."</font><br>";
					}
                     include "testeidade.php";



?>



