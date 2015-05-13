<html>
	<head>
	    <title>Valida cadastro</title>
	</head>
	<body link="blue" vlink="blue">
	    <?php
		    $conec;
			$bco;
			$conectou = 0;
			
			
			// é obrigatório
			$nome = $_POST['txnome'];
			
			$datanascimento = trim($_POST['txnascimento']);
				if (strstr($datanascimento, "/")){
					$aux = explode ("/", $datanascimento);
					$nascimento = $aux[2] . "-". $aux[1] . "-" . $aux[0];
				}
				
			$sexo = $_POST['rdsexo'];
			$nacionalidade = $_POST['txnacionalidade'];
			
				$preferencial =  $_POST['rdpreferencial'];
			
			// não é obrigatório
			if ((isset($_POST['rdRGouRE'])) && (isset($_POST['txRGouRE'])) ){
			   $rgoure = $_POST['rdRGouRE'];
               $numeroRGouRE = $_POST['txRGouRE'];
               $RGouRE = $rgoure.$numeroRGouRE;
	        }
	        else{
	            $RGouRE = "";
	            }
			

			if ((isset($_POST['rdSESC'])) && (isset($_POST['txSESC'])) ){
				$sesc =  $_POST['rdSESC'];
				$numeroSESC = $_POST['txSESC'];
				$SESC =  $sesc.$numeroSESC;
	        }
	        else{
	            $SESC = "";
	            }
			
			if (isset($_POST['txcontato'])){
			    $contato =  $_POST['txcontato']; }
	            else{
	            	$contato = "";
	            }
          
  			if (isset($_POST['txemail'])){
  				$email = $_POST['txemail'];
  				}
  				else{
  					$email = '';
  				}


  			
			$folder = "/home/paulo/htdocs_local/ilivre/fotos/";
			$foto = '';
			//print_r($_FILES);
			/*
			if (is_uploaded_file($_FILES['txfoto']['tmp_name']))  {   
			    if (move_uploaded_file($_FILES['txfoto']['tmp_name'], $folder.$_FILES['txfoto']['name'])) {
			    	$foto = $_FILES['txfoto']['name'];
			        echo "File uploaded";
			    } else {
			        echo "File not moved to destination folder. Check permissions";
			    };
			} else {
			    echo "File is not uploaded.";
			}; //*/
  			
  			
  			/*
  			if (isset($_POST['txfoto'])){
  				$foto = $_POST['txfoto'];
  				}
  				else{
  					$foto = '';
  				}
			//*/

     
        
		    if (isset($_POST['txOBS'])){
			$OBS =  $_POST['txOBS'];}
                else{
            $OBS = "";
            }
        
			
			include "conexao.php";
			
			
			
			if ($conectou) {

				$stgsql = "insert into usuarios values ('','$nome', '$nascimento',
				'$sexo', '$nacionalidade', '$RGouRE', '$SESC', '$contato', '$OBS', '$email', '$foto' )";
				$res = mysql_query($stgsql, $conec);
				if ($res) {
	                echo "<font face='Arial' size='2'>";
	                echo "<b>Usu&aacute;rio inclu&iacute;do com sucesso!</b>";
	                
	                $stgsql = "select idusuario from usuarios order by idusuario desc";
	                $res = mysql_query($stgsql, $conec);
	                $dados = mysql_fetch_array($res);
	                $idusuario = $dados['idusuario'];


	                if (is_uploaded_file($_FILES['txfoto']['tmp_name']))  {   
	                	$temp = explode(".",$_FILES["txfoto"]["name"]);
						$newfilename = 'foto-'.$idusuario . '.' .end($temp);
						
					    if (move_uploaded_file($_FILES['txfoto']['tmp_name'], $folder.$newfilename)) {
					    	$foto = $newfilename;
					        //echo "File uploaded";

					        include "conexao.php";
							if ($conectou) {

								$stgsql = "update usuarios set foto='$foto' where idusuario='$idusuario'";
				        		//echo "Update String: ".$stgsql."<br>";

								$res = mysql_query($stgsql, $conec);
								if ($res) {
					                echo "<font face='Arial' size='2'>";
					                echo "<b>Foto carregada!</b><br>";
					                echo '<img src="fotos/'.$dados['foto'].'" width="340px" height="250px" /><br><br>';
					                //$stgsql = "select * from usuarios where idusuario = '$idusuario'";
					    			//$res = mysql_query($stgsql,$conec);
					                //$dados = mysql_fetch_array($res);
					            }//result
				            }//conectou


					    } else {
					        echo "File not moved to destination folder. Check permissions";
					    };
					} else {
					    echo "File is not uploaded.";
					}; //*/

	                
	                
	                 
	                 echo "<br><b>Nome:</b> ".$nome ;
	                 echo "<br>";
	                 echo "<b>ID:</b> ".$idusuario ;
	                 echo "<br>";
	                  $nasc = $_POST['txnascimento'];
	                 echo "<b>Data de Nascimento:</b> ".$nasc ;
	                 echo "<br>";
	                  echo "<b>Sexo:</b> ".$sexo ;
	                 echo "<br>";
	                 echo "<b>P&aiacute;s de Origem:</b> ".$nacionalidade ;
	                 echo "<br>";
	                 echo "<b>RG ou RE:</b> ".$RGouRE ;
	                 echo "<br>";
	                 echo "<b>SESC:</b> ".$SESC ;
	                 echo "<br>";
	                 echo "<b>Telefone:</b> ".$contato ;
	                 echo "<br>";
	                 echo "<b>e-mail:</b> ".$email ;
	                 echo "<br>";
	                 echo "<b>Foto:</b> ".$foto ;
	                 echo "<br>";
	                echo "<b>&Eacute; preferencial?</b> ".$preferencial ;
	                 echo "<br>";
	                 echo "<b>OBS:</b> ".$OBS ;
	                 echo "<br>";
	                 echo "</font>";
	                             echo "<br>";
	                             echo "<br>";
	                             
	                             
	                             
	                             
	                             
	                // criando um arquivo log
					include "abrelog.php";
					$textlog = $headlog."Novo Cadastro efetuado:  .\r\n";
					include "escrevefechalog.php";
					// fim da mensagem log

	                include "extra2.php";

      			}
				else {
                echo "<font face='Arial' size='2'><b>Erro na inclus&atilde;o do usu&aacute;rio!</b></font>";
                echo "<br>";
                echo "<a href='cadastrausuario.php' target='principal'>Tentar Novamente</a>";
            	}

			} 
			

			
			
			
			
			
			
		?>
	</body>
</html>
	
